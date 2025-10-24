<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pegawaiId = DB::table('pegawai')->first()->id;
        $folderId = DB::table('folder')->first()->id;

        DB::table('dokumen')->insert([
            'nm_dokumen' => 'Surat Keputusan',
            'folder_id' => $folderId,
            'pegawai_id' => $pegawaiId,
            'file_path' => 'dokumen/sk_pegawai2.pdf',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
