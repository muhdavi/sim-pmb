<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function tentang()
    {
        return view('frontend.tentang');
    }

    public function sekolah()
    {
        return view('frontend.sekolah');
    }

    public function kontak()
    {
        return view('frontend.kontak');
    }
}
