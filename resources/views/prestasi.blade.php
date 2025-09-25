@extends('main.layout')
@section('content')
    <h1 class="text-xl">Nilai Prestasi Kerja</h1>

    <div class="overflow-x-auto">
        <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">No</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Tahun</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">SKP</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Nilai Prestasi Kerja</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Nilai Perilaku kerja</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Klasifikasi Nilai</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Pejabat Penetap</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($nilai_prestasi_kerja as $nilai)
                            <tr>
                                <td class="border px-6 py-4 text-sm text-gray-700">{{ $loop->iteration }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-700">{{ $nilai->tahun }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-700">{{ number_format($nilai->skp, 2) }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-700">{{ number_format($nilai->nilai_prestasi_kerja, 2) }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-700">{{ number_format($nilai->nilai_perilaku_kerja, 2) }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-700">{{ $nilai->klasifikasi_nilai }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-700">{{ $nilai->pejabat_penilai }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>    
@endsection