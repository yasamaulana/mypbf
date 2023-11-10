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
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id();
            $table->string('id_perusahaan');
            $table->string('kode');
            $table->string('kode_e_report');
            $table->string('tipe');
            $table->string('nama');
            $table->string('alamat');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('nomor');
            $table->string('npwp');
            $table->string('batas_piutang');
            $table->string('batas_jt');
            $table->string('apoteker');
            $table->string('no_sipa');
            $table->string('exp_date_sipa');
            $table->string('date_status_sipa');
            $table->string('no_sia');
            $table->string('exp_date_sia');
            $table->string('date_status_sia');
            $table->string('hari_tagih');
            $table->string('kelompok');
            $table->string('supervisor');
            $table->string('sales');
            $table->string('kolektor');
            $table->string('area_rayon');
            $table->string('sub_rayon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggan');
    }
};
