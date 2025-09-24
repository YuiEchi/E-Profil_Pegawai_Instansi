<?php use Carbon\Carbon;
?>

@extends('main.layout')

@section('content')
    <h1 class="text-xl">Riwayat Golongan</h1>

    <div class="overflow-x-auto">
        <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">No</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Golru</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">TMT Golongan</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">No SK</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Tanggal SK</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Masa Kerja</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Pejabat Penetap</th>
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
                                <td class="border px-6 py-4 text-sm">{{ $loop->iteration }}</td>
                                <td class="border px-6 py-4 text-sm">{{ $rg->golongan->golru }}</td>
                                <td class="border px-6 py-4 text-sm">{{ $rg->tmt_golongan }}</td>
                                <td class="border px-6 py-4 text-sm">{{ $rg->no_sk }}</td>
                                <td class="border px-6 py-4 text-sm">{{ $rg->tgl_sk }}</td>
                                <td class="border px-6 py-4 text-sm">{{ $tahun }} thn, {{ $bulan }} bln</td>
                                <td class="border px-6 py-4 text-sm">{{ $rg->pejabat }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection