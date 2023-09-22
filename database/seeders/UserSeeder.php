<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            "akses jabatan",
            "akses nama pegawai",
            "akses pajak",
            "akses pegawai",
            "akses profil perusahaan",
            "akses set akses",
            "akses set user",
            "delete jabatan",
            "delete nama pegawai",
            "delete pajak",
            "delete pegawai",
            "delete set akses",
            "delete set user",
            "edit jabatan",
            "edit nama pegawai",
            "edit pajak",
            "edit pegawai",
            "edit profil perusahaan",
            "edit set akses",
            "edit set user",
            "tambah jabatan",
            "tambah nama pegawai",
            "tambah pajak",
            "tambah pegawai",
            "tambah set akses",
            "tambah set user"
        ];;
        User::create([
            'name' => 'Yasa Maulana',
            'id_perusahaan' => '1',
            'email' => 'admin@gmail.com',
            'status' => 'main',
            'password' => Hash::make('admin123'),
        ])->givePermissionTo($permissions);
    }
}
