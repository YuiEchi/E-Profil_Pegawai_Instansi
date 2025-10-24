<?php use Carbon\Carbon;
?>

@extends('main.layout')

@section('content')
    <h1 class="text-xl">Riwayat Golongan</h1>

    <div class="overflow-x-auto">
        <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-600">
                        <tr>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100" style="width: 50px;">No</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Golru</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">TMT Golongan</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">No SK</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Tanggal SK</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Masa Kerja</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Pejabat Penetap</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($riwayat_golongan as $rg)
                            @php
                                $tgl_sk = Carbon::parse($rg->tgl_sk);
                                $now = Carbon::now();
                                $tahun = $tgl_sk->diffInYears($now);
                                $bulan = $tgl_sk->copy()->addYears($tahun)->diffInMonths($now);
                            @endphp
                            <tr>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ $loop->iteration }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ $rg->golongan->golru }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ $rg->tmt_golongan }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ $rg->no_sk }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ $rg->tgl_sk }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ $tahun }} thn, {{ $bulan }} bln</td>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ $rg->pejabat }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection