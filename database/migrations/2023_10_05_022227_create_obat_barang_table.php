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
        Schema::create('obat_barang', function (Blueprint $table) {
            $table->id();
            $table->string('id_perusahaan');
            $table->string('nama_obat_barang');
            $table->string('kode_obat_barang');
            $table->string('kode_obat_bpom');
            $table->string('barcode_qr_produk');
            $table->string('barcode_produk');
            $table->string('satuan_dasar_beli');
            $table->string('satuan_jual_terkecil');
            $table->string('isi');
            $table->string('kemasan');
            $table->string('ket_satuan');
            $table->string('golongan');
            $table->string('sub_golongan');
            $table->string('jenis_obat_barang');
            $table->string('produsen');
            $table->string('tipe');
            $table->string('stok_minimal');
            $table->string('stok_maksimal');
            $table->text('komposisi');
            $table->text('zat_aktif');
            $table->string('bentuk_kekuatan');
            $table->string('no_ijin_edar');
            $table->string('exp_date');
            $table->string('status');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obat_barang');
    }
};
