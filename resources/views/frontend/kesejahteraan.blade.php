@extends('main.layout')

@section('content')
    <h1 class="text-xl">Riwayat Kesejahteraan</h1>
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
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">NPWP</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">No BPJS</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">No Taspen</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Kepemilikan Rumah</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Kartu Pegawai Elektronik</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($kesejahteraan as $data)
                            <tr>
                                <td class="border px-6 py-3 text-sm text-gray-800">{{ $loop->iteration }}</td>
                                <td class="border px-6 py-3 text-sm text-gray-800">{{ $data->npwp }}</td>
                                <td class="border px-6 py-3 text-sm text-gray-800">{{ $data->no_bpjs }}</td>
                                <td class="border px-6 py-3 text-sm text-gray-800">{{ $data->no_taspen }}</td>
                                <td class="border px-6 py-3 text-sm text-gray-800">{{ $data->kepemilikan_rumah }}</td>
                                <td class="border px-6 py-3 text-sm text-gray-800">{{ $data->kartu_pegawai_elektronik }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center border border-gray px-6 py-3 text-sm text-default-800">
                                    Belum ada data Riwayat Kesejahteraan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection