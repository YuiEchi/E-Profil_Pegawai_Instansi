@extends('main.layout')
@section('content')
    <h1 class="text-xl">Riwayat Diklat</h1>

    <div>
        <div class="overflow-x-auto">
            <div class="min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">No</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Nama Diklat</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">JPL</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Tanggal Mulai</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Tanggal Selesai</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">No Sertifikat</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Tanggal Sertifikat</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Penyelenggara</th>
                            </tr>
                        </thead>
                                                <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($riwayat_diklat as $rd)
                                <tr>
                                    <td class="border border-gray-200 px-6 py-4 text-sm text-default-800">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="border border-gray-200 px-6 py-4 text-sm text-default-800">
                                        {{ $rd->nm_diklat }}
                                    </td>
                                    <td class="border border-gray-200 px-6 py-4 text-sm text-default-800">
                                        {{ $rd->jpl }}
                                    </td>
                                    <td class="border border-gray-200 px-6 py-4 text-sm text-default-800">
                                        {{ $rd->tgl_mulai }}
                                    </td>
                                    <td class="border border-gray-200 px-6 py-4 text-sm text-default-800">
                                        {{ $rd->tgl_selesai }}
                                    </td>
                                    <td class="border border-gray-200 px-6 py-4 text-sm text-default-800">
                                        {{ $rd->no_sertifikat }}
                                    </td>
                                    <td class="border border-gray-200 px-6 py-4 text-sm text-default-800">
                                        {{ $rd->tgl_sertifikat }}
                                    </td>
                                    <td class="border border-gray-200 px-6 py-4 text-sm text-default-800">
                                        {{ $rd->penyelenggara }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection