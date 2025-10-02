<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('pegawai', function (Blueprint $table) {
            if (!Schema::hasColumn('pegawai', 'unit_kerja_id')) {
                $table->unsignedBigInteger('unit_kerja_id')->nullable()->after('instansi_id');
            }
            if (!Schema::hasColumn('pegawai', 'satuan_kerja_id')) {
                $table->unsignedBigInteger('satuan_kerja_id')->nullable()->after('unit_kerja_id');
            }
        });
    }

    public function down()
    {
        Schema::table('pegawai', function (Blueprint $table) {
            $table->dropColumn(['unit_kerja_id', 'satuan_kerja_id']);
        });
    }

};
