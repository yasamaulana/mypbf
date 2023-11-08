<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use App\Models\JenisObatBarang;
use App\Models\ObatBarang;
use App\Models\Rak;
use App\Models\StokAwal;
use App\Models\SubRak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StokAwalController extends Controller
{
    public function index()
    {
        return view('pages.set-awal.stok-awal', [
            'title' => 'setting awal',
            'stoks' => StokAwal::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'barangs' => ObatBarang::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'gudangs' => Gudang::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'raks' => Rak::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'sub_rak' => SubRak::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'jenis_obat' => JenisObatBarang::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
        ]);
    }

    public function tambahStok(Request $request)
    {
        $request->merge(['id_perusahaan' => Auth::user()->id_perusahaan]);
        StokAwal::create($request->all());

        return back()->with('success', 'Stok Awal added successfully');
    }  

    public function editStok(Request $request, $id)
    {
        $stokawal = StokAwal::find($id);

        if (!$stokawal) {
            return back()->with('error', 'Stok not found');
        }

        $stokawal->update($request->all());

        return back()->with('success', 'Stok Awal edited successfully');
    }

    public function deleteStok($id)
    {
        $stokawal = StokAwal::find($id);

        if (!$stokawal) {
            return back()->with('error', 'Stok not found');
        }

        $stokawal->delete();

        return back()->with('success', 'Stok Awal delete successfully');
    }

    public function getNamaBarang($id)
    {
        $barang = ObatBarang::find($id);

        return response()->json([
            'satuan' => $barang->satuan_dasar_beli,
            'satuan_terkecil' => $barang->satuan_jual_terkecil,
            'isi' => $barang->isi,
        ]);
    }
}
