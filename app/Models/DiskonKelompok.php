<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiskonKelompok extends Model
{
    use HasFactory;

    protected $table = 'diskon_kelompok';
    protected $guarded = ['id'];
}
