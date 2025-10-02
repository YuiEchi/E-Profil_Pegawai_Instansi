<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Auth;
use App\Models\Instansi;
use App\Models\UnitKerja;
use App\Models\SatuanKerja;


class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = Auth::user()->pegawai;
        return view('frontend.pegawai', compact('pegawai'));

        $pegawais = Pegawai::all(); // untuk daftar semua pegawai
        $instansis = Instansi::all();
        $unitKerjas = UnitKerja::all();
        $satuanKerjas = SatuanKerja::all();
        return view('backend.daftar_pegawai', compact('pegawais', 'instansis', 'unitKerjas', 'satuanKerjas'));

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
    public function show($id)
    {
        session(['pegawai_id' => $id]);

        $pegawai = Pegawai::with(['instansi', 'unit_kerja', 'satuan_kerja'])->findOrFail($id);
        $instansis = Instansi::all();
        $unitKerjas = UnitKerja::all();
        $satuanKerjas = SatuanKerja::all();

        return view('backend.pegawai.show', compact('pegawai', 'instansis', 'unitKerjas', 'satuanKerjas'));

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
    public function update(Request $request, $id)
    {
        $pegawai = Pegawai::findOrFail($id);

        $pegawai->nama = $request->nama;
        $pegawai->nip = $request->nip;
        $pegawai->no_kk = $request->no_kk;
        $pegawai->tpt_lahir = $request->tpt_lahir;
        $pegawai->tgl_lahir = $request->tgl_lahir;
        $pegawai->no_karpeg = $request->no_karpeg;
        $pegawai->agama = $request->agama;
        $pegawai->golongan_darah = $request->golongan_darah;
        $pegawai->status_kawin = $request->status_kawin;
        $pegawai->tgl_kawin = $request->tgl_kawin;
        $pegawai->no_karis_karsu = $request->no_karis_karsu;
        $pegawai->almt_rumah = $request->almt_rumah;
        $pegawai->tmt_pensiun = $request->tmt_pensiun;
        $pegawai->instansi_id = $request->instansi_id;
        $pegawai->unit_kerja_id = $request->unit_kerja_id;
        $pegawai->satuan_kerja_id = $request->satuan_kerja_id;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $namaFile = time() . '_' . $foto->getClientOriginalName();
            $foto->move(public_path('foto_pegawai'), $namaFile);
            $pegawai->foto = $namaFile;
        }

        $pegawai->save();

        return redirect()->route('backend.pegawai.show', ['pegawai' => $pegawai->id])->with('success', ' ✅ Data pegawai berhasil diperbarui.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
