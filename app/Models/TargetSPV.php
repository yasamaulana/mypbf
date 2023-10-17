<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TargetSPV extends Model
{
    use HasFactory;

    protected $table = 'target_spv';
    protected $guarded = 'id';
}
