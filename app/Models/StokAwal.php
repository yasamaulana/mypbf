<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokAwal extends Model
{
    use HasFactory;

    protected $table = 'stok_awal';
    protected $guarded = ['id'];


    public function obatBarang()
    {
        return $this->hasOne(ObatBarang::class, 'id', 'id_obat_barang');
    }
}
