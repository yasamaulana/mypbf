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
        Schema::create('temp_pembelian', function (Blueprint $table) {
            $table->id();
            $table->string('id_perusahaan');
            $table->string('id_obat_barang');
            $table->string('satuan');
            $table->string('isi');
            $table->string('satuan_terkecil');
            $table->string('qty_faktur');
            $table->string('harga');
            $table->string('disc1');
            $table->string('disc2');
            $table->string('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temp_pembelian');
    }
};
