<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FBerandaController;
use App\Http\Controllers\BBerandaController;
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
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\DaftarPegawaiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Redirect root ke halaman login
Route::get('/', function () {
    return redirect()->route('login');
});

// Forgot Password
Route::get('/forgot-password', function () {
    return 'Fitur lupa password belum tersedia.';
})->name('password.request');

// ==== AUTH ====
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ==== FRONTEND (USER/PEGAWAI) ====
Route::prefix('/')->name('frontend.')->middleware(['auth'])->group(function () {
    Route::get('/beranda', [FBerandaController::class, 'index'])->name('beranda');
    Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai');
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
    Route::get('/dokumen', [DokumenController::class, 'index'])->name('dokumen');
});

// ==== BACKEND (ADMIN) ====
Route::prefix('/admin')->name('backend.')->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/beranda', [BBerandaController::class, 'index'])->name('beranda');

    // ROUTE DAFTAR PEGAWAI
    Route::get('/daftar-pegawai', [DaftarPegawaiController::class, 'index'])->name('daftar_pegawai');
    Route::get('/admin/pegawai/{pegawai}', [PegawaiController::class, 'show'])->name('backend.pegawai.show');
    Route::post('/daftar-pegawai/store', [DaftarPegawaiController::class, 'store'])->name('daftar_pegawai.store');
    Route::delete('/daftar-pegawai/{id}', [DaftarPegawaiController::class, 'destroy'])->name('daftar_pegawai.destroy');
    Route::get('/get-unit-kerja/{instansi}', [DaftarPegawaiController::class, 'getUnitKerja']);
    Route::get('/get-satuan-kerja/{unitKerja}', [DaftarPegawaiController::class, 'getSatuanKerja']);
    Route::resource('pegawai', PegawaiController::class);


});
