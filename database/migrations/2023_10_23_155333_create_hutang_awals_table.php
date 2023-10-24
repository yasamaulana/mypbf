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
        Schema::create('hutang_awals', function (Blueprint $table) {
            $table->id();
            $table->string("id_perusahaan");
            $table->string("no_reff");
            $table->string("no_faktur");
            $table->date("tgl_faktur");
            $table->string("supplier");
            $table->date("tgl_jth_tempo");
            $table->string("jmlh_hutang");
            $table->string("jns_hutang");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hutang_awals');
    }
};
