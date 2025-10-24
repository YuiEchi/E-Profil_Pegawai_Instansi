<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiwayatPenghargaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pegawaiId = DB::table('pegawai')->first()->id;
        DB::table('riwayat_penghargaan')->insert([
            'nm_penghargaan' => 'Penghargaan XYZ',
            'no_urut' => 22,
            'no_sertifikat' => '123456789',
            'tgl_sertifikat' => '2023-05-01',
            'pejabat_penetap' => 'Pejabat ABC',
            'link' => 'http://example.com/sertifikat.pdf',
            'pegawai_id' => $pegawaiId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
