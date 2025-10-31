@extends('main.layout')
@section('content')
    <h1 class="text-xl">Riwayat Pendidikan</h1>
<<<<<<< HEAD

    <div>
        <div class="overflow-x-auto">
            <div class="min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-blue-600">
                            <tr>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-100" style="width: 50px;">No</th>
                                <th class="border border-gray px-6 py-3 text-sm text-default-100">Strata</th>
                                <th class="border border-gray px-6 py-3 text-sm text-default-100
                                ">Jurusan</th>
                                <th class="border border-gray px-6 py-3 text-sm text-default-100
                                ">Nama Sekolah/PT</th>
                                <th class="border border-gray px-6 py-3 text-sm text-default-100
                                ">No Ijazah</th>
                                <th class="border border-gray px-6 py-3 text-sm text-default-100
                                ">Tahun Lulus</th>
                                <th class="border border-gray px-6 py-3 text-sm text-default-100
                                ">Pimpinan</th>
                                <th class="border border-gray px-6 py-3 text-sm text-default-100
                                ">Kode Pendidikan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($riwayat_pendidikan as $rp)
                                <tr class="odd:bg-white">
                                    <td class="border border-gray px-6 py-4 text-sm text-default-800">{{ $loop->iteration }}</td>
                                    <td class="border border-gray px-6 py-4 text-sm text-default-800">
                                        {{ $rp->strata->strata ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-4 text-sm text-default-800">
                                        {{ $rp->strata->jurusan ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-4 text-sm text-default-800">
                                        {{ $rp->nm_sekolah_pt ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-4 text-sm text-default-800">
                                        {{ $rp->no_ijazah ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-4 text-sm text-default-800">
                                        {{ $rp->thn_lulus ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-4 text-sm text-default-800">
                                        {{ $rp->pimpinan ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-4 text-sm text-default-800">
                                        {{ $rp->kode_pendidikan ?? '-' }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
=======
    <!-- Profil Pegawai yang login -->
    <div class="bg-white shadow rounded-xl p-6 mb-6">
        <div class="flex items-center gap-6">
        @php
            $pegawai = Auth::user()->pegawai;
            $jabatanTerbaru = $pegawai?->riwayatJabatan?->sortByDesc('created_at')->first()?->jabatan;

            $fotoPath = 'foto_pegawai/' . ($pegawai->foto ?? '');
            $fotoUrl = file_exists(public_path($fotoPath)) && $pegawai->foto
                ? asset($fotoPath)
                : asset('assets/images/users/default.png');
        @endphp
        <img src="{{ $fotoUrl }}"
            alt="Foto Pegawai"
            class="w-24 h-24 object-cover rounded-full border border-gray-300 shadow-sm"
            style="aspect-ratio: 1 / 1; max-width: 100px;">

            <div>
                <p class="text-gray-800 font-medium text-lg">
                    {{ $pegawai->nama ?? 'Nama Pegawai' }}
                </p>
                <p class="text-gray-600 text-sm">
                    NIP: {{ $pegawai->nip ?? '1234567890' }}
                </p>
                <p class="text-gray-600 text-sm">
                    Jabatan: {{ $jabatanTerbaru ?? 'Staff' }}
                </p>
            </div>
        </div>
    </div>
    
    <div class="overflow-x-auto">
        <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-600">
                        <tr>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100" style="width: 50px;">No</th>
                            <th class="border border-gray px-6 py-3 text-sm text-default-100">Strata</th>
                            <th class="border border-gray px-6 py-3 text-sm text-default-100
                            ">Jurusan</th>
                            <th class="border border-gray px-6 py-3 text-sm text-default-100
                            ">Nama Sekolah/PT</th>
                            <th class="border border-gray px-6 py-3 text-sm text-default-100
                            ">No Ijazah</th>
                            <th class="border border-gray px-6 py-3 text-sm text-default-100
                            ">Tahun Lulus</th>
                            <th class="border border-gray px-6 py-3 text-sm text-default-100
                            ">Pimpinan</th>
                            <th class="border border-gray px-6 py-3 text-sm text-default-100
                            ">Kode Pendidikan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($riwayat_pendidikan as $rp)
                            <tr class="odd:bg-white">
                                <td class="border border-gray px-6 py-3 text-sm text-default-800">{{ $loop->iteration }}</td>
                                <td class="border border-gray px-6 py-3 text-sm text-default-800">
                                    {{ $rp->strata->strata ?? '-' }}
                                </td>
                                <td class="border border-gray px-6 py-3 text-sm text-default-800">
                                    {{ $rp->strata->jurusan ?? '-' }}
                                </td>
                                <td class="border border-gray px-6 py-3 text-sm text-default-800">
                                    {{ $rp->nm_sekolah_pt ?? '-' }}
                                </td>
                                <td class="border border-gray px-6 py-3 text-sm text-default-800">
                                    {{ $rp->no_ijazah ?? '-' }}
                                </td>
                                <td class="border border-gray px-6 py-3 text-sm text-default-800">
                                    {{ $rp->thn_lulus ?? '-' }}
                                </td>
                                <td class="border border-gray px-6 py-3 text-sm text-default-800">
                                    {{ $rp->pimpinan ?? '-' }}
                                </td>
                                <td class="border border-gray px-6 py-3 text-sm text-default-800">
                                    {{ $rp->kode_pendidikan ?? '-' }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center border border-gray px-6 py-3 text-sm text-default-800">
                                    Belum ada data Riwayat Pendidikan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
>>>>>>> upstream/Restu-ujicoba
            </div>
        </div>
    </div>
@endsection
