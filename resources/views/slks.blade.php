@extends('main.layout')
@section('content')
    <h1 class="text-xl">Riwayat Satyalancana Karya Satya</h1>

    <div class="overflow-x-auto">
        <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">No</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">SLKS (Tahun)</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">No Kepres</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Tanggal Kepres</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($riwayat_slks as $slks)
                            <tr>
                                <td class="border px-6 py-4 text-sm text-gray-700">{{ $loop->iteration }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-700">{{ $slks->slks }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-700">{{ $slks->no_kepres }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-700">
                                    {{ \Carbon\Carbon::parse($slks->tgl_kepres)->format('d-m-Y') }}
                                </td>
                                <td class="border px-6 py-4 text-sm text-gray-700">
                                    {{ ucfirst($slks->status) }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection