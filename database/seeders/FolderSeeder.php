<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('folder')->insert([
            'nm_folder' => 'Dokumen',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
