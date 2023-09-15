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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('id_perusahaan');
            $table->string('nip');
            $table->string('nama_pegawai');
            $table->string('no_bpjs_tk');
            $table->string('alamat');
            $table->string('no_telepon');
            $table->string('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->string('jabatan');
            $table->string('marketing');
            $table->string('kolektor');
            $table->string('status');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
