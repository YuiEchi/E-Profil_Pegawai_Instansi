@extends('main.layout')
@section('content')
    <h1 class="text-xl">Data keluarga</h1>

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
@endsection