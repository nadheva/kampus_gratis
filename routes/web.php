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

Route::get('/pengumuman', function () {
    return view('landingpage.pengumuman');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
