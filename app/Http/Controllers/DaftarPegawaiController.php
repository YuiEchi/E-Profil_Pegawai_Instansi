<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Instansi;
use App\Models\UnitKerja;
use App\Models\SatuanKerja;
use Illuminate\Support\Facades\Storage;


class DaftarPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = Pegawai::all();
        $instansis = Instansi::all();
        $unitKerjas = UnitKerja::all();
        $satuanKerjas = SatuanKerja::all();

        return view('backend.daftar_pegawai', compact('pegawai', 'instansis', 'unitKerjas', 'satuanKerjas'));
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
        // === VALIDASI DATA ===
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'nip' => 'required|string|max:50|unique:pegawai,nip',
        'no_kk' => 'nullable|string|max:50',
        'tpt_lahir' => 'nullable|string|max:100',
        'tgl_lahir' => 'nullable|date',
        'no_karpeg' => 'nullable|string|max:50',
        'agama' => 'nullable|string|max:50',
        'golongan_darah' => 'nullable|string|max:5',
        'status_kawin' => 'nullable|string|max:50',
        'tgl_kawin' => 'nullable|date',
        'no_karis_karsu' => 'nullable|string|max:50',
        'almt_rumah' => 'nullable|string|max:255',
        'tmt_pensiun' => 'nullable|date',
        'instansi_id' => 'nullable|exists:instansi,id',
        'unit_kerja_id' => 'nullable|exists:unit_kerja,id',
        'satuan_kerja_id' => 'nullable|exists:satuan_kerja,id',
        'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    // === SIMPAN FOTO JIKA ADA ===
    if ($request->hasFile('foto')) {
        $validated['foto'] = $request->file('foto')->store('foto_pegawai', 'public');
    }

    // 🔍 Audit isi data sebelum simpan
    logger('📦 Data yang akan disimpan:', $validated);

    // === SIMPAN DATA PEGAWAI ===
    Pegawai::create($validated);

    // === REDIRECT DENGAN NOTIFIKASI ===
    return redirect()->route('backend.daftar_pegawai')
        ->with('success', '✅ Data pegawai berhasil ditambahkan.');


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
        $pegawai = Pegawai::findOrFail($id);
    
        // Hapus foto jika ada
        if ($pegawai->foto) {
            Storage::disk('public')->delete($pegawai->foto);
        }

        $pegawai->delete();

        return redirect()->back()->with('success', '✅ Data pegawai berhasil dihapus.');

    }
}
