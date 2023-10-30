<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HutangAwal extends Model
{
    use HasFactory;
    protected $table = 'hutang_awals';
    protected $guarded = ['id'];
}
