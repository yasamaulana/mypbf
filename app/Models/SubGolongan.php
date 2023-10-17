<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubGolongan extends Model
{
    use HasFactory;

    protected $table = 'sub_golongan';
    protected $guarded = 'id';
}
