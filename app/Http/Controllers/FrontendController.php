<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Sekolah;
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
        $kecamatans = Kecamatan::all();
        $kelurahans = Kelurahan::all();
        return view('frontend.daftar', compact('sekolah', 'kecamatans', 'kelurahans', 'agamas'));
    }

    public function store(Sekolah $sekolah, $slug)
    {
        return view('frontend.print');
    }


}
