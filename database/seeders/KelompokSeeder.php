<?php

namespace Database\Seeders;

use App\Models\Kelompok;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class KelompokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = Auth::id() ?: 1;

        Kelompok::create(['kelompok' => 'Kelompok 1', 'id_perusahaan' => $userId]);
        Kelompok::create(['kelompok' => 'Kelompok 2', 'id_perusahaan' => $userId]);
        Kelompok::create(['kelompok' => 'Kelompok 3', 'id_perusahaan' => $userId]);
        Kelompok::create(['kelompok' => 'Kelompok 4', 'id_perusahaan' => $userId]);
        Kelompok::create(['kelompok' => 'Kelompok 5', 'id_perusahaan' => $userId]);
    }
}
