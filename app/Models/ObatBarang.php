<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObatBarang extends Model
{
    use HasFactory;

    protected $table = 'obat_barang';
    protected $guarded = ['id'];
}
