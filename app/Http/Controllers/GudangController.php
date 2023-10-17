<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GudangController extends Controller
{
    public function index()
    {
        return view('pages.master.gudang.nama-gudang', [
            'title' => 'master',
            'gudangs' => Gudang::where('id_perusahaan', Auth::user()->id_perusahaan)->get()
        ]);
    }

    public function tambahGudang(Request $request)
    {
        $gudang = new Gudang();
        $gudang->id_perusahaan = Auth::user()->id_perusahaan;
        $gudang->gudang = $request->gudang;

        $gudang->save();

        return back()->with('success', 'Gudang added successfully');
    }

    public function editGudang(Request $request, $id)
    {
        $gudang = Gudang::find($id);
        $gudang->gudang = $request->gudang;

        $gudang->save();

        return back()->with('success', 'Gudang edit successfully');
    }

    public function deleteGudang($id)
    {
        $gudang = Gudang::find($id);
        $gudang->delete();

        return back()->with('success', 'Gudang delete successfully');
    }
}
