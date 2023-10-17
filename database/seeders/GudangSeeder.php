<?php

namespace Database\Seeders;

use App\Models\Gudang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class GudangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = Auth::id() ?: 1;

        Gudang::create(['gudang' => 'Gudang A', 'id_perusahaan' => $userId]);
        Gudang::create(['gudang' => 'Gudang B', 'id_perusahaan' => $userId]);
        Gudang::create(['gudang' => 'Gudang C', 'id_perusahaan' => $userId]);
    }
}