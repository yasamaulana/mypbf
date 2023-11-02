<?php

namespace App\Http\Controllers;

use App\Models\ObatBarang;
use App\Models\TargetProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TargetProdukController extends Controller
{
    public function index()
    {
        return view('pages.perusahaan.marketing.target-produk', [
            'title' => 'master',
            'targetProduks' => TargetProduk::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'obatBarangs' => ObatBarang::where('id_perusahaan', Auth::user()->id_perusahaan)->get()
        ]);
    }

    public function tambahTargetProduk(Request $request)
    {

        $currentDateTime = now();

        $request->validate([
            'inputs.*.target' => '', // Tambahkan validasi sesuai kebutuhan Anda
            'inputs.*.obat_barang_id' => 'numeric',
            'inputs.*.tahun' => 'numeric',
            'inputs.*.id_perusahaan' => 'numeric',
            'inputs.*.tahunTarget' => '',
            'inputs.*.bulanTarget' => '',
        ]);

        $dataToInsert = [];
        foreach ($request->inputs as $input) {
            // Cek apakah nilai target lebih besar dari 0, jika ya, maka tambahkan ke $dataToInsert
            if ($input['target'] > 0) {
                $dataToInsert[] = [
                    'id_perusahaan' => $input['id_perusahaan'],
                    'obat_barang_id' => $input['obat_barang_id'],
                    'target' => $input['target'],
                    'tahun' => $input['tahun'],
                    'tahun_target' => $input['tahunTarget'],
                    'bulan_target' => $input['bulanTarget'],
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

    public function editTargetProduk(Request $request, $id)
    {
        $targetProduk = TargetProduk::find($id);
        $targetProduk->update($request->all());

        return back()->with('success', 'Target Produk Updated successfully');
    }

    public function deleteTargetProduk($id)
    {
        $targetProduk = TargetProduk::find($id);
        $targetProduk->delete();
        return back()->with('success', 'Target Produk Deleted successfully');
    }
}
