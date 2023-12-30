<?php

namespace App\Http\Controllers;

use App\Models\ObatBarang;
use App\Models\StokAwal;
use App\Models\TempPembelianProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\VarDumper\VarDumper;

class TambahPembelianController extends Controller
{
    public function index()
    {

        return view('pages.transaksi.pembelian.pembelian.tambah-pembelian', [
            'title' => 'transaksi',
            'stoks' => StokAwal::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'barangs' => ObatBarang::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'produks' => TempPembelianProduk::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
        ]);
    }

    public function tambahProduk(Request $request)
    {
        $request->merge(['id_perusahaan' => Auth::user()->id_perusahaan]);
        $request['harga'] = str_replace(".", "", $request->harga);

        TempPembelianProduk::create($request->all());
        return redirect('/tambah-pembelian')->with('success', 'Produk Berhasil ditambahkan!');;
    }


    public function deleteProduk($id)
    {
        $produk = TempPembelianProduk::find($id);

        $produk->delete();

        return redirect('/tambah-pembelian')->with('success', 'Produk Berhasil dihapus.');
    }
}