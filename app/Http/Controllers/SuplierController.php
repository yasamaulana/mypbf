<?php

namespace App\Http\Controllers;

use App\Models\Suplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuplierController extends Controller
{
    public function index()
    {
        return view('pages.master.produsen.suplier', [
            'title' => 'master',
            'suplier' => Suplier::where('id_perusahaan', Auth::user()->id_perusahaan)->get()
        ]);
    }

    public function tambahSuplier(Request $request)
    {
        $request->merge(['id_perusahaan' => Auth::user()->id_perusahaan]);
        Suplier::create($request->all());

        return back()->with('success', 'Suplier add successfully');
    }

    public function editSuplier(Request $request, $id)
    {
        $suplier = Suplier::find($id);
        $suplier->update($request->all());

        return back()->with('success', 'Suplier edited successfully');
    }

    public function deleteSuplier($id)
    {
        $suplier = Suplier::find($id);
        $suplier->delete();

        return back()->with('success', 'Suplier deleted successfully');
    }
}
