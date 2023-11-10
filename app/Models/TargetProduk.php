<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TargetProduk extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'target_produk';

    public function obatBarang()
    {
        return $this->hasOne(ObatBarang::class, 'id', 'id_produk');
    }
}
