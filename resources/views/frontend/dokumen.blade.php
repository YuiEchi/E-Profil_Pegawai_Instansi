@extends('main.layout')

@section('content')
    <h1 class="text-xl">Dokumen</h1>

    <div class="overflow-x-auto">
        <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-600">
                        <tr>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100" style="width: 50px;">No</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Nama Dokumen</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Nama Folder</th>
                            <th class="border border-gray-200 px-6 py-3 text-sm text-default-100">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($dokumen as $dok)
                            <tr>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ $loop->iteration }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ $dok->nm_dokumen }}</td>
                                <td class="border px-6 py-4 text-sm text-gray-800">{{ $dok->folder->nm_folder ?? '-'}}</td>
                                <td class="border px-6 py-4 text-sm text-gray-800">
                                    <a href="{{ asset('storage/' . $dok->file_path) }}" target="_blank"
                                        class="text-blue-600 hover:underline">Lihat Dokumen</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection