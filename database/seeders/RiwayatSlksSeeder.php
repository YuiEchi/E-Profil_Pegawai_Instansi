<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiwayatSlksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pegawaiId = DB::table('pegawai')->first()->id;
        DB::table('riwayat_slks')->insert([
            'slks' => 'SLKS123456',
            'no_kepres' => 'KEPRES78910',
            'tgl_kepres' => '2023-05-01',
            'status' => 'Aktif',
            'pegawai_id' => $pegawaiId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
