@extends('main.layout')

@section('content')
    <h1 class="text-xl">Riwayat Kenaikan Gaji Bulanan</h1>

    <div class="overflow-x-auto">
        <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-600">
                        <tr>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100" style="width: 50px;">No</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Pejabat Penetap</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">No SK</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Tanggal SK</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Tanggal TMT</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Jumlah Gaji</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($riwayat_kgb as $kgb)
                            <tr>
                                <td class="border px-6 py-4 text-gray-800">{{ $loop->iteration }}</td>
                                <td class="border px-6 py-4 text-gray-800">{{ $kgb->pejabat_penetap }}</td>
                                <td class="border px-6 py-4 text-gray-800">{{ $kgb->no_sk }}</td>
                                <td class="border px-6 py-4 text-gray-800">{{ \Carbon\Carbon::parse($kgb->tgl_sk)->format('d-m-Y') }}</td>
                                <td class="border px-6 py-4 text-gray-800">{{ \Carbon\Carbon::parse($kgb->tgl_tmt)->format('d-m-Y') }}</td>
                                <td class="border px-6 py-4 text-gray-800">Rp {{ number_format($kgb->jml_gaji, 2, ',', '.') }}</td>
                                <td class="border px-6 py-4 text-gray-800">{{ $kgb->ket ?? '-' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection