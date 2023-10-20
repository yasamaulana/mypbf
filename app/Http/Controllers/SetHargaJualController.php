<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use App\Models\StokAwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SetHargaJualController extends Controller
{
    public function index()
    {
        return view('pages.master.produk.set-harga', [
            'title' => 'master',
            'kelompoks' => Kelompok::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'stoks' => StokAwal::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
        ]);
    }
}
