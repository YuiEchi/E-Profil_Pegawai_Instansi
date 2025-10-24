@extends('main.layout')

@section('content')
    <h1 class="text-xl">Riwayat Asesmen</h1>

    <div class="overflow-x-auto">
        <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-600">
                        <tr>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100" style="width: 50px;">No</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Tanggal Asesmen</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Tujuan Asesmen</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Metode Asesmen</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Gambaran Potensi</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Gambaran Kompetensi</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Saran Pengembangan</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($riwayat_asesmen as $asesmen)
                            <tr>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ $loop->iteration }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-800">
                                    {{ \Carbon\Carbon::parse($asesmen->tgl_asesmen)->format('d-m-Y') }}
                                </td>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ $asesmen->tujuan_asesmen }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ $asesmen->metode_asesmen }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ $asesmen->gambaran_potensi }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ $asesmen->gambaran_kompetensi }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ $asesmen->saran_pengembangan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection