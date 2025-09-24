<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiwayatDiklatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pegawaiId = DB::table('pegawai')->first()->id;
        DB::table('riwayat_diklat')->insert([
            'nm_diklat' => 'Diklat Dasar',
            'jpl' => 40,
            'tgl_mulai' => '2020-01-15',
            'tgl_selesai' => '2020-01-25',
            'no_sertifikat' => '123456789',
            'tgl_sertifikat' => '2020-01-26',
            'penyelenggara' => 'Lembaga ABC',
            'pegawai_id' => $pegawaiId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
