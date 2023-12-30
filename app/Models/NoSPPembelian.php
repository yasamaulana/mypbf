<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoSPPembelian extends Model
{
    use HasFactory;

    protected $table = 'no_sp_pembelian';
    protected $guarded = ['id'];
}
