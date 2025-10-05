@extends('main.layout')
@section('content')
    <h1 class="text-xl">Profil Pegawai</h1>
    @if($pegawai)
        <div class="p-1">
            <div class="overflow-x-auto ">
                <table class="min-w-full divide-y divide-gray-200 border border-collapse">
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800" style="width: 300px;">
                                Nama
                            </td>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                {{ $pegawai->nama }}
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                NIP
                            </td>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                {{ $pegawai->nip }}
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                No Kartu Keluarga
                            </td>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                {{ $pegawai->no_kk }}
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                Tempat Lahir
                            </td>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                {{ $pegawai->tpt_lahir }}
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                Tanggal Lahir
                            </td>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                {{ $pegawai->tgl_lahir }}
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                No Karpeg
                            </td>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                {{ $pegawai->no_karpeg }}
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                Agama
                            </td>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                {{ $pegawai->agama }}
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                Golongan Darah
                            </td>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                {{ $pegawai->golongan_darah ?? '-'}}
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                Status Perkawinan
                            </td>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                {{ $pegawai->status_kawin }}
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                Tanggal Perkawinan
                            </td>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                {{ $pegawai->tgl_kawin ?? '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                No Karis/Karsu
                            </td>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                {{ $pegawai->no_karis_karsu }}
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                Alamat Rumah
                            </td>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                {{ $pegawai->almt_rumah }}
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                Tamat Pensiun
                            </td>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                {{ $pegawai->tmt_pensiun }}
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                Instansi
                            </td>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                {{ $pegawai->instansi->nm_instansi }}
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                Unit Kerja
                            </td>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                 {{ optional($pegawai->instansi->latestUnitKerja)->nm_unit_kerja ?? '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                Satuan Kerja
                            </td>
                            <td class="border border-gray-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                {{ optional(optional($pegawai->instansi->latestUnitKerja)->latestSatuanKerja)->nm_satuan_kerja ?? '-' }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <p>Data pegawai belum ada untuk akun ini.</p>
    @endif
@endsection