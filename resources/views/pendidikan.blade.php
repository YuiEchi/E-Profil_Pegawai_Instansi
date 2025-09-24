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
                                <th scope="col"
                                    class="border border-gray-200 px-6 py-3 text-sm text-default-500">
                                    Strata</th>
                                <th scope="col"
                                    class="border border-gray-200 px-6 py-3 text-sm text-default-500">
                                    Jurusan
                                </th>
                                <th scope="col"
                                    class="border border-gray-200 px-6 py-3 text-sm text-default-500">
                                    Nama Sekolah/PT
                                </th>
                                <th scope="col"
                                    class="border border-gray-200 px-6 py-3 text-sm text-default-500">
                                    No Ijazah
                                </th>
                                <th scope="col"
                                    class="border border-gray-200 px-6 py-3 text-sm text-default-500">
                                    Tahun Lulus
                                </th>
                                <th scope="col"
                                    class="border border-gray-200 px-6 py-3 text-sm text-default-500">
                                    Pimpinan
                                </th>
                                <th scope="col"
                                    class="border border-gray-200 px-6 py-3 text-sm text-default-500">
                                    Kode Pendidikan
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd:bg-white even:bg-gray-100">
                                <td
                                    class="border border-gray px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                    Sarjana
                                </td>
                                <td class="border border-gray px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                    Sistem Informasi
                                </td>
                                <td class="border border-gray px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                    Universitas Bina Sarana Informatika
                                </td>
                                <td class="border border-gray px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                    1234567890
                                </td>
                                <td class="border border-gray px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                    2027
                                </td>
                                <td class="border border-gray px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                    Pak Rektor
                                </td>
                                <td class="border border-gray px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                    1234
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection