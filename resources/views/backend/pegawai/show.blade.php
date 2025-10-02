@extends('main.layout2')
@section('content')
    <h1 class="text-xl font-semibold mb-4">Profil Pegawai

        <button type="button"
            onclick="openEditModal(
                {{ $pegawai->id }},
                '{{ addslashes(e($pegawai->nama)) }}',
                '{{ addslashes(e($pegawai->nip)) }}',
                '{{ addslashes(e($pegawai->no_kk)) }}',
                '{{ addslashes(e($pegawai->tpt_lahir)) }}',
                '{{ addslashes(e($pegawai->tgl_lahir)) }}',
                '{{ addslashes(e($pegawai->no_karpeg)) }}',
                '{{ addslashes(e($pegawai->agama)) }}',
                '{{ addslashes(e($pegawai->golongan_darah)) }}',
                '{{ addslashes(e($pegawai->status_kawin)) }}',
                '{{ addslashes(e($pegawai->tgl_kawin)) }}',
                '{{ addslashes(e($pegawai->no_karis_karsu)) }}',
                '{{ addslashes(e($pegawai->almt_rumah)) }}',
                '{{ addslashes(e($pegawai->tmt_pensiun)) }}',
                '{{ $pegawai->instansi_id }}',
                '{{ $pegawai->unit_kerja_id }}',
                '{{ $pegawai->satuan_kerja_id }}'
            )"
            class="inline-block px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-medium rounded-md shadow-sm">
        Edit
        </button>

    </h1>

    <!-- Flash Notification / Pemberitahuan -->
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)"
            class="fixed top-4 right-4 z-[999] bg-red-500 text-white px-4 py-2 rounded shadow text-sm">
            {{ session('error') }}
        </div>
    @endif

    
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
                                {{ $pegawai->golongan_darah }}
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

    <!-- Modal Edit Pegawai / Employee Edit Modal -->
    <div id="editModal" class="fixed inset-0 z-50 hidden flex justify-center items-center bg-black/50">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-xl border border-blue-300 outline outline-blue-600 outline-offset-4" style="max-width: 800px; max-height: 1200px;">
            <div class="p-6">
                <h2 class="text-base font-semibold">Edit Data Pegawai</h2>
            </div>

            <div id="editScrollContainer" class="p-6 overflow-y-auto" style="max-height: 600px;">
                <form id="editForm" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" id="edit_id">

                    <div class="mb-3" style="margin-top: -25px;">
                        <label for="edit_foto" class="block text-sm font-medium text-gray-700">Foto Pegawai</label>
                        <input type="file" name="foto" id="edit_foto"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border-0 file:bg-blue-50 file:text-blue-700 file:rounded-md file:cursor-pointer">
                    </div>
                    <div class="mb-3">
                        <label for="edit_nama" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" name="nama" id="edit_nama"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="edit_nip" class="block text-sm font-medium text-gray-700">NIP</label>
                        <input type="text" name="nip" id="edit_nip"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="edit_no_kk" class="block text-sm font-medium text-gray-700">No Kartu Keluarga</label>
                        <input type="text" name="no_kk" id="edit_no_kk"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="edit_tpt_lahir" class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
                        <input type="text" name="tpt_lahir" id="edit_tpt_lahir"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="edit_tgl_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                        <input type="text" name="tgl_lahir" id="edit_tgl_lahir"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="edit_no_karpeg" class="block text-sm font-medium text-gray-700">No Karpeg</label>
                        <input type="text" name="no_karpeg" id="edit_no_karpeg"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="edit_agama" class="block text-sm font-medium text-gray-700">Agama</label>
                        <input type="text" name="agama" id="edit_agama"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="edit_golongan_darah" class="block text-sm font-medium text-gray-700">Golongan Darah</label>
                        <input type="text" name="golongan_darah" id="edit_golongan_darah"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="edit_status_kawin" class="block text-sm font-medium text-gray-700">Status Perkawinan</label>
                        <input type="text" name="status_kawin" id="edit_status_kawin"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="edit_tgl_kawin" class="block text-sm font-medium text-gray-700">Tanggal Perkawinan</label>
                        <input type="text" name="tgl_kawin" id="edit_tgl_kawin"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="edit_no_karis_karsu" class="block text-sm font-medium text-gray-700">No Karis/Karsu</label>
                        <input type="text" name="no_karis_karsu" id="edit_no_karis_karsu"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="edit_almt_rumah" class="block text-sm font-medium text-gray-700">Alamat Rumah</label>
                        <input type="text" name="almt_rumah" id="edit_almt_rumah"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="edit_tmt_pensiun" class="block text-sm font-medium text-gray-700">Tamat Pensiun</label>
                        <input type="text" name="tmt_pensiun" id="edit_tmt_pensiun"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                    </div>
                    <div class="mb-3">
                        <label for="edit_instansi" class="block text-sm font-medium text-gray-700">Instansi</label>
                        <select name="instansi_id" id="edit_instansi" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                            @foreach($instansis as $instansi)
                            <option value="{{ $instansi->id }}">{{ $instansi->nm_instansi }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="edit_unit_kerja" class="block text-sm font-medium text-gray-700">Unit Kerja</label>
                        <select name="unit_kerja_id" id="edit_unit_kerja" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                            @foreach($unitKerjas as $unitKerja)
                            <option value="{{ $unitKerja->id }}">{{ $unitKerja->nm_unit_kerja }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="edit_satuan_kerja" class="block text-sm font-medium text-gray-700">Satuan Kerja</label>
                        <select name="satuan_kerja_id" id="edit_satuan_kerja" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none text-sm">
                            @foreach($satuanKerjas as $satuanKerja)
                            <option value="{{ $satuanKerja->id }}">{{ $satuanKerja->nm_satuan_kerja }}</option>
                            @endforeach
                        </select>
                    </div>

                </form>
            </div>
            <!-- Tombol Aksi / Action Buttons -->
            <div class="flex justify-end gap-2 p-6">
                <button type="button" onclick="closeEditModal()"
                        class="px-3 py-1.5 bg-blue-600 text-white rounded hover:bg-blue-700 text-sm">
                    Batal
                </button>
                <button type="submit" form="editForm"
                        class="px-3 py-1.5 bg-blue-600 text-white rounded hover:bg-blue-700 text-sm">
                    Simpan
                </button>
            </div>
            
        </div>
    </div>
    
    <script>
        function openEditModal(id , nama, nip, no_kk, tpt_lahir, tgl_lahir, no_karpeg, agama, golongan_darah, status_kawin, tgl_kawin, no_karis_karsu, almt_rumah, tmt_pensiun, instansi_id, unit_kerja_id, satuan_kerja_id) {
            console.log('Edit modal triggered');

            document.getElementById('edit_id').value = id;
            document.getElementById('edit_nama').value = nama;
            document.getElementById('edit_nip').value = nip;
            document.getElementById('edit_no_kk').value = no_kk;
            document.getElementById('edit_tpt_lahir').value = tpt_lahir;
            document.getElementById('edit_tgl_lahir').value = tgl_lahir;
            document.getElementById('edit_no_karpeg').value = no_karpeg;
            document.getElementById('edit_agama').value = agama;
            document.getElementById('edit_golongan_darah').value = golongan_darah;
            document.getElementById('edit_status_kawin').value = status_kawin;
            document.getElementById('edit_tgl_kawin').value = tgl_kawin;
            document.getElementById('edit_no_karis_karsu').value = no_karis_karsu;
            document.getElementById('edit_almt_rumah').value = almt_rumah;
            document.getElementById('edit_tmt_pensiun').value = tmt_pensiun;
            document.getElementById('edit_instansi').value = instansi_id;
            document.getElementById('edit_unit_kerja').value = unit_kerja_id;
            document.getElementById('edit_satuan_kerja').value = satuan_kerja_id;

            const form = document.getElementById('editForm');
            form.action = `/admin/pegawai/${id}`; // pastikan route update sesuai

            document.getElementById('editModal').classList.remove('hidden');
        }

        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
        }
    </script>

@endsection