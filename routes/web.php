<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\DiklatController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\PlhPltController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\KgbController;
use App\Http\Controllers\PenghargaanController;
use App\Http\Controllers\SlksController;
use App\Http\Controllers\OrganisaasiController;
use App\Http\Controllers\PrestasiKerjaController;
use App\Http\Controllers\AsesmenController;
use App\Http\Controllers\KesejahteraanController;
use App\Http\Controllers\KeluargaController;




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

Route::get('/pendidikan', [PendidikanController::class, 'index'])->name('pendidikan');

Route::get('/jabatan', [JabatanController::class, 'index'])->name('jabatan');

Route::get('/plh_plt', [PlhPltController::class, 'index'])->name('plh_plt');

Route::get('/golongan', [GolonganController::class, 'index'])->name('golongan');

Route::get('/diklat', [DiklatController::class, 'index'])->name('diklat');

Route::get('/gaji', [GajiController::class, 'index'])->name('gaji');

Route::get('/kgb', [KgbController::class, 'index'])->name('kgb');

Route::get('/penghargaan', [PenghargaanController::class, 'index'])->name('penghargaan');

Route::get('/slks', [SlksController::class, 'index'])->name('slks');

Route::get('/organisasi', [OrganisaasiController::class, 'index'])->name('organisasi');

Route::get('/prestasi', [PrestasiKerjaController::class, 'index'])->name('prestasi');

Route::get('/asesmen', [AsesmenController::class, 'index'])->name('asesmen');

Route::get('/kesejahteraan', [KesejahteraanController::class, 'index'])->name('kesejahteraan');

Route::get('/keluarga', [KeluargaController::class, 'index'])->name('keluarga');




Route::get('/dokumen', function () {
    return view('dokumen');
})->name('dokumen');


