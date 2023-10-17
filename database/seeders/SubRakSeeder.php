<?php

namespace Database\Seeders;

use App\Models\SubRak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class SubRakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = Auth::id() ?: 1;

        SubRak::create(['sub_rak' => 'Sub Rak A', 'id_perusahaan' => $userId]);
        SubRak::create(['sub_rak' => 'Sub Rak B', 'id_perusahaan' => $userId]);
        SubRak::create(['sub_rak' => 'Sub Rak C', 'id_perusahaan' => $userId]);
    }
}
