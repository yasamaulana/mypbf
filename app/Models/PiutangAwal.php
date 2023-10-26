<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PiutangAwal extends Model
{
    use HasFactory;
    protected $table = 'piutang_awal';
    protected $guarded = ['id'];
}
