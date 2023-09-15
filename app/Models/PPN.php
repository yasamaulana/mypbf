<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PPN extends Model
{
    use HasFactory;
    protected $table = 'ppn';
    protected $guarded  = 'id';
}
