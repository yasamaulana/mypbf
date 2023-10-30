<?php

namespace Database\Seeders;

use App\Models\SubGolongan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class SubGolonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = Auth::id() ?: 1;

        SubGolongan::create(['sub_golongan' => 'Golongan A', 'id_perusahaan' => $userId]);
        SubGolongan::create(['sub_golongan' => 'Golongan B', 'id_perusahaan' => $userId]);
        SubGolongan::create(['sub_golongan' => 'Golongan C', 'id_perusahaan' => $userId]);
    }
}