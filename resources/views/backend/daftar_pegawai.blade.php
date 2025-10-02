@extends('main.layout2')

@section('content')
    <h1 class="text-xl font-semibold mb-4">Daftar Pegawai
        <button type="button"
        onclick="openTambahModal()"
        class="inline-flex items-center px-4 py-2 bg-green-600 hover:bg-green-700 text-white text-sm font-medium rounded-md shadow-sm">
            <span class="material-icons" style="margin-right: 5px; margin-left: -5px;font-size: 16px;">add</span>
            Tambah Pegawai
        </button>
    </h1>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
            {{ session('success') }}
        </div>
    @endif


    <div class="mb-4">
        
    </div>

    <div class="overflow-x-auto">
        <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-600">
                        <tr>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100" style="width: 50px;">No</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Nama Pegawai</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">NIP</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100" style="width: 250px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($pegawai as $item)
                            <tr>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ $loop->iteration }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ $item->nama }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ $item->nip }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-800 space-x-2">
                                    {{-- Tombol Detail --}}
                                    <a href="{{ route('backend.pegawai.show', $item->id) }}"
                                    class="inline-block px-3 py-1 text-sm text-white bg-blue-600 rounded hover:bg-blue-700">
                                     <span class="material-icons" style="margin-right: 3px; margin-left: -3px; font-size: 12px;">zoom_in</span>
                                        Detail
                                    </a>

                                    {{-- Tombol Delete --}}
                                    <form action="{{ route('backend.daftar_pegawai.destroy', $item->id) }}" method="POST" class="inline-block"
                                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-3 py-1 text-sm text-white bg-red-600 rounded hover:bg-red-700">
                                            <span class="material-icons" style="margin-right: 3px; margin-left: -3px; font-size: 12px;">delete</span>
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Pegawai / Employee Create Modal -->
    <div id="tambahModal" class="fixed inset-0 z-50 hidden flex justify-center items-center bg-black/50">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-xl border border-green-300 outline outline-green-600 outline-offset-4" style="max-width: 800px; max-height: 1200px;">
            <div class="p-6">
                <h2 class="text-base font-semibold">Tambah Data Pegawai</h2>
            </div>

            <div id="tambahScrollContainer" class="p-6 overflow-y-auto" style="max-height: 600px;">
                <form id="tambahForm" method="POST" action="{{ route('backend.daftar_pegawai.store') }}" enctype="multipart/form-data" class="space-y-4">
                    @csrf

                    <div class="mb-3" style="margin-top: -25px;">
                        <label for="tambah_foto" class="block text-sm font-medium text-gray-700">Foto Pegawai</label>
                        <input type="file" name="foto" id="tambah_foto"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-green-200 focus:outline-none text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border-0 file:bg-green-50 file:text-green-700 file:rounded-md file:cursor-pointer">
                    </div>
                    <div class="mb-3">
                        <label for="tambah_nama" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" name="nama" id="tambah_nama" value="{{ old('nama') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-green-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="tambah_nip" class="block text-sm font-medium text-gray-700">NIP</label>
                        <input type="text" name="nip" id="tambah_nip" value="{{ old('nip') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-green-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="tambah_no_kk" class="block text-sm font-medium text-gray-700">No Kartu Keluarga</label>
                        <input type="text" name="no_kk" id="tambah_no_kk" value="{{ old('no_kk') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="tambah_tpt_lahir" class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
                        <input type="text" name="tpt_lahir" id="tambah_tpt_lahir" value="{{ old('tpt_lahir') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="tambah_tgl_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                        <input type="text" name="tgl_lahir" id="tambah_tgl_lahir" value="{{ old('tgl_lahir') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="tambah_no_karpeg" class="block text-sm font-medium text-gray-700">No Karpeg</label>
                        <input type="text" name="no_karpeg" id="tambah_no_karpeg" value="{{ old('no_karpeg') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="tambah_agama" class="block text-sm font-medium text-gray-700">Agama</label>
                        <input type="text" name="agama" id="tambah_agama" value="{{ old('agama') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="tambah_golongan_darah" class="block text-sm font-medium text-gray-700">Golongan Darah</label>
                        <input type="text" name="golongan_darah" id="tambah_golongan_darah" value="{{ old('golongan_darah') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="tambah_status_kawin" class="block text-sm font-medium text-gray-700">Status Perkawinan</label>
                        <input type="text" name="status_kawin" id="tambah_status_kawin" value="{{ old('status_kawin') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="tambah_tgl_kawin" class="block text-sm font-medium text-gray-700">Tanggal Perkawinan</label>
                        <input type="text" name="tgl_kawin" id="tambah_tgl_kawin" value="{{ old('tgl_kawin') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="tambah_no_karis_karsu" class="block text-sm font-medium text-gray-700">No Karis/Karsu</label>
                        <input type="text" name="no_karis_karsu" id="tambah_no_karis_karsu" value="{{ old('no_karis_karsu') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="tambah_almt_rumah" class="block text-sm font-medium text-gray-700">Alamat Rumah</label>
                        <input type="text" name="almt_rumah" id="tambah_almt_rumah" value="{{ old('almt_rumah') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="tambah_tmt_pensiun" class="block text-sm font-medium text-gray-700">Tamat Pensiun</label>
                        <input type="text" name="tmt_pensiun" id="tambah_tmt_pensiun" value="{{ old('tmt_pensiun') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                    </div>

                    <div class="mb-3">
                        <label for="tambah_instansi" class="block text-sm font-medium text-gray-700">Instansi</label>
                        <select name="instansi_id" id="tambah_instansi"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-green-200 focus:outline-none text-sm">
                            <option value="">Pilih Instansi</option>
                            @foreach($instansis as $instansi)
                                <option value="{{ $instansi->id }}">{{ $instansi->nm_instansi }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="tambah_unit_kerja" class="block text-sm font-medium text-gray-700">Unit Kerja</label>
                        <select name="unit_kerja_id" id="tambah_unit_kerja"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                            <option value="">Pilih Unit Kerja</option>
                            @foreach($unitKerjas as $unitKerja)
                                <option value="{{ $unitKerja->id }}">{{ $unitKerja->nm_unit_kerja }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="tambah_satuan_kerja" class="block text-sm font-medium text-gray-700">Satuan Kerja</label>
                        <select name="satuan_kerja_id" id="tambah_satuan_kerja"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                            <option value="">Pilih Satuan Kerja</option>
                            @foreach($satuanKerjas as $satuanKerja)
                                <option value="{{ $satuanKerja->id }}">{{ $satuanKerja->nm_satuan_kerja }}</option>
                            @endforeach
                        </select>
                    </div>

                </form>
            </div>

            <!-- Tombol Aksi / Action Buttons -->
            <div class="flex justify-end gap-2 p-6">
                <button type="button" onclick="closeTambahModal()"
                        class="px-3 py-1.5 bg-blue-600 text-white rounded hover:bg-blue-700 text-sm">
                    Batal
                </button>
                <button type="submit" form="tambahForm"
                        class="px-3 py-1.5 bg-blue-600 text-white rounded hover:bg-blue-700 text-sm">
                    Simpan
                </button>
            </div>
        </div>
    </div>

    <script>
        function openTambahModal() {
            document.getElementById('tambahModal')?.classList.remove('hidden');
        }

        function closeTambahModal() {
            document.getElementById('tambahModal')?.classList.add('hidden');
        }
    </script>
@endsection