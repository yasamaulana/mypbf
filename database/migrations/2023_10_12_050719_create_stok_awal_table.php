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
        Schema::create('stok_awal', function (Blueprint $table) {
            $table->id();
            $table->string('id_perusahaan');
            $table->string('no_reff');
            $table->string('no_batch');
            $table->string('id_obat_barang');
            $table->string('satuan');
            $table->string('jumlah');
            $table->string('exp_date')->nullable();
            $table->string('hpp');
            $table->string('gudang');
            $table->string('rak');
            $table->string('sub_rak');
            $table->string('tipe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok_awal');
    }
};
