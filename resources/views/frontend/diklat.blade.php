@extends('main.layout')
@section('content')
    <h1 class="text-xl">Riwayat Diklat</h1>

    <div class="overflow-x-auto">
        <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-600">
                        <tr>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100" style="width: 50px;">No</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Nama Diklat</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">JPL</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Tanggal Mulai</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Tanggal Selesai</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">No Sertifikat</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Tanggal Sertifikat</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Penyelenggara</th>
                        </tr>
                    </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($riwayat_diklat as $rd)
                            <tr>
                                <td class="border border-gray-200 px-6 py-3 text-sm text-gray-800">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="border border-gray-200 px-6 py-3 text-sm text-gray-800">
                                    {{ $rd->nm_diklat }}
                                </td>
                                <td class="border border-gray-200 px-6 py-3 text-sm text-gray-800">
                                    {{ $rd->jpl }}
                                </td>
                                <td class="border border-gray-200 px-6 py-3 text-sm text-gray-800">
                                    {{ $rd->tgl_mulai }}
                                </td>
                                <td class="border border-gray-200 px-6 py-3 text-sm text-gray-800">
                                    {{ $rd->tgl_selesai }}
                                </td>
                                <td class="border border-gray-200 px-6 py-3 text-sm text-gray-800">
                                    {{ $rd->no_sertifikat }}
                                </td>
                                <td class="border border-gray-200 px-6 py-3 text-sm text-gray-800">
                                    {{ $rd->tgl_sertifikat }}
                                </td>
                                <td class="border border-gray-200 px-6 py-3 text-sm text-gray-800">
                                    {{ $rd->penyelenggara }}
                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center border border-gray px-6 py-3 text-sm text-default-800">
                                Belum ada data Riwayat Diklat.
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection