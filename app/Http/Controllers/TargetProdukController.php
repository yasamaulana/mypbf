<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TargetProdukController extends Controller
{
    public function index()
    {
        return view('pages.perusahaan.marketing.target-produk', [
            'title' => 'master'
        ]);
    }
}
