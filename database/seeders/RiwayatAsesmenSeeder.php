<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiwayatAsesmenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pegawaiId = DB::table('pegawai')->first()->id;
        DB::table('riwayat_asesmen')->insert([
            'tgl_asesmen' => '2020-01-15',
            'tujuan_asesmen' => 'abc',
            'metode_asesmen' => 'def',
            'gambaran_potensi' => 'ghi',
            'gambaran_kompetensi' => 'jkl',
            'saran_pengembangan' => 'mno',
            'pegawai_id' => $pegawaiId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
