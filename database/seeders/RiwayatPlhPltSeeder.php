<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiwayatPlhPltSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pegawaiId = DB::table('pegawai')->first()->id;
        DB::table('riwayat_plh_plt')->insert([
            'no_sprint' => 'SPRINT-001',
            'tgl_sprint' => '2023-01-01',
            'tgl_mulai' => '2023-01-02',
            'tgl_selesai' => '2023-06-30',
            'jabatan_plh_plt' => 'Plh Kepala Bagian',
            'pegawai_id' => $pegawaiId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
