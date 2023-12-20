<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempPembelianProduk extends Model
{
    use HasFactory;
    protected $table = 'temp_pembelian';
    protected $guarded = ['id'];

    public function produk()
    {
        return $this->hasOne(ObatBarang::class, 'id', 'id_obat_barang');
    }
}
