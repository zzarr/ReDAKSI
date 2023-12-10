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
            $table->unsignedBigInteger('id_standar');
            $table->text('pertanyaan');
            $table->string('A');
            $table->string('B');
            $table->string('C');
            $table->string('D');
            $table->string('E');
            $table->integer('bobot');
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
