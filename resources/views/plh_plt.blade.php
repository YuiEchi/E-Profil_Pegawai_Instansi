@extends('main.layout')

@section('content')
    <h1 class="text-xl font-semibold mb-4">Riwayat PLH/PLT</h1>

    <div class="overflow-x-auto">
        <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">No</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">No Sprint</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Tanggal Sprint</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Tanggal Mulai</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Tanggal Selesai</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Jabatan PLH/PLT</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($riwayat_plh_plt as $rpp)
                            <tr>
                                <td class="border px-6 py-4 text-sm">{{ $loop->iteration }}</td>
                                <td class="border px-6 py-4 text-sm">{{ $rpp->no_sprint }}</td>
                                <td class="border px-6 py-4 text-sm">{{ $rpp->tgl_sprint }}</td>
                                <td class="border px-6 py-4 text-sm">{{ $rpp->tgl_mulai }}</td>
                                <td class="border px-6 py-4 text-sm">{{ $rpp->tgl_selesai ?? '-' }}</td>
                                <td class="border px-6 py-4 text-sm">{{ $rpp->jabatan_plh_plt ?? '-' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection