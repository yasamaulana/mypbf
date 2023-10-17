<?php

namespace Database\Seeders;

use App\Models\Satuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = Auth::id() ?: 1;

        Satuan::create(['satuan' => 'pcs', 'id_perusahaan' => $userId]);
        Satuan::create(['satuan' => 'box', 'id_perusahaan' => $userId]);
        Satuan::create(['satuan' => 'saset', 'id_perusahaan' => $userId]);
    }
}
