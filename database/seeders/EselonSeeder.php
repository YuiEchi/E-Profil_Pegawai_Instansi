<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EselonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('eselon')->insert([
            'nm_eselon' => 'Eselon I',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
