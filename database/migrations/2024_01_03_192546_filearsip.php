<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('filearsip', function (Blueprint $table) {
            $table->id();
            $table->string('nama_file');
            $table->string('jenis_file');
            $table->unsignedBigInteger('id_standar');
            $table
                ->foreign('id_standar')
                ->references('id')
                ->on('standarakreditasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filearsip');
    }
};
