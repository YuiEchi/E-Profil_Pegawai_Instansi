<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RiwayatGolonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tgl_sk = Carbon::parse('2022-09-24'); // contoh SK 3 tahun lalu
        $hari_ini = Carbon::now();

        $tahun = $tgl_sk->diffInYears($hari_ini);
        $bulan = $tgl_sk->copy()->addYears($tahun)->diffInMonths($hari_ini);
        $masa_kerja = "{$tahun} thn, {$bulan} bln";

        $pegawaiId = DB::table('pegawai')->first()->id;
        $golonganId = DB::table('golongan')->first()->id;
        DB::table('riwayat_golongan')->insert([
            'tmt_golongan' => '2022-09-24',
            'no_sk' => '12345',
            'tgl_sk' => '2022-09-24',
            'masa_kerja' => $masa_kerja,
            'pejabat' => 'ALEKSANDER',
            'pegawai_id' => $pegawaiId,
            'golongan_id' => $golonganId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
