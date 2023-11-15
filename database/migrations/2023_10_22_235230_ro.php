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
        Schema::create('ro', function (Blueprint $table) {
            $table->id('id_ro');
            $table->foreignId('id_kro')->constrained('kro','id_kro');
            $table->string('nama');
            $table->string('instansi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('id_ro');
    }
};
