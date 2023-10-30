<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class StokAwal extends Model
{
    use HasFactory;

    protected $table = 'stok_awal';
    protected $guarded = ['id'];


    public function produk()
    {
        return $this->hasOne(ObatBarang::class, 'id', 'id_obat_barang');
    }

    public function getByIdPerusahaan()
    {
        return $this->where('id_perusahaan', Auth::user()->id_perusahaan)->get();
    }
}