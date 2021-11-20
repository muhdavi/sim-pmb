<?php

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
Route::middleware(['guest'])->group(function (){
    Route::name('frontend.')->group(function (){
        Route::get('/', [FrontendController::class, 'index'])->name('index');
        Route::get('tentang', [FrontendController::class, 'tentang'])->name('tentang');
        Route::get('sekolah', [FrontendController::class, 'sekolah'])->name('sekolah');
        Route::get('kontak', [FrontendController::class, 'kontak'])->name('kontak');
        Route::get('daftar/{sekolah}-{slug}', [FrontendController::class, 'daftar'])->name('daftar');
        Route::get('print/{murid}-{slug}', [FrontendController::class, 'daftar'])->name('daftar');
        Route::post('store/{sekolah}-{slug}', [FrontendController::class, 'store'])->name('store');
    });
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
