<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarObat extends Model
{
    use HasFactory;

    protected $table = 'daftar_obat';
    protected $guarded = ['id'];
}
