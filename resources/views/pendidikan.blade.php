@extends('main.layout')
@section('content')
    <h1 class="text-xl">Riwayat Pendidikan</h1>

    <div>
        <div class="overflow-x-auto">
            <div class="min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Strata</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Jurusan</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Nama Sekolah/PT</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">No Ijazah</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Tahun Lulus</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Pimpinan</th>
                                <th class="border border-gray-200 px-6 py-3 text-sm text-default-500">Kode Pendidikan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($riwayat_pendidikan as $rp)
                                <tr class="odd:bg-white">
                                    <td class="border border-gray px-6 py-4 text-sm font-medium text-default-800">
                                        {{ $rp->strata->strata ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-4 text-sm text-default-800">
                                        {{ $rp->strata->jurusan ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-4 text-sm text-default-800">
                                        {{ $rp->nm_sekolah_pt ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-4 text-sm font-medium text-default-800">
                                        {{ $rp->no_ijazah ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-4 text-sm font-medium text-default-800">
                                        {{ $rp->thn_lulus ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-4 text-sm font-medium text-default-800">
                                        {{ $rp->pimpinan ?? '-' }}
                                    </td>
                                    <td class="border border-gray px-6 py-4 text-sm font-medium text-default-800">
                                        {{ $rp->kode_pendidikan ?? '-' }}
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
