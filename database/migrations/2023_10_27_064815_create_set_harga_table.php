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
            $table->string('id_produk');
            $table->string('id_kelompok');
            //baris 1
            $table->string('jumlah1')->nullable();
            $table->string('sampai1')->nullable();
            $table->string('laba1')->nullable();
            $table->string('disc_1_1')->nullable();
            $table->string('disc_2_1')->nullable();
            $table->string('inc_ppn1')->nullable();
            //baris 2
            $table->string('jumlah2')->nullable();
            $table->string('sampai2')->nullable();
            $table->string('laba2')->nullable();
            $table->string('disc_1_2')->nullable();
            $table->string('disc_2_2')->nullable();
            $table->string('inc_ppn2')->nullable();
            //baris 3
            $table->string('jumlah3')->nullable();
            $table->string('sampai3')->nullable();
            $table->string('laba3')->nullable();
            $table->string('disc_1_3')->nullable();
            $table->string('disc_2_3')->nullable();
            $table->string('inc_ppn3')->nullable();
            //baris 2
            $table->string('jumlah4')->nullable();
            $table->string('sampai4')->nullable();
            $table->string('laba4')->nullable();
            $table->string('disc_1_4')->nullable();
            $table->string('disc_2_4')->nullable();
            $table->string('inc_ppn4')->nullable();
            //end
            $table->string('satuan_jual');
            $table->string('isi');
            $table->string('hpp_final');
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
