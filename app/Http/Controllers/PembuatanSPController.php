<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembuatanSPController extends Controller
{
    public function index()
    {
        return view('pages.transaksi.pengadaan.sp.surat-pesanan', [
            'title' => 'transaksi'
        ]);
    }

    public function setNoSurat(Request $request)
    {
    }
}
