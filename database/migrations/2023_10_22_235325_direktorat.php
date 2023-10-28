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
        Schema::create('direktorat', function (Blueprint $table) {
            $table->id('id_direktorat');
            $table->foreignId('id_kementerian')->constrained('kementrian','id_kementerian');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('id_direktorat');
    }
};
