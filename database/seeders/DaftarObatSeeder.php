<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaftarObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Baca file SQL dari public
        $path = public_path('sql/daftar_obat.sql');
        $sql = file_get_contents($path);

        // Eksekusi query dari file SQL
        DB::unprepared($sql);
    }
}
