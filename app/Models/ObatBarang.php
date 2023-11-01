<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ObatBarang extends Model
{
    use HasFactory;

    protected $table = 'obat_barang';
    protected $guarded = ['id'];

    public function getByIdPerusahaan()
    {
        return $this->where('id_perusahaan', Auth::user()->id_perusahaan)->get();
    }

    public function stokAwal()
    {
        return $this->hasOne(StokAwal::class, 'id_obat_barang', 'id');
    }

    public function targetProduk()
    {
        return $this->hasOne(TargetProduk::class);
    }
}
