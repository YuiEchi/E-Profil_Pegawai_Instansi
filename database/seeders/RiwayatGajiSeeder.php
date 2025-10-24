<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RiwayatGajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pegawaiId = DB::table('pegawai')->first()->id;
        DB::table('riwayat_gaji')->insert([
            'pejabat_penetap' => 'Pejabat XYZ',
            'no_sk' => 'SK123456',
            'tgl_sk' => '2023-01-01',
            'jml_gaji' => 5000000.00,
            'ket' => 'Keterangan tambahan',
            'pegawai_id' => $pegawaiId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
