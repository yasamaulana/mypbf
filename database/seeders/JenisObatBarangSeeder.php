<?php

namespace Database\Seeders;

use App\Models\JenisObatBarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class JenisObatBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = Auth::id() ?: 1;

        JenisObatBarang::create(['jenis' => 'jenis A', 'id_perusahaan' => $userId]);
        JenisObatBarang::create(['jenis' => 'jenis B', 'id_perusahaan' => $userId]);
        JenisObatBarang::create(['jenis' => 'jenis C', 'id_perusahaan' => $userId]);
    }
}
