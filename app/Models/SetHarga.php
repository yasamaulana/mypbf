<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetHarga extends Model
{
    use HasFactory;

    protected $table = 'set_harga';
    protected $guarded = ['id'];

    public function kelompok()
    {
        return $this->hasOne(Kelompok::class, 'id', 'id_kelompok');
    }

    public function diskonKelompok($id_kelompok, $id_set)
    {
        return DiskonKelompok::where('id_kelompok', $id_kelompok)->where('id_set_harga', $id_set)->first();
    }

    public function getItem($id_kelompok, $id_set, $id_jumlah)
    {
        return SetHarga::where('id_kelompok', $id_kelompok)->where('id_set', $id_set)->where('id_jumlah', $id_jumlah)->first();
    }
}
