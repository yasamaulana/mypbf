<?php

namespace App\Http\Controllers;

use App\Models\AkunAkutansi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NeracaLajurController extends Controller
{
    public function index()
    {
        return view('pages.keuangan-akuntansi.akuntansi.neraca-lajur', [
            'title' => 'keuangan & akuntansi',
            'akuns' => AkunAkutansi::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
        ]);
    }
}
