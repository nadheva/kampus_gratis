<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\GuruBesarController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TentangController;

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

Route::get('/', function () {
    return view('landingpage.index');
});

Route::get('/sambutan', function () {
    return view('landingpage.sambutan');
});

Route::get('/pendidikan', function () {
    return view('landingpage.pendidikan');
});

// Route::get('/tentang', function () {
//     return view('landingpage.tentang');
// });

// Route::get('/mahasiswa', function () {
//     return view('landingpage.mahasiswa');
// });

Route::get('/penelitian', function () {
    return view('landingpage.penelitian');
});

Route::get('/pengabdian', function () {
    return view('landingpage.pengabdian');
});

Route::get('/berita', function () {
    return view('landingpage.berita');
});

Route::get('/alumni', function () {
    return view('landingpage.alumni');
});

Route::get('/faq', function () {
    return view('landingpage.faq');
});

Route::get('/registrasi', function () {
    return view('landingpage.registrasi');
});

Route::get('/job-channel', function () {
    return view('landingpage.job-channel');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

// Route::get('/detail', function () {
//     return view('admin.detail');
// });
Route::resource('detail', DetailController::class);
Route::resource('data-penelitian', PenelitianController::class);
Route::get('/tentang', [TentangController::class, 'view']);
Route::resource('banner', BannerController::class);
Route::resource('guru-besar', GuruBesarController::class);
Route::resource('agenda', AgendaController::class);
Route::get('/mahasiswa', [MahasiswaController::class, 'view']);

// Route::resource('banner', [BannerController::class])->name('banner');

require __DIR__.'/auth.php';
