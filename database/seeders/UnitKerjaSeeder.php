<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instansiId = DB::table('instansi')->first()->id;
        DB::table('unit_kerja')->insert([
            'nm_unit_kerja' => 'ijkl',
            'instansi_id' => $instansiId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
