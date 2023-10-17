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
        Schema::create('target_sales', function (Blueprint $table) {
            $table->id();
            $table->string('id_perusahaan');
            $table->string('sales');
            $table->string('supervisor');
            $table->string('area_rayon');
            $table->string('sub_rayon');
            $table->string('tahun');
            $table->string('target_januari')->nullable();
            $table->string('target_februari')->nullable();
            $table->string('target_maret')->nullable();
            $table->string('target_april')->nullable();
            $table->string('target_mei')->nullable();
            $table->string('target_juni')->nullable();
            $table->string('target_juli')->nullable();
            $table->string('target_agustus')->nullable();
            $table->string('target_september')->nullable();
            $table->string('target_oktober')->nullable();
            $table->string('target_november')->nullable();
            $table->string('target_desember')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('target_sales');
    }
};
