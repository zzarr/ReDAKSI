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
        Schema::create('StandarAkreditasi', function (Blueprint $table) {
            $table->id();
            $table->string('nm_standar');
            $table->integer('NoSoal');
            $table->integer('jumlah_soal');
            $table->integer('bobot_standar');
            $table->integer('skorMaxSoal');
            $table->integer('jumlahBobotButir');
            $table->integer('skorTertimbangMax');
            $table->integer('skorPerolehan');
            $table->integer('nilaiPerStandar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('StandarAkreditasi');
    }
};
