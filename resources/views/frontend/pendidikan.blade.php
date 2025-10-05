@extends('main.layout')
@section('content')
    <h1 class="text-xl">Riwayat Pendidikan</h1>

    <div class="overflow-x-auto">
        <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-600">
                        <tr>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100" style="width: 50px;">No</th>
                            <th class="border border-gray px-6 py-3 text-sm text-default-100">Strata</th>
                            <th class="border border-gray px-6 py-3 text-sm text-default-100
                            ">Jurusan</th>
                            <th class="border border-gray px-6 py-3 text-sm text-default-100
                            ">Nama Sekolah/PT</th>
                            <th class="border border-gray px-6 py-3 text-sm text-default-100
                            ">No Ijazah</th>
                            <th class="border border-gray px-6 py-3 text-sm text-default-100
                            ">Tahun Lulus</th>
                            <th class="border border-gray px-6 py-3 text-sm text-default-100
                            ">Pimpinan</th>
                            <th class="border border-gray px-6 py-3 text-sm text-default-100
                            ">Kode Pendidikan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($riwayat_pendidikan as $rp)
                            <tr class="odd:bg-white">
                                <td class="border border-gray px-6 py-3 text-sm text-default-800">{{ $loop->iteration }}</td>
                                <td class="border border-gray px-6 py-3 text-sm text-default-800">
                                    {{ $rp->strata->strata ?? '-' }}
                                </td>
                                <td class="border border-gray px-6 py-3 text-sm text-default-800">
                                    {{ $rp->strata->jurusan ?? '-' }}
                                </td>
                                <td class="border border-gray px-6 py-3 text-sm text-default-800">
                                    {{ $rp->nm_sekolah_pt ?? '-' }}
                                </td>
                                <td class="border border-gray px-6 py-3 text-sm text-default-800">
                                    {{ $rp->no_ijazah ?? '-' }}
                                </td>
                                <td class="border border-gray px-6 py-3 text-sm text-default-800">
                                    {{ $rp->thn_lulus ?? '-' }}
                                </td>
                                <td class="border border-gray px-6 py-3 text-sm text-default-800">
                                    {{ $rp->pimpinan ?? '-' }}
                                </td>
                                <td class="border border-gray px-6 py-3 text-sm text-default-800">
                                    {{ $rp->kode_pendidikan ?? '-' }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center border border-gray px-6 py-3 text-sm text-default-800">
                                    Belum ada data Riwayat Pendidikan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
