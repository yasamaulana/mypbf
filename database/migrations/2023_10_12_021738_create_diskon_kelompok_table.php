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
        Schema::create('diskon_kelompok', function (Blueprint $table) {
            $table->id();
            $table->string('id_obat_barang');
            $table->string('id_kelompok');
            $table->string('id_set_harga');
            $table->string('satuan_dasar_beli')->nullable();
            $table->string('isi')->nullable();
            $table->string('persentase');
            $table->string('disc_1');
            $table->string('disc_2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diskon_kelompok');
    }
};
