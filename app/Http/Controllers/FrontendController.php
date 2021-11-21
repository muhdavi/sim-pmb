<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Murid;
use App\Models\Sekolah;
use App\Models\WaliMurid;
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

    public function daftar(Sekolah $sekolah, $slug)
    {
        $agamas = Agama::all();
        $kecamatans = Kecamatan::orderBy('kecamatan')->get();
        $kelurahans = Kelurahan::all();
        return view('frontend.daftar', compact('sekolah', 'kecamatans', 'kelurahans', 'agamas'));
    }

    public function store(Request $request, Sekolah $sekolah, $slug)
    {
        $wali = new WaliMurid;
        $wali->nik_ayah = $request->nik_ayah;
        $wali->nik_ibu = $request->nik_ibu;
        $wali->nama_ayah = $request->nama_ayah;
        $wali->nama_ibu = $request->nama_ibu;
        $wali->pekerjaan_ayah = $request->pekerjaan_ibu;
        $wali->pekerjaan_ibu = $request->pekerjaan_ibu;
        $wali->alamat = $request->alamat_wali;
        $wali->kelurahan_id = $request->kelurahan_wali;
        $wali->save();

        $wali_id = WaliMurid::where('nik_ayah', $wali->nik_ayah)->first();

        $murid = new Murid;
        $murid->murid = $request->murid;
        $murid->nisn = $request->nisn;
        $murid->tempat_lahir = $request->tempat_lahir;
        $murid->tanggal_lahir = $request->tanggal_lahir;
        $murid->jenis_kelamin = $request->jenis_kelamin;
        $murid->alamat = $request->alamat_murid;
        $murid->sekolah_asal = $request->sekolah_asal;
        $murid->agama_id = $request->agama_id;
        $murid->wali_id = $wali_id->id;
        $murid->sekolah_id = $sekolah->id;
        $murid->kelurahan_id = $request->kelurahan_murid;

        if ($request->hasFile("foto")) {
            $foto = $request->foto;
            $fn_foto = $murid->murid . "_" . time() . "." . $foto->getClientOriginalExtension();
            $foto->move(public_path('foto'), $fn_foto);
            $murid->foto = $fn_foto;
        }

        $murid->save();
        return view('frontend.success');
    }

    public function loadData(Request $request)
    {
        if ($request->has('q')) {
            $cari = $request->q;
            $data = DB::table('sekolahs')->select('id', 'sekolah')->where('sekolah', 'LIKE', '%$cari%')->get();
            return response()->json($data);
        }
    }
}
