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
    return view('index');
});

Route::get('/sambutan', function () {
    return view('sambutan');
});

Route::get('/pendidikan', function () {
    return view('pendidikan');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/penelitian', function () {
    return view('penelitian');
});

Route::get('/pengabdian', function () {
    return view('pengabdian');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
