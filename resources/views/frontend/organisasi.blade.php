@extends('main.layout')
@section('content')
    <h1 class="text-xl">Riwayat Organisasi</h1>

    <div class="overflow-x-auto">
        <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-600">
                        <tr>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100" style="width: 50px;">No</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Organisasi</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Jabatan</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Masa Jabatan</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">No SK</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Tanggal SK</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Pejabat Penetap</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($riwayat_organisasi as $org)
                            <tr>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ $loop->iteration }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ $org->organisasi }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ $org->jabatan }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-800">
                                    {{ $org->masa_jabatan }}
                                </td>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ $org->no_sk }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ \Carbon\Carbon::parse($org->tgl_sk)->format('d-m-Y') }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ $org->pejabat_penetap }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>    
@endsection