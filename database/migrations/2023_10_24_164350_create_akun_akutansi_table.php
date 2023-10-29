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
        Schema::create('akun_akutansi', function (Blueprint $table) {
            $table->id();
            $table->string('id_perusahaan');
            $table->string('kode');
            $table->string('nama_akun');
            $table->string('jenis_akun');
            $table->string('kas_bank');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akun_akutansi');
    }
};
