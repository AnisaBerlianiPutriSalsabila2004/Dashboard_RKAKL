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
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id_details');
            $table->foreignId('id_unit')->constrained('unit','id_unit');
            $table->string('unit');
            $table->foreignId('id_anggaran')->constrained('anggaran','id_anggaran');
            $table->foreignId('id_kegiatan')->constrained('kegiatan','id_kegiatan');
            $table->string('kegiatan');
            $table->integer('tahun');
            $table->integer('nominal');
            $table->integer('nominal_satuan');
            $table->integer('volume');
            $table->string('subkomponen');
            $table->string('komponen');
            $table->foreignId('id_kro')->constrained('kro','id_kro');
            $table->string('kro');
            $table->foreignId('id_ro')->constrained('ro','id_ro');
            $table->string('ro');
            $table->string('detail');
            $table->string('detail2'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
