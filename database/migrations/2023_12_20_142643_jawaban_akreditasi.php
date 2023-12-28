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
        Schema::create('JawabanAkreditasi', function (Blueprint $table) {
            $table->id('idj');
            $table->unsignedBigInteger('id_pertanyaan')->nullable();
            $table->unsignedBigInteger('id_standar')->nullable();
            $table->text('jawaban');
            $table->integer('score');
            $table->foreign('id_pertanyaan')->references('idp')->on('SoalAkreditasi');
            $table->foreign('id_standar')->references('id')->on('StandarAkreditasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('JawabanAkreditasi');
    }
};
