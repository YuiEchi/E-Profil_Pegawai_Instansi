<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('strata', function (Blueprint $table) {
            $table->id();

<<<<<<< HEAD
            $table->string('strata');
=======
            $table->string('nama_strata');
>>>>>>> upstream/Restu-ujicoba
            $table->string('jurusan');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('strata');
    }
};
