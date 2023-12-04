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
        Schema::create('set_harga', function (Blueprint $table) {
            $table->id();
            $table->string('id_perusahaan');
            $table->string('id_set_harga');
            $table->string('sumber');
            $table->string('id_kelompok');
            $table->string('id_set');
            $table->string('id_jumlah');
            $table->string('jumlah')->nullable();
            $table->string('sampai')->nullable();
            $table->string('laba');
            $table->string('hasil_laba');
            $table->string('disc_1');
            $table->string('disc_2');
            $table->string('harga_jual');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::dropIfExists('set_harga');
    }
};
