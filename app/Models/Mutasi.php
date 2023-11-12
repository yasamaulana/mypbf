<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Mutasi extends Model
{
    use HasFactory;

    protected $table = 'mutasi';
    protected $guarded = ['id'];


    public function produk()
    {
        return $this->hasOne(StokAwal::class, 'id', 'id_perusahaan');
    }

    

    public function getByIdPerusahaan()
    {
        return $this->where('id_perusahaan', Auth::user()->id_perusahaan)->get();
    }
}