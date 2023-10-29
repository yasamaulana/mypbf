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

        Satuan::create(['satuan' => 'Pcs', 'id_perusahaan' => $userId]);
        Satuan::create(['satuan' => 'Box', 'id_perusahaan' => $userId]);
        Satuan::create(['satuan' => 'Kapsul', 'id_perusahaan' => $userId]);
        Satuan::create(['satuan' => 'Tablet', 'id_perusahaan' => $userId]);
        Satuan::create(['satuan' => 'Strip', 'id_perusahaan' => $userId]);
    }
}
