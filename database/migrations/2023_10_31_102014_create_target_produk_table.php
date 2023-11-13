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
        Schema::create('target_produk', function (Blueprint $table) {
            $table->id();
            $table->string('id_perusahaan');
            $table->foreignId('id_produk');
            $table->string('tahun');
            $table->string('bulan');
            $table->string('target')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('target_produk');
    }
};
