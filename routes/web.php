<?php

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

Route::get('/', function () {
    return view('landingpage.index');
});

Route::get('/sambutan', function () {
    return view('landingpage.sambutan');
});

Route::get('/pendidikan', function () {
    return view('landingpage.pendidikan');
});

Route::get('/tentang', function () {
    return view('landingpage.tentang');
});

Route::get('/mahasiswa', function () {
    return view('landingpage.mahasiswa');
});

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
});

Route::get('/banner', function () {
    return view('admin.banner');
});


Route::get('/dashboard-login', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
