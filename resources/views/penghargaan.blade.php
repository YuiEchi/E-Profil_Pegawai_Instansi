@extends('main.layout')
@section('content')
    <h1 class="text-xl">Riwayat Penghargaan</h1>

    <div class="overflow-x-auto">
        <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">No</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Nama Penghargaan</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">No Urut</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">No ST/Sertifikat</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Tanggal Sertifikat</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Pejabat Penetap</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Link</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($riwayat_penghargaan as $rph)
                            <tr>
                                <td class="border px-6 py-4 text-sm text-gray-700">{{ $loop->iteration }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-700">{{ $rph->nm_penghargaan }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-700">{{ $rph->no_urut }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-700">{{ $rph->no_sertifikat }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-700">{{ \Carbon\Carbon::parse($rph->tgl_sertifikat)->format('d-m-Y') }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-700">{{ $rph->pejabat_penetap }}</td>
                                <td class="border px-6 py-4 text-sm text-blue-600 underline">
                                    <a href="{{ $rph->link }}" target="_blank">Lihat Sertifikat</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection