<?php

namespace Database\Seeders;

use App\Models\AkunAkutansi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class AkunAkutansiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = Auth::id() ?: 1;

        AkunAkutansi::create(['id_perusahaan' => $userId, 'kode' => '1-1001', 'nama_akun' => 'Piutang Dagang', 'jenis_akun' => 'Aktiva', 'kas_bank' => 0]);
        AkunAkutansi::create(['id_perusahaan' => $userId, 'kode' => '1-1002', 'nama_akun' => 'Piutang Konsinyasi', 'jenis_akun' => 'Aktiva', 'kas_bank' => 0]);
        AkunAkutansi::create(['id_perusahaan' => $userId, 'kode' => '1-2001', 'nama_akun' => 'Persediaan Dagang', 'jenis_akun' => 'Aktiva', 'kas_bank' => 0]);
        AkunAkutansi::create(['id_perusahaan' => $userId, 'kode' => '1-2002', 'nama_akun' => 'Persediaan Konsinyasi', 'jenis_akun' => 'Aktiva', 'kas_bank' => 0]);
        AkunAkutansi::create(['id_perusahaan' => $userId, 'kode' => '1-3001', 'nama_akun' => 'PPN Masukan', 'jenis_akun' => 'Aktiva', 'kas_bank' => 0]);
        AkunAkutansi::create(['id_perusahaan' => $userId, 'kode' => '2-1001', 'nama_akun' => 'Hutang Dagang', 'jenis_akun' => 'Kewajiban', 'kas_bank' => 0]);
        AkunAkutansi::create(['id_perusahaan' => $userId, 'kode' => '2-1002', 'nama_akun' => 'Hutang Konsinyasi', 'jenis_akun' => 'Kewajiban', 'kas_bank' => 0]);
        AkunAkutansi::create(['id_perusahaan' => $userId, 'kode' => '3-1001', 'nama_akun' => 'Modal Pemilih', 'jenis_akun' => 'Modal', 'kas_bank' => 0]);
    }
}
