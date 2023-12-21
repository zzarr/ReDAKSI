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
        Schema::create('SoalAkreditasi', function (Blueprint $table) {
            $table->id('idp');
            $table->unsignedBigInteger('id_standar')->nullable();
            $table->text('pertanyaan')->nullable();
            $table->string('A')->nullable();
            $table->string('B')->nullable();
            $table->string('C')->nullable();
            $table->string('D')->nullable();
            $table->string('E')->nullable();
            $table->integer('skor_butir')->nullable();
            $table->foreign('id_standar')->references('id')->on('StandarAkreditasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('SoalAkreditasi');
    }
};
