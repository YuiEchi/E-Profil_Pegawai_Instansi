<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // Relasi opsional ke pegawai
            $table->unsignedBigInteger('pegawai_id')->nullable();

<<<<<<< HEAD
            $table->string('name');
=======
>>>>>>> upstream/Restu-ujicoba
            $table->string('username')->unique();
            $table->string('email')->nullable()->unique();
            $table->string('password');

            $table->unsignedTinyInteger('role')->default(6); // 1 = admin, 6 = pegawai

            $table->rememberToken();
            $table->timestamps();

            $table->foreign('pegawai_id')->references('id')->on('pegawai')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
