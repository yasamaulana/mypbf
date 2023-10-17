<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GolonganController extends Controller
{
    public function index()
    {
        return view('pages.master.produk.golongan', [
            'title' => 'master',
            'golongans' => Golongan::where('id_perusahaan', Auth::user()->id_perusahaan)->get()
        ]);
    }

    public function tambahGolongan(Request $request)
    {
        $golongan = new Golongan();
        $golongan->id_perusahaan = Auth::user()->id_perusahaan;
        $golongan->golongan = $request->golongan;

        $golongan->save();

        return back()->with('success', 'Golongan added successfully');
    }

    public function editGolongan(Request $request, $id)
    {
        $golongan = Golongan::find($id);
        $golongan->golongan = $request->golongan;

        $golongan->save();

        return back()->with('success', 'Golongan edit successfully');
    }

    public function deleteGolongan($id)
    {
        $golongan = Golongan::find($id);
        $golongan->delete();

        return back()->with('success', 'Golongan delete successfully');
    }
}
