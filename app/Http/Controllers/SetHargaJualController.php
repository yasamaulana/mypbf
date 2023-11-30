<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use App\Models\ObatBarang;
use App\Models\PPN;
use App\Models\Satuan;
use App\Models\SetHarga;
use App\Models\StokAwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SetHargaJualController extends Controller
{
    public function index($id)
    {
        return view('pages.master.produk.set-harga.set-harga', [
            'title' => 'master',
            'stok' => StokAwal::where('id', $id)->first(),
            'kelompoks' => (new Kelompok())->getByIdPerusahaan(),
            'satuans' => (new Satuan())->getByIdPerusahaan(),
            'setHarga' => SetHarga::where('id_produk', $id)->get(),
            'ppn' => PPN::where('id_perusahaan', Auth::user()->id_perusahaan)->first(),
        ]);
    }

    public function createHarga(Request $request)
    {
        dd($request->all());
    }
}