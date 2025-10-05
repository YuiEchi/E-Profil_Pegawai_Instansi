@extends('main.layout')

@section('content')
    <h1 class="text-xl">Riwayat PLH/PLT</h1>

    <div class="overflow-x-auto">
        <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-600">
                        <tr>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100" style="width: 50px;">No</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">No Sprint</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Tanggal Sprint</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Tanggal Mulai</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Tanggal Selesai</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Jabatan PLH/PLT</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($riwayat_plh_plt as $rpp)
                            <tr>
                                <td class="border px-6 py-3 text-sm text-gray-800">{{ $loop->iteration }}</td>
                                <td class="border px-6 py-3 text-sm text-gray-800">{{ $rpp->no_sprint }}</td>
                                <td class="border px-6 py-3 text-sm text-gray-800">{{ $rpp->tgl_sprint }}</td>
                                <td class="border px-6 py-3 text-sm text-gray-800">{{ $rpp->tgl_mulai }}</td>
                                <td class="border px-6 py-3 text-sm text-gray-800">{{ $rpp->tgl_selesai ?? '-' }}</td>
                                <td class="border px-6 py-3 text-sm text-gray-800">{{ $rpp->jabatan_plh_plt ?? '-' }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center border border-gray px-6 py-3 text-sm text-default-800">
                                    Belum ada data Riwayat PLH/PLT.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection