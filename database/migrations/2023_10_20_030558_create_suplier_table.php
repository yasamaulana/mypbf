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
        Schema::create('suplier', function (Blueprint $table) {
            $table->id();
            $table->string('id_perusahaan');
            $table->string('kode');
            $table->string('kode_e_report');
            $table->string('nama_suplier');
            $table->string('alamat');
            $table->string('npwp');
            $table->string('no_telepon');
            $table->string('id_hutang')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suplier');
    }
};
