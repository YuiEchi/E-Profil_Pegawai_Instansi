@extends('main.layout')

@section('content')
    <h1 class="text-xl font-semibold mb-4">Riwayat Kesejahteraan</h1>

    <div class="overflow-x-auto">
        <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">No</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">NPWP</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">No BPJS</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">No Taspen</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Kepemilikan Rumah</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Kartu Pegawai Elektronik</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($kesejahteraan as $data)
                            <tr>
                                <td class="border px-6 py-4 text-sm text-gray-700">{{ $loop->iteration }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-700">{{ $data->npwp }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-700">{{ $data->no_bpjs }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-700">{{ $data->no_taspen }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-700">{{ $data->kepemilikan_rumah }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-700">{{ $data->kartu_pegawai_elektronik }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection