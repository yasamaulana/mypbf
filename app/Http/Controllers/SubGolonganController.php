<?php

namespace App\Http\Controllers;

use App\Models\SubGolongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubGolonganController extends Controller
{
    public function index()
    {
        return view('pages.master.produk.sub-golongan', [
            'title' => 'master',
            'subs' => SubGolongan::where('id_perusahaan', Auth::user()->id_perusahaan)->get()
        ]);
    }

    public function tambahSubGolongan(Request $request)
    {
        $golongan = new SubGolongan();
        $golongan->id_perusahaan = Auth::user()->id_perusahaan;
        $golongan->sub_golongan = $request->sub_golongan;

        $golongan->save();

        return back()->with('success', 'Sub Golongan added successfully');
    }

    public function editSubGolongan(Request $request, $id)
    {
        $golongan = SubGolongan::find($id);
        $golongan->sub_golongan = $request->sub_golongan;

        $golongan->save();

        return back()->with('success', 'Sub Golongan edit successfully');
    }

    public function deleteSubGolongan($id)
    {
        $golongan = SubGolongan::find($id);
        $golongan->delete();

        return back()->with('success', 'Sub Golongan delete successfully');
    }
}
