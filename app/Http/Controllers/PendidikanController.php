<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatPendidikan;
<<<<<<< HEAD
=======
use App\Models\Strata;
use App\Models\Pegawai;
>>>>>>> upstream/Restu-ujicoba

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resourc.
     */
    public function index()
    {
        $pegawaiId = auth()->user()->pegawai_id;
        $riwayat_pendidikan = RiwayatPendidikan::with(['pegawai', 'strata'])->where('pegawai_id', $pegawaiId)->get();
        return view('frontend.pendidikan', compact('riwayat_pendidikan'));
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
<<<<<<< HEAD
        //
=======
        $request->validate([
            'pegawai_id' => 'required|exists:pegawai,id',
            'nm_sekolah_pt' => 'required|string|max:255',
            'no_ijazah' => 'required|string|max:100',
            'thn_lulus' => 'required|digits:4|integer|min:1901|max:' . date('Y'),
            'pimpinan' => 'nullable|string|max:100',
            'kode_pendidikan' => 'nullable|string|max:50',
        ]);

        // Validasi strata: minimal pilih atau isi baru
        if (!$request->strata_id && (!$request->nama_strata || !$request->jurusan)) {
            return back()->withErrors(['strata_id' => 'Pilih strata lama atau isi strata baru.'])->withInput();
        }

        // ✅ Simpan strata jika baru dibuat
        if ($request->strata_id) {
            $strata_id = $request->strata_id;
        } else {
            $strata = Strata::create([
                'nama_strata' => $request->nama_strata,
                'jurusan' => $request->jurusan,
            ]);
            $strata_id = $strata->id;
        }

        // ✅ Simpan riwayat pendidikan
        RiwayatPendidikan::create([
            'pegawai_id' => $request->pegawai_id,
            'strata_id' => $strata_id,
            'nm_sekolah_pt' => $request->nm_sekolah_pt,
            'no_ijazah' => $request->no_ijazah,
            'thn_lulus' => $request->thn_lulus,
            'pimpinan' => $request->pimpinan,
            'kode_pendidikan' => $request->kode_pendidikan,
        ]);

        return redirect()->route('backend.pendidikan.show', $request->pegawai_id)
            ->with('success', '✅ Data Riwayat pendidikan berhasil ditambahkan.');
>>>>>>> upstream/Restu-ujicoba
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
<<<<<<< HEAD
        //
=======
        session(['pegawai_id' => $id]);

        $pegawai = Pegawai::findOrFail($id);
        $riwayat_pendidikan = RiwayatPendidikan::with('strata')
                                ->where('pegawai_id', $id)
                                ->orderByDesc('thn_lulus') // opsional
                                ->get();

        $strata = Strata::all();

        return view('backend.pegawai.riwayat_pendidikan', compact('pegawai', 'riwayat_pendidikan', 'strata'));
>>>>>>> upstream/Restu-ujicoba
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
<<<<<<< HEAD
        //
=======
        $rp = RiwayatPendidikan::findOrFail($id);
        $rp->update([
            'strata_id' => $request->strata_id,
            'nm_sekolah_pt' => $request->nm_sekolah_pt,
            'no_ijazah' => $request->no_ijazah,
            'thn_lulus' => $request->thn_lulus,
            'pimpinan' => $request->pimpinan,
            'kode_pendidikan' => $request->kode_pendidikan,
        ]);

        return redirect()->back()->with('success', '✅ Data riwayat pendidikan dan strata berhasil diperbarui.');

>>>>>>> upstream/Restu-ujicoba
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
<<<<<<< HEAD
        //
=======
        $riwayat_pendidikan = RiwayatPendidikan::findOrFail($id);
        $riwayat_pendidikan->delete();

        return redirect()->back()->with('success', '✅ Data riwayat pendidikan berhasil dihapus.');
>>>>>>> upstream/Restu-ujicoba
    }
}
