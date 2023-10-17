<?php

namespace Database\Seeders;

use App\Models\Rak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class RakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = Auth::id() ?: 1;

        Rak::create(['rak' => 'Rak A', 'id_perusahaan' => $userId]);
        Rak::create(['rak' => 'Rak B', 'id_perusahaan' => $userId]);
        Rak::create(['rak' => 'Rak C', 'id_perusahaan' => $userId]);
    }
}