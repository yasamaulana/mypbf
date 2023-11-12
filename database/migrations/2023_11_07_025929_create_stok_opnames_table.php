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
        Schema::create('stok_opname', function (Blueprint $table) {
            $table->id();
            $table->string('id_perusahaan');
            $table->string('tgl_so')->nullable();
            $table->string('tipe')->nullable();
            $table->string('nama_produk')->nullable();
            $table->string('no_batch')->nullable();
            $table->string('exp_date')->nullable();
            $table->string('hpp')->nullable();
            $table->string('isi')->nullable();
            $table->string('stok_tercatat')->nullable();
            $table->string('stok_real')->nullable();
            $table->string('ket_satuan')->nullable();
            $table->string('gudang')->nullable();
            $table->string('rak')->nullable();
            $table->string('sub_rak')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok_opname');
    }
};
