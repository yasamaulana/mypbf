<?php

namespace App\Http\Controllers;

use App\Models\JenisObatBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JenisObatBarangController extends Controller
{
    public function index()
    {
        return view('pages.master.produk.jenis-obat-barang', [
            'title' => 'master',
            'jenis_obat_barang' => JenisObatBarang::where('id_perusahaan', Auth::user()->id_perusahaan)->get()
        ]);
    }

    public function tambahJenis(Request $request)
    {
        $jenis = new JenisObatBarang();
        $jenis->id_perusahaan = Auth::user()->id_perusahaan;
        $jenis->jenis = $request->jenis;

        $jenis->save();

        return back()->with('success', 'Jenis Obat/Barang added successfully');
    }

    public function editJenis(Request $request, $id)
    {
        $jenis = JenisObatBarang::find($id);
        $jenis->jenis = $request->jenis;

        $jenis->save();

        return back()->with('success', 'Jenis Obat/Barang edit successfully');
    }

    public function deleteJenis($id)
    {
        $jenis = JenisObatBarang::find($id);
        $jenis->delete();

        return back()->with('success', 'Jenis Obat/Barang delete successfully');
    }
}
