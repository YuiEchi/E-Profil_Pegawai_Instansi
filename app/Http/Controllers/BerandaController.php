<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\RiwayatPendidikan;
use App\Models\RiwayatJabatan;
use App\Models\RiwayatPlhPlt;
use App\Models\RiwayatGolongan;
use App\Models\RiwayatDiklat;
use App\Models\RiwayatKgb;
use App\Models\RiwayatPenghargaan;
use App\Models\RiwayatSlks;
use App\Models\RiwayatOrganisasi;
use App\Models\NilaiPrestasiKerja; 
use App\Models\RiwayatAsesmen;
use App\Models\Kesejahteraan;
use App\Models\DataKeluarga;
use App\Models\Dokumen;
use App\Models\RiwayatGaji;
 


class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $updates = collect();

        // ambil data terbaru dari masing-masing tabel
        $updates = $updates->merge(
            RiwayatPendidikan::latest()->take(5)->get()->map(function ($item) {
                return [
                    'nama' => 'Riwayat Pendidikan',
                    'created_at' => $item->created_at,
                ];
            })
        );
        
        $updates = $updates->merge(
            RiwayatJabatan::latest()->take(5)->get()->map(function ($item) {
                return [
                    'nama' => 'Riwayat Jabatan',
                    'created_at' => $item->created_at,
                ];
            })
        );
        
        $updates = $updates->merge(
            RiwayatPlhPlt::latest()->take(5)->get()->map(function ($item) {
                return [
                    'nama' => 'Riwayat PLH/PLT',
                    'created_at' => $item->created_at,
                ];
            })
        );

        $updates = $updates->merge(
            RiwayatGolongan::latest()->take(5)->get()->map(function ($item) {
                return [
                    'nama' => 'Riwayat Golongan',
                    'created_at' => $item->created_at,
                ];
            })
        );
        
        $updates = $updates->merge(
            RiwayatDiklat::latest()->take(5)->get()->map(function ($item) {
                return [
                    'nama' => 'Riwayat Diklat',
                    'created_at' => $item->created_at,
                ];
            })
        );
        
        $updates = $updates->merge(
            RiwayatGaji::latest()->take(5)->get()->map(function ($item) {
                return [
                    'nama' => 'Riwayat Gaji',
                    'created_at' => $item->created_at,
                ];
            })
        );
        
        $updates = $updates->merge(
            RiwayatKgb::latest()->take(5)->get()->map(function ($item) {
                return [
                    'nama' => 'Riwayat KGB',
                    'created_at' => $item->created_at,
                ];
            })
        );
        
        $updates = $updates->merge(
            RiwayatPenghargaan::latest()->take(5)->get()->map(function ($item) {
                return [
                    'nama' => 'Riwayat Penghargaan',
                    'created_at' => $item->created_at,
                ];
            })
        );

        $updates = $updates->merge(
            RiwayatSlks::latest()->take(5)->get()->map(function ($item) {
                return [
                    'nama' => 'Riwayat SLKS',
                    'created_at' => $item->created_at,
                ];
            })
        );

        $updates = $updates->merge(
            RiwayatOrganisasi::latest()->take(5)->get()->map(function ($item) {
                return [
                    'nama' => 'Riwayat Organisasi',
                    'created_at' => $item->created_at,
                ];
            })
        );

        $updates = $updates->merge(
            NilaiPrestasiKerja::latest()->take(5)->get()->map(function ($item) {
                return [
                    'nama' => 'Nilai Prestasi Kerja',
                    'created_at' => $item->created_at,
                ];
            })
        );
        
        $updates = $updates->merge(
            RiwayatAsesmen::latest()->take(5)->get()->map(function ($item) {
                return [
                    'nama' => 'Riwayat Asesmen',
                    'created_at' => $item->created_at,
                ];
            })
        );

        $updates = $updates->merge(
            Kesejahteraan::latest()->take(5)->get()->map(function ($item) {
                return [
                    'nama' => 'Kesejahteraan',
                    'created_at' => $item->created_at,
                ];
            })
        );
        
        $updates = $updates->merge(
            DataKeluarga::latest()->take(5)->get()->map(function ($item) {
                return [
                    'nama' => 'Data Keluarga',
                    'created_at' => $item->created_at,
                ];
            })
        );

        $updates = $updates->merge(
            Dokumen::with('folder')->latest()->take(5)->get()->map(function ($item) {
                return [
                    'nama' => 'Dokumen',
                    'created_at' => $item->created_at,
                ];
            })
        );

        // urutkan semua data berdasarkan created_at terbaru
        $latestUpdates = $updates->sortByDesc('created_at')->take(10);

        return view('frontend.beranda',[
            'pendidikanCount' => RiwayatPendidikan::count(),
            'jabatanCount' => RiwayatJabatan::count(),
            'plhpltCount' => RiwayatPlhPlt::count(),
            'golonganCount' => RiwayatGolongan::count(),
            'diklatCount' => RiwayatDiklat::count(),
            'gajiCount' => RiwayatGaji::count(),
            'kgbCount' => RiwayatKgb::count(),
            'penghargaanCount' => RiwayatPenghargaan::count(),
            'slksCount' => RiwayatSlks::count(),
            'organisasiCount' => RiwayatOrganisasi::count(),
            'prestasiCount' => NilaiPrestasiKerja::count(),
            'asesmenCount' => RiwayatAsesmen::count(),
            'kesejahteraanCount' => Kesejahteraan::count(),
            'keluargaCount' => DataKeluarga::count(),
            'dokumenCount' => Dokumen::count()
        ], compact('latestUpdates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
