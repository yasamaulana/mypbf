<?php

namespace App\Models;

use App\Http\Controllers\ObatBarangController;
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

    public function diskon($id_kelompok, $id_set_harga)
    {
        return DiskonKelompok::where('id_kelompok', $id_kelompok)->where('id_set_harga', $id_set_harga)->first();
    }

    public function diskonkelompok($id_kelompok)
    {
        return DiskonKelompok::where('id_kelompok', $id_kelompok)->first();
    }

    public function produk()
    {
        return $this->hasOne(ObatBarang::class, 'id', 'id_obat_barang');
    }
}
