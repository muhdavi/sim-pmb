<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\KoordinatorWilayah;
use App\Models\Murid;
use App\Models\Sekolah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function kelulusan()
    {
        $paginate = 5;
        $murids = Murid::where('user_id', Auth::user()->id)->paginate($paginate);
        return view('backend.kelulusan', compact('murids'));
    }

    public function pendaftaran()
    {
        $paginate = 5;
        $murids = Murid::paginate($paginate);
        return view('backend.pendaftaran', compact('murids'));
    }

    public function profil()
    {
        $sekolah = Sekolah::findOrFail(Auth::user()->sekolah_id);
        $user = User::findOrFail(Auth::user()->id);
        $kelurahans = Kelurahan::all();
        $kecamatans = Kecamatan::all();
        $koorwils = KoordinatorWilayah::all();
        return view('backend.profil', compact('user', 'sekolah', 'kelurahans', 'kecamatans', 'koorwils'));
    }
}
