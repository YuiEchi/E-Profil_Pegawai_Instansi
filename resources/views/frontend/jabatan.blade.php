@extends('main.layout')
@section('content')
    <h1 class="text-xl">Riwayat Jabatan</h1>

    <div>
        <div class="overflow-x-auto">
            <div class="min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-blue-600">
                            <tr>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-100" style="width: 50px;">No</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Jabatan</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Eselon</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Jenis Jabatan</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">TMT</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">No SK</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Tanggal SK</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Pejabat Penetap</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Jenis Mutasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($riwayat_jabatan as $rj)
                                <tr class="odd:bg-white even:bg-gray-100">
                                    <td class="border border-gray px-6 py-3 text-sm text-gray-800">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="border border-gray px-6 py-3 text-sm text-gray-800">
                                        {{ $rj->jabatan ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-3 text-sm text-gray-800">
                                        {{ $rj->eselon->nm_eselon ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-3 text-sm text-gray-800">
                                        {{ $rj->jenis_jabatan->jenis_jabatan ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-3 text-sm text-gray-800">
                                        {{ $rj->tmt ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-3 text-sm text-gray-800">
                                        {{ $rj->no_sk ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-3 text-sm text-gray-800">
                                        {{ \Carbon\Carbon::parse($rj->tgl_sk)->format('d-m-Y') ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-3 text-sm text-gray-800">
                                        {{ $rj->pejabat_penetap ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-3 text-sm text-gray-800">
                                        {{ $rj->jenis_mutasi ?? '-' }}
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="9" class="text-center border border-gray px-6 py-3 text-sm text-default-800">
                                        Belum ada data Riwayat Jabatan.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
