<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\GuruBesarController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\PenelitianController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PengabdianController;
use App\Http\Controllers\AlumniController;

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

//Beranda
Route::get('/tentang-page', [BerandaController::class, 'tentang']);
Route::get('/mahasiswa-page', [BerandaController::class, 'mahasiswa']);
Route::get('/pengabdian-page', [BerandaController::class, 'pengabdian']);
Route::get('/pengumuman-page', [BerandaController::class, 'pengumuman']);
Route::get('/alumni-page', [BerandaController::class, 'alumni']);

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


Route::get('/berita', function () {
    return view('landingpage.berita');
});

// Route::get('/alumni-page', function () {
//     return view('landingpage.alumni');
// });

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
Route::resource('data-prestasi', PrestasiController::class);
Route::resource('data-berita', BeritaController::class);
Route::resource('data-faq', QuestionController::class);

Route::get('/tentang', [TentangController::class, 'view']);

Route::resource('banner', BannerController::class);
Route::resource('guru-besar', GuruBesarController::class);
Route::resource('agenda', AgendaController::class);
Route::resource('pengumuman', PengumumanController::class);
Route::resource('pengabdian', PengabdianController::class);
Route::resource('alumni', AlumniController::class);

Route::resource('data-jurnal', JurnalController::class);
Route::get('/mahasiswa', [MahasiswaController::class, 'view']);

// Route::resource('banner', [BannerController::class])->name('banner');

require __DIR__.'/auth.php';
