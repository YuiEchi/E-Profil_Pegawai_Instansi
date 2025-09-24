@extends('main.layout')
@section('content')
    <h1 class="text-xl">Riwayat Jabatan</h1>

    <div>
        <div class="overflow-x-auto">
            <div class="min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">No</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Jabatan</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Eselon</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Jenis Jabatan</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">TMT</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">No SK</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Tanggal SK</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Pejabat Penetap</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Jenis Mutasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($riwayat_jabatan as $rj)
                                <tr class="odd:bg-white even:bg-gray-100">
                                    <td class="border border-gray px-6 py-4 text-sm text-default-800">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="border border-gray px-6 py-4 text-sm text-default-800">
                                        {{ $rj->jabatan ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-4 text-sm text-default-800">
                                        {{ $rj->eselon->nm_eselon ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-4 text-sm text-default-800">
                                        {{ $rj->jenis_jabatan->jenis_jabatan ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-4 text-sm text-default-800">
                                        {{ $rj->tmt ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-4 text-sm text-default-800">
                                        {{ $rj->no_sk ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-4 text-sm text-default-800">
                                        {{ \Carbon\Carbon::parse($rj->tgl_sk)->format('d-m-Y') ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-4 text-sm text-default-800">
                                        {{ $rj->pejabat_penetap ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-4 text-sm text-default-800">
                                        {{ $rj->jenis_mutasi ?? '-' }}
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
