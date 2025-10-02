@extends('main.layout2')

@section('content')
    <!-- JUDUL HALAMAN -->
    <h1 class="text-xl font-semibold mb-4">Daftar Instansi</h1>

    <!-- TOMBOL TAMBAH DATA (Opsional) -->
    <!-- Anda bisa menambahkan tombol Tambah Instansi di sini -->
    <div class="mb-4">
        <a href="{{ route('backend.instansi.create') }}"
           class="inline-block px-4 py-2 text-sm text-white bg-green-600 rounded-lg hover:bg-green-700 shadow-md">
            + Tambah Instansi
        </a>
    </div>

    <!-- TABEL DATA INSTANSI -->
    <div class="overflow-x-auto">
        <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden border border-gray-200 shadow">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-600">
                        <tr>
                            <th class="border-r border-gray-200 px-6 py-3 text-sm text-default-100" style="width: 50px;">No</th>
                            <th class="border-r border-gray-200 px-6 py-3 text-sm text-default-100">Nama Instansi</th>
                            <th class="px-6 py-3 text-sm text-default-100">Detail</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Looping data Instansi, pastikan variabelnya sesuai dengan yang dikirim dari Controller -->
                        @foreach ($instansis as $item)
                            <tr>
                                <td class="border-r px-6 py-4 text-sm text-gray-800">{{ $loop->iteration }}</td>
                                <td class="border-r px-6 py-4 text-sm text-gray-800">{{ $item->nama_instansi }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800 space-x-2">
                                    <!-- Sesuaikan route edit dan destroy untuk Instansi, bukan Pegawai -->
                                    <a href="{{-- route('backend.instansi.edit', $item->id) --}}"
                                       class="inline-block px-3 py-1 text-sm text-white bg-yellow-500 rounded hover:bg-yellow-600">
                                        Edit
                                    </a>
                                    <form action="{{-- route('backend.instansi.destroy', $item->id) --}}" method="POST" class="inline-block"
                                          onsubmit="return confirm('Yakin ingin menghapus data instansi ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="px-3 py-1 text-sm text-white bg-red-600 rounded hover:bg-red-700">
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
@endsection