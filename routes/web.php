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
use App\Http\Controllers\FiturController;

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

Route::get('/tentang', [BerandaController::class, 'tentang']);
Route::get('/mahasiswa', [BerandaController::class, 'mahasiswa']);
Route::get('/pengabdian', [BerandaController::class, 'pengabdian']);
Route::get('/pengumuman', [BerandaController::class, 'pengumuman']);
Route::get('/faq', [BerandaController::class, 'faq']);

Route::get('/sambutan', function () {
    return view('landingpage.sambutan');
});

Route::get('/pendidikan', function () {
    return view('landingpage.pendidikan');
});

Route::get('/alumni', function () {
    return view('landingpage.alumni');
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

Route::get('penelitian', [BerandaController::class, 'penelitian'])->name('penelitian');
Route::get('berita', [BerandaController::class, 'berita'])->name('berita');

Route::post('faq', [BerandaController::class, 'questionStore'])->name('questionStore');
Route::get('faq', [BerandaController::class, 'faq'])->name('faq');



// ADMIN
Route::resource('data-detail', DetailController::class);
Route::resource('data-penelitian', PenelitianController::class);
Route::resource('data-prestasi', PrestasiController::class);
Route::resource('data-berita', BeritaController::class);
Route::resource('data-faq', QuestionController::class);
Route::resource('data-fitur', FiturController::class);


Route::get('/tentang', [TentangController::class, 'view']);

Route::resource('data-banner', BannerController::class);
Route::resource('data-guru-besar', GuruBesarController::class);
Route::resource('data-agenda', AgendaController::class);
Route::resource('data-pengumuman', PengumumanController::class);
Route::resource('data-pengabdian', PengabdianController::class);

Route::resource('data-jurnal', JurnalController::class);
Route::get('/mahasiswa', [MahasiswaController::class, 'view']);

require __DIR__.'/auth.php';
