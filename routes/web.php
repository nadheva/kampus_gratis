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

// Route::get('/', function () {
//     return view('landingpage.index');
// });

Route::get('/tentang', [BerandaController::class, 'tentang'])->name('tentang');
Route::get('/mahasiswa', [BerandaController::class, 'mahasiswa'])->name('mahasiswa');
Route::get('/pengabdian', [BerandaController::class, 'pengabdian'])->name('pengabdian');
Route::get('/pengumuman', [BerandaController::class, 'pengumuman'])->name('pengumuman');
Route::get('/faq', [BerandaController::class, 'faq'])->name('faq');
Route::get('/alumni', [BerandaController::class, 'alumni'])->name('alumni');
Route::get('/', [BerandaController::class, 'beranda']);
Route::get('/job-channel', [BerandaController::class, 'jobchannel']);
Route::get('/registrasi', [BerandaController::class, 'registrasi']);
Route::post('/post_registrasi', [BerandaController::class, 'post_registrasi']);

Route::get('/sambutan', function () {
    return view('landingpage.sambutan');
});

Route::get('/pendidikan', function () {
    return view('landingpage.pendidikan');
});
Route::get('/sarjana', function () {
    return view('landingpage.pendidikan.sarjana');
});
Route::get('/peraturan-akademik-sarjana', function () {
    return view('landingpage.pendidikan.sarjana.peraturan-akademik');
});
// Route::get('/registrasi', function () {
//     return view('landingpage.registrasi');
// });

// Route::get('/job-channel', function () {
//     return view('landingpage.job-channel');
// });

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('penelitian', [BerandaController::class, 'penelitian'])->name('penelitian');
Route::get('berita', [BerandaController::class, 'berita'])->name('berita');
Route::post('faq', [BerandaController::class, 'questionStore'])->name('questionStore');
Route::get('faq', [BerandaController::class, 'faq'])->name('faq');

Route::prefix('admin')->group(function () {
    Route::resource('detail', DetailController::class);
    Route::resource('data-penelitian', PenelitianController::class);
    Route::resource('data-prestasi', PrestasiController::class);
    Route::resource('data-berita', BeritaController::class);
    Route::resource('data-faq', QuestionController::class);
    Route::resource('data-fitur', FiturController::class);


    Route::get('/tentang', [TentangController::class, 'view']);

    Route::resource('banner', BannerController::class);
    Route::resource('guru-besar', GuruBesarController::class);
    Route::resource('agenda', AgendaController::class);
    Route::resource('pengumuman', PengumumanController::class);
    Route::resource('pengabdian', PengabdianController::class);
    Route::resource('alumni', AlumniController::class);

    Route::resource('data-jurnal', JurnalController::class);
    Route::get('/mahasiswa', [MahasiswaController::class, 'view']);
});


Route::resource('data-banner', BannerController::class);
Route::resource('data-guru-besar', GuruBesarController::class);
Route::resource('data-agenda', AgendaController::class);
Route::resource('data-pengumuman', PengumumanController::class);
Route::resource('data-pengabdian', PengabdianController::class);


require __DIR__ . '/auth.php';
