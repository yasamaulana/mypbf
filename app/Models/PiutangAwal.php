<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PiutangAwal extends Model
{
    use HasFactory;
    protected $table = 'piutang_awal';
    protected $guarded = ['id'];

    public function getByIdPerusahaan()
    {
        return $this->where('id_perusahaan', Auth::user()->id_perusahaan)->get();
    }
}