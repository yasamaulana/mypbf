<?php

namespace Database\Seeders;

use App\Models\Golongan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class GolonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = Auth::id() ?: 1;

        Golongan::create(['golongan' => 'Golongan A', 'id_perusahaan' => $userId]);
        Golongan::create(['golongan' => 'Golongan B', 'id_perusahaan' => $userId]);
        Golongan::create(['golongan' => 'Golongan C', 'id_perusahaan' => $userId]);
    }
}
