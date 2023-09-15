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
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->string('id_user');
            $table->string('nama_perusahaan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('no_telepon')->nullable();
            $table->string('npwp')->nullable();
            $table->string('no_ijin_pbf')->nullable();
            $table->string('no_ijin_dak')->nullable();
            $table->string('apoteker')->nullable();
            $table->string('sipa')->nullable();
            $table->string('pj_alkes')->nullable();
            $table->string('sip')->nullable();
            $table->string('tgl_pkp')->nullable();
            $table->string('no_pkp')->nullable();
            $table->string('tgl_neraca_awal')->nullable();
            $table->string('logo_perusahaan')->nullable();
            $table->string('ttd_apt')->nullable();
            $table->string('ttd_pj_alkes')->nullable();
            $table->string('stempel')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};
