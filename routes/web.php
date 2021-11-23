<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require __DIR__.'/auth.php';

Route::name('frontend.')->group(function (){
    Route::get('/', [FrontendController::class, 'index'])->name('index');
    Route::get('tentang', [FrontendController::class, 'tentang'])->name('tentang');
    Route::get('sekolah', [FrontendController::class, 'sekolah'])->name('sekolah');
    Route::get('kontak', [FrontendController::class, 'kontak'])->name('kontak');
    Route::post('kontak_store', [FrontendController::class, 'kontak_store'])->name('kontak_store');
    Route::get('daftar/{sekolah}', [FrontendController::class, 'daftar'])->name('daftar');
    Route::get('print/{murid}', [FrontendController::class, 'print'])->name('print');
    Route::post('store', [FrontendController::class, 'store'])->name('store');
    Route::get('print/{murid}', [FrontendController::class, 'print'])->name('print');
});

Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard', [BackendController::class, 'index'])->name('dashboard');
    Route::name('backend.')->group(function (){
        Route::get('pendaftaran', [BackendController::class, 'pendaftaran'])->name('pendaftaran');
    });
});


Route::get('getKelurahan/{id}', function ($id) {
    $kelurahan = \App\Models\Kelurahan::orderBy('kelurahan')->where('kecamatan_id', $id)->get();
    return response()->json($kelurahan);
});
