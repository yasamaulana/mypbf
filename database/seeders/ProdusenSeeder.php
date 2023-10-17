<?php

namespace Database\Seeders;

use App\Models\Produsen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class ProdusenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = Auth::id() ?: 1;

        Produsen::create(['produsen' => 'Produsen A', 'id_perusahaan' => $userId]);
        Produsen::create(['produsen' => 'Produsen B', 'id_perusahaan' => $userId]);
        Produsen::create(['produsen' => 'Produsen C', 'id_perusahaan' => $userId]);
    }
}
