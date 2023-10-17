<?php

namespace App\Http\Controllers;

use App\Models\SubRak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubRakController extends Controller
{
    public function index()
    {
        return view('pages.master.gudang.sub-rak', [
            'title' => 'master',
            'subrak' => SubRak::where('id_perusahaan', Auth::user()->id_perusahaan)->get()
        ]);
    }

    public function tambahSubRak(Request $request)
    {
        $rak = new SubRak();
        $rak->id_perusahaan = Auth::user()->id_perusahaan;
        $rak->sub_rak = $request->sub_rak;

        $rak->save();

        return back()->with('success', 'Sub Rak added successfully');
    }

    public function editSubRak(Request $request, $id)
    {
        $rak = SubRak::find($id);
        $rak->sub_rak = $request->sub_rak;

        $rak->save();

        return back()->with('success', 'Sub Rak edit successfully');
    }

    public function deleteSubRak($id)
    {
        $rak = SubRak::find($id);
        $rak->delete();

        return back()->with('success', 'Sub Rak delete successfully');
    }
}
