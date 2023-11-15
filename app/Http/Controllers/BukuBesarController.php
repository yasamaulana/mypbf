<?php

namespace App\Http\Controllers;

use App\Models\AkunAkutansi;
use App\Models\PiutangAwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BukuBesarController extends Controller
{
    public function index()
    {
        return view('pages.keuangan-akuntansi.akuntansi.buku-besar', [
            'title' => 'keuangan & akuntansi',
            'akuns' => AkunAkutansi::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'piutangDagang' => PiutangAwal::where('jns_piutang', 'Piutang Dagang')->get(),
        ]);
    }
}
