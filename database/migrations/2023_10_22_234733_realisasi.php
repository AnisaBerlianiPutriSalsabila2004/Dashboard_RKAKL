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
        Schema::create('realisasi', function (Blueprint $table) {
            $table->foreignId('id_unit')->constrained('unit','id_unit');
            $table->foreignId('id_anggaran')->constrained('anggaran','id_anggaran');
            $table->string('kegiatan');
            $table->dateTime('tanggal');
            $table->integer('nominal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('id_unit');
    }
};
