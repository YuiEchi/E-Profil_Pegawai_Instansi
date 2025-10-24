<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Disable auto-increment on 'id' column
        DB::statement('ALTER TABLE instansi MODIFY COLUMN id INT NOT NULL');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Re-enable auto-increment on 'id' column
        DB::statement('ALTER TABLE instansi MODIFY COLUMN id INT AUTO_INCREMENT NOT NULL');
    }
};
