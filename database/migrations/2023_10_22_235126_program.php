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
        Schema::create('program', function (Blueprint $table) {
            $table->id('id_program');
            $table->foreignId("id_unit")->constrained('unit','id_unit');
            $table->foreignId('id_users')->constrained('users','kode_pegawai');
            $table->string('nama_program');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('id_program');
    }
};
