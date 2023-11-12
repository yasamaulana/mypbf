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
        Schema::create('mutasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk')->nullable();
            $table->string('tipe');
            $table->string('no_batch');
            $table->string('exp_date');
            $table->string('jurnal_stok');
            $table->string('gudang_asal');
            $table->string('gudang_baru');
            $table->string('rak_baru');
            $table->string('subrak_baru');
            $table->string('subrak_asal');
            $table->string('keterangan');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mutasi');
    }
};
