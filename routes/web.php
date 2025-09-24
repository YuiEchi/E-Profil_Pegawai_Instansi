<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PegawaiController::class, 'index'])->name('pegawai');

Route::get('/pendidikan', function () {
    return view('pendidikan');
})->name('pendidikan');

Route::get('/jabatan', function () {
    return view('jabatan');
})->name('jabatan');

Route::get('/plh_plt', function () {
    return view('plh_plt');
})->name('plh_plt');

Route::get('/golongan', function () {
    return view('golongan');
})->name('golongan');

Route::get('/diklat', function () {
    return view('diklat');
})->name('diklat');

Route::get('/gaji', function () {
    return view('gaji');
})->name('gaji');

Route::get('/kgb', function () {
    return view('kgb');
})->name('kgb');

Route::get('/penghargaan', function () {
    return view('penghargaan');
})->name('penghargaan');

Route::get('/slks', function () {
    return view('slks');
})->name('slks');

Route::get('/organisasi', function () {
    return view('organisasi');
})->name('organisasi');

Route::get('/prestasi', function () {
    return view('prestasi');
})->name('prestasi');

Route::get('/asesmen', function () {
    return view('asesmen');
})->name('asesmen');

Route::get('/kesejahteraan', function () {
    return view('kesejahteraan');
})->name('kesejahteraan');

Route::get('/keluarga', function () {
    return view('keluarga');
})->name('keluarga');

Route::get('/dokumen', function () {
    return view('dokumen');
})->name('dokumen');


