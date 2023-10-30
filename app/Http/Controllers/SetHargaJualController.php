<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use App\Models\ObatBarang;
use App\Models\Satuan;
use App\Models\SetHarga;
use App\Models\StokAwal;
use Illuminate\Http\Request;

class SetHargaJualController extends Controller
{
    public function index($id)
    {
        return view('pages.master.produk.set-harga', [
            'title' => 'master',
            'kelompoks' => (new Kelompok())->getByIdPerusahaan(),
            'satuans' => (new Satuan())->getByIdPerusahaan(),
            'stok' => StokAwal::where('id_obat_barang', $id)->first(),
            'produk' => ObatBarang::where('id', $id)->first(),
            'setHarga' => SetHarga::where('id_produk', $id)->get(),
        ]);
    }

    public function createHarga(Request $request)
    {
        dd($request->all());
    }
}
