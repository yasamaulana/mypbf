<?php

namespace App\Http\Controllers;

use App\Models\ObatBarang;
use App\Models\TargetProduk;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TargetProdukController extends Controller
{
    public function index()
    {
        return view('pages.perusahaan.marketing.target-produk', [
            'title' => 'master',
            'obatBarangs' => ObatBarang::all()
        ]);
    }

    public function tambahTargetProduk(Request $request)
    {

        $currentDateTime = now();

        $request->validate([
            'inputs.*.target' => '', // Tambahkan validasi sesuai kebutuhan Anda
            'inputs.*.id_obat_barang' => 'numeric',
            'inputs.*.tahun' => 'numeric',
            'inputs.*.id_perusahaan' => 'numeric',
        ]);
        // dd($request->all());

        $dataToInsert = [];

        foreach ($request->inputs as $input) {
            // Cek apakah nilai target lebih besar dari 0, jika ya, maka tambahkan ke $dataToInsert
            if ($input['target'] > 0) {
                $dataToInsert[] = [
                    'id_perusahaan' => $input['id_perusahaan'],
                    'id_obat_barang' => $input['id_obat_barang'],
                    'target' => $input['target'],
                    'tahun' => $input['tahun'],
                    'created_at' => $currentDateTime,
                    'updated_at' => $currentDateTime,
                ];
            }
        }

        if (!empty($dataToInsert)) {
            TargetProduk::insert($dataToInsert);
            return back()->with('success', 'Target Produk added successfully');
        }

        return back()->with('error', 'No valid targets were provided');
    }
}
