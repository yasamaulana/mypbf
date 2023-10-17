<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubRak extends Model
{
    use HasFactory;

    protected $table = 'sub_rak';
    protected $guarded = 'id';
}
