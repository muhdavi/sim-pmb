<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Murid;
use App\Models\MuridSekolah;
use App\Models\User;
use App\Models\WaliMurid;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use PDF;
use App\Models\Agama;
use App\Models\Sekolah;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $sekolahs = Sekolah::inRandomOrder()->where('koordinator_wilayah_id', 7)->limit(9)->get();
        return view('frontend.index', compact('sekolahs'));
    }

    public function tentang()
    {
        return view('frontend.tentang');
    }

    public function sekolah()
    {
        $sekolahs = Sekolah::inRandomOrder()->get();
        return view('frontend.sekolah', ['sekolahs' => $sekolahs]);
    }

    public function kontak()
    {
        return view('frontend.kontak');
    }

    public function kontak_store(Request $request)
    {
        $kontak = new Kontak;
        $kontak->nama = $request->nama;
        $kontak->email = $request->email;
        $kontak->judul = $request->judul;
        $kontak->pesan = $request->pesan;

        $kontak->save();

        return redirect()->route('frontend.kontak')->with('message', 'Berhasil dikirim, Balasan akan kami kirim melalui email!');
    }

    public function daftar(Sekolah $sekolah)
    {
        $agamas = Agama::all();
        $kecamatans = Kecamatan::orderBy('kecamatan')->get();
        $kelurahans = Kelurahan::orderBy('kelurahan')->get();
        $pekerjaans = Pekerjaan::orderBy('pekerjaan')->get();
        $sekolahs = Sekolah::inRandomOrder()->get();
        return view('frontend.daftar', compact('sekolah', 'kecamatans', 'kelurahans', 'agamas', 'sekolahs', 'pekerjaans'));
    }

    public function store(Request $request, Sekolah $sekolah)
    {
        $data = $request->all();
        $rules = [
            'pilihan[]' => 'not_in:-1',
            'agama' => 'not_in:-1',
        ];
        $messages = [
            'not_in' => ':attribute harus dipilih...!',
        ];
        $customAttributes = [
            'agama_id' => 'Agama',
            'pilihan2' => 'Pilihan II',
            'pilihan3' => 'Pilihan III',
        ];
        $validator = Validator::make($data, $rules, $messages, $customAttributes);

        if ($validator->fails())
        {
            return redirect()->route('frontend.daftar', $sekolah->id)->withErrors($validator)->withInput();
        } else {
            $user = new User;
            $user->name = $request->nama;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);

            $user->save();

            $user_id = User::where('id', $user->id)->first();

            $murid = new Murid;
            $murid->murid = $request->murid;
            $murid->nisn = $request->nisn;
            $murid->tempat_lahir = $request->tempat_lahir;
            $murid->tanggal_lahir = $request->tanggal_lahir;
            $murid->jenis_kelamin = $request->jenis_kelamin;
            $murid->alamat = $request->alamat;
            $murid->sekolah_asal = $request->sekolah_asal;
            $murid->agama_id = $request->agama_id;
            $murid->user_id = $user_id->id;
            $murid->kelurahan_id = $request->kelurahan;

            if ($request->hasFile("foto")) {
                $foto = $request->foto;
                $fn_foto = $murid->murid . "_" . time() . "." . $foto->getClientOriginalExtension();
                $foto->move(public_path('foto'), $fn_foto);
                $murid->foto = $fn_foto;
            }
            $murid->save();

            try {
                $sekolah_id = $request->pilihan;
                for ($i = 0; $i < count($sekolah_id); $i++) {
                    $murid_sekolah = new MuridSekolah;
                    $murid_sekolah->sekolah_id = $sekolah_id[$i];
                    $murid_sekolah->murid_id = $murid->id;
                    $murid_sekolah->pilihan = $i + 1;
                    $murid_sekolah->tahun = Date('Y');
                    $murid_sekolah->save();
                }
                return view('frontend.success', ['murid' => $murid]);
            } catch (QueryException $e) {
                $errorCode = $e->errorInfo[1];
                if ($errorCode == '1062') {
                    return redirect()->route('frontend.daftar', $sekolah->id)->withErrors();
                } else {
                    return redirect()->route('frontend.daftar', $sekolah->id)->withErrors();
                }
            }
        }
    }

    public function print(Murid $murid)
    {
        $path = 'assets/img/logo-simpmb-hijau.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $logo = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $path_foto = 'foto/' . $murid->foto;
        $type_foto = pathinfo($path_foto, PATHINFO_EXTENSION);
        $data_foto = file_get_contents($path_foto);
        $foto = 'data:image/' . $type_foto . ';base64,' . base64_encode($data_foto);

        $pdf = PDF::loadview('frontend.print', ['logo' => $logo, 'foto' => $foto, 'murid' => $murid]);
        return $pdf->stream($murid->name . 'pendaftaran_simpmb');
    }
}
