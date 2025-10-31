@extends('main.layout')
@section('content')
    <h1 class="text-xl">Data keluarga</h1>
<<<<<<< HEAD

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
    
>>>>>>> upstream/Restu-ujicoba
    <div class="overflow-x-auto">
        <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-600">
                        <tr>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100" style="width: 50px;">No</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Nama</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">NIK</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Tempat Lahir</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Tanggal Lahir</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Jenis Kelamin</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Status Keluarga</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Pendidikan</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Pekerjaan</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">NIP</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
<<<<<<< HEAD
                        @foreach ($data_keluarga as $keluarga)
                            <tr>
                                <td class="border border-gray-200 px-6 py-4 text-sm text-gray-800">{{ $loop->iteration }}</td>
                                <td class="border border-gray-200 px-6 py-4 text-sm text-gray-800">{{ $keluarga->nama }}</td>
                                <td class="border border-gray-200 px-6 py-4 text-sm text-gray-800">{{ $keluarga->nik }}</td>
                                <td class="border border-gray-200 px-6 py-4 text-sm text-gray-800">{{ $keluarga->tmpt_lahir }}</td>
                                <td class="border border-gray-200 px-6 py-4 text-sm text-gray-800">{{ \Carbon\Carbon::parse($keluarga->tgl_lahir)->format('d-m-Y') }}</td>
                                <td class="border border-gray-200 px-6 py-4 text-sm text-gray-800">{{ $keluarga->jenis_kelamin }}</td>
                                <td class="border border-gray-200 px-6 py-4 text-sm text-gray-800">{{ $keluarga->status_keluarga }}</td>
                                <td class="border border-gray-200 px-6 py-4 text-sm text-gray-800">{{ $keluarga->pendidikan }}</td>
                                <td class="border border-gray-200 px-6 py-4 text-sm text-gray-800">{{ empty($keluarga->pekerjaan) ? '-' :$keluarga->pekerjaan }}</td>
                                <td class="border border-gray-200 px-6 py-4 text-sm text-gray-800">{{ empty($keluarga->nip) ? '-' :$keluarga->nip }}</td>
                            </tr>
                        @endforeach
                    </tbody>
=======
                        @forelse ($data_keluarga as $keluarga)
                            <tr>
                                <td class="border border-gray-200 px-6 py-3 text-sm text-gray-800">{{ $loop->iteration }}</td>
                                <td class="border border-gray-200 px-6 py-3 text-sm text-gray-800">{{ $keluarga->nama }}</td>
                                <td class="border border-gray-200 px-6 py-3 text-sm text-gray-800">{{ $keluarga->nik }}</td>
                                <td class="border border-gray-200 px-6 py-3 text-sm text-gray-800">{{ $keluarga->tmpt_lahir }}</td>
                                <td class="border border-gray-200 px-6 py-3 text-sm text-gray-800">{{ \Carbon\Carbon::parse($keluarga->tgl_lahir)->format('d-m-Y') }}</td>
                                <td class="border border-gray-200 px-6 py-3 text-sm text-gray-800">{{ $keluarga->jenis_kelamin }}</td>
                                <td class="border border-gray-200 px-6 py-3 text-sm text-gray-800">{{ $keluarga->status_keluarga }}</td>
                                <td class="border border-gray-200 px-6 py-3 text-sm text-gray-800">{{ $keluarga->pendidikan }}</td>
                                <td class="border border-gray-200 px-6 py-3 text-sm text-gray-800">{{ empty($keluarga->pekerjaan) ? '-' :$keluarga->pekerjaan }}</td>
                                <td class="border border-gray-200 px-6 py-3 text-sm text-gray-800">{{ empty($keluarga->nip) ? '-' :$keluarga->nip }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="10" class="text-center border border-gray px-6 py-3 text-sm text-default-800">
                                    Belum ada Data Keluarga.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
>>>>>>> upstream/Restu-ujicoba
@endsection