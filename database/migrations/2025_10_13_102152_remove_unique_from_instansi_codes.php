<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Use raw SQL to drop unique constraints if they exist
        try {
            DB::statement('ALTER TABLE instansi DROP INDEX instansi_kd_instansi_unique');
        } catch (\Exception $e) {
            // Index might not exist, continue
        }
        try {
            DB::statement('ALTER TABLE instansi DROP INDEX instansi_kode_unique');
        } catch (\Exception $e) {
            // Index might not exist, continue
        }
    }

    public function down(): void
    {
    }
};