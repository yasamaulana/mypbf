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
            'targetProduks' => TargetProduk::where('id_perusahaan', Auth::user()->id_perusahaan)->groupBy('tahun', 'bulan')
                ->get(),
            'targets' => TargetProduk::where('id_perusahaan', Auth::user()->id_perusahaan),
            'obatBarangs' => ObatBarang::where('id_perusahaan', Auth::user()->id_perusahaan)->get()
        ]);
    }

    public function tambahTargetProduk(Request $request)
    {
        $targets = $request->target;

        foreach ($targets as $target) {
            TargetProduk::create([
                'id_perusahaan' => Auth::user()->id_perusahaan,
                'id_produk' => $target['id_produk'],
                'tahun' => $request->tahun,
                'bulan' => $request->bulan,
                'target' => $target['target_produk'],
            ]);
        }

        return back()->with('success', 'Berhasil menambahkan target');
    }

    public function editTargetProduk(Request $request)
    {
        $targets = $request->target;

        foreach ($targets as $target) {
            // Find the existing record based on 'id_produk,' 'tahun,' and 'bulan'
            $existingTarget = TargetProduk::where('id_produk', $target['id_produk'])
                ->where('tahun', $request->tahun)
                ->where('bulan', $request->bulan)
                ->first();

            // Update the 'target' value if the record exists, otherwise create a new one
            if ($existingTarget) {
                $existingTarget->update(['target' => $target['target_produk']]);
            } else {
                TargetProduk::create([
                    'id_perusahaan' => Auth::user()->id_perusahaan,
                    'id_produk' => $target['id_produk'],
                    'tahun' => $request->tahun,
                    'bulan' => $request->bulan,
                    'target' => $target['target_produk'],
                ]);
            }
        }

        return back()->with('success', 'Berhasil mengedit target');
    }

    public function deleteTargetProduk(Request $request)
    {
        $targets = $request->target;

        foreach ($targets as $target) {
            TargetProduk::where('id_produk', $target['id_produk'])
                ->where('tahun', $request->tahun)
                ->where('bulan', $request->bulan)
                ->delete();
        }

        return back()->with('success', 'Berhasil menghapus target');
    }
}