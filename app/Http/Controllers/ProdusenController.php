<?php

namespace App\Http\Controllers;

use App\Models\Produsen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdusenController extends Controller
{
    public function index()
    {
        return view('pages.master.produsen.produsen', [
            'title' => 'master',
            'produsen' => Produsen::where('id_perusahaan', Auth::user()->id_perusahaan)->get()
        ]);
    }

    public function tambahProdusen(Request $request)
    {
        $produsen = new Produsen();
        $produsen->id_perusahaan = Auth::user()->id_perusahaan;
        $produsen->produsen = $request->produsen;

        $produsen->save();

        return back()->with('success', 'Produsen added successfully');
    }

    public function editProdusen(Request $request, $id)
    {
        $produsen = Produsen::find($id);
        $produsen->produsen = $request->produsen;

        $produsen->save();

        return back()->with('success', 'Produsen edit successfully');
    }

    public function deleteProdusen($id)
    {
        $produsen = Produsen::find($id);
        $produsen->delete();

        return back()->with('success', 'Produsen delete successfully');
    }
}
