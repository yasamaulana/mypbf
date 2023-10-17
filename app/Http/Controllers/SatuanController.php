<?php

namespace App\Http\Controllers;

use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SatuanController extends Controller
{
    public function index()
    {
        return view('pages.master.produk.satuan', [
            'title' => 'master',
            'satuans' => Satuan::where('id_perusahaan', Auth::user()->id_perusahaan)->get()
        ]);
    }

    public function tambahSatuan(Request $request)
    {
        $satuan = new Satuan();
        $satuan->id_perusahaan = Auth::user()->id_perusahaan;
        $satuan->satuan = $request->satuan;

        $satuan->save();

        return back()->with('success', 'Satuan added successfully');
    }

    public function editSatuan(Request $request, $id)
    {
        $satuan = Satuan::find($id);
        $satuan->satuan = $request->satuan;

        $satuan->save();

        return back()->with('success', 'Satuan edit successfully');
    }

    public function deleteSatuan($id)
    {
        $satuan = Satuan::find($id);
        $satuan->delete();

        return back()->with('success', 'Satuan delete successfully');
    }
}
