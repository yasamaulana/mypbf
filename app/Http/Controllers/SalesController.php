<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalesController extends Controller
{
    public function index()
    {
        return view('pages.perusahaan.marketing.sales', [
            'title' => "perusahaan",
            'sales' => Sales::where('id_perusahaan', Auth::user()->id_perusahaan)->get()
        ]);
    }

    public function tambahSales(Request $request)
    {
        $sales = new Sales();
        $sales->id_perusahaan = Auth::user()->id_perusahaan;
        $sales->supervisor = $request->supervisor;
        $sales->sales = $request->sales;
        $sales->area_rayon = $request->area_rayon;
        $sales->sub_rayon = $request->sub_rayon;

        $sales->save();

        return back()->with('success', 'Sales added successfully');
    }

    public function editSales(Request $request, $id)
    {
        $sales = Sales::find($id);
        $sales->id_perusahaan = Auth::user()->id_perusahaan;
        $sales->supervisor = $request->supervisor;
        $sales->sales = $request->sales;
        $sales->area_rayon = $request->area_rayon;
        $sales->sub_rayon = $request->sub_rayon;

        $sales->save();

        return back()->with('success', 'Sales edit successfully');
    }

    public function deleteSales($id)
    {
        $sales = Sales::find($id);
        $sales->delete();
        return back()->with('success', 'Sales delete successfully');
    }
}
