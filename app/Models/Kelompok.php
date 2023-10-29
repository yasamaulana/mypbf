<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Kelompok extends Model
{
    use HasFactory;

    protected $table = 'kelompok';
    protected $guarded = ['id'];

    public function getByIdPerusahaan()
    {
        return $this->where('id_perusahaan', Auth::user()->id_perusahaan)->get();
    }

    public function diskon($id)
    {
        return DiskonKelompok::where('id_kelompok', $id)->first();
    }
}
