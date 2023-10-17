<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RakController extends Controller
{
    public function index()
    {
        return view('pages.master.gudang.rak', [
            'title' => 'master',
            'raks' => Rak::where('id_perusahaan', Auth::user()->id_perusahaan)->get()
        ]);
    }

    public function tambahRak(Request $request)
    {
        $rak = new Rak();
        $rak->id_perusahaan = Auth::user()->id_perusahaan;
        $rak->rak = $request->rak;

        $rak->save();

        return back()->with('success', 'Rak added successfully');
    }

    public function editRak(Request $request, $id)
    {
        $rak = Rak::find($id);
        $rak->rak = $request->rak;

        $rak->save();

        return back()->with('success', 'Rak edit successfully');
    }

    public function deleteRak($id)
    {
        $rak = Rak::find($id);
        $rak->delete();

        return back()->with('success', 'Rak delete successfully');
    }
}
