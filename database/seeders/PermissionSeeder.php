<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = collect([
            Permission::create(['name' => 'akses profil perusahaan']),
            Permission::create(['name' => 'edit profil perusahaan']),

            Permission::create(['name' => 'akses pajak']),
            Permission::create(['name' => 'edit pajak']),
            Permission::create(['name' => 'tambah pajak']),
            Permission::create(['name' => 'delete pajak']),

            Permission::create(['name' => 'akses pegawai']),
            Permission::create(['name' => 'tambah pegawai']),
            Permission::create(['name' => 'edit pegawai']),
            Permission::create(['name' => 'delete pegawai']),

            Permission::create(['name' => 'akses jabatan']),
            Permission::create(['name' => 'tambah jabatan']),
            Permission::create(['name' => 'edit jabatan']),
            Permission::create(['name' => 'delete jabatan']),

            Permission::create(['name' => 'akses nama pegawai']),
            Permission::create(['name' => 'tambah nama pegawai']),
            Permission::create(['name' => 'edit nama pegawai']),
            Permission::create(['name' => 'delete nama pegawai']),

            Permission::create(['name' => 'akses set akses']),
            Permission::create(['name' => 'tambah set akses']),
            Permission::create(['name' => 'edit set akses']),
            Permission::create(['name' => 'delete set akses']),

            Permission::create(['name' => 'akses set user']),
            Permission::create(['name' => 'tambah set user']),
            Permission::create(['name' => 'edit set user']),
            Permission::create(['name' => 'delete set user']),
        ]);
    }
}