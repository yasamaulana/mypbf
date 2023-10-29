<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkunAkutansi extends Model
{
    use HasFactory;

    protected $table = 'akun_akutansi';
    protected $guarded = ['id'];
}