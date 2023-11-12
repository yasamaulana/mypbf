<?php

namespace App\Http\Controllers;

use App\Models\AreaRayon;
use App\Models\Pegawai;
use App\Models\SubRayon;
use App\Models\TargetSales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TargetSalesController extends Controller
{
    public function index()
    {
        return view('pages.perusahaan.marketing.target-sales', [
            'title' => "perusahaan",
            'pegawais' => Pegawai::where('id_perusahaan', Auth::user()->id_perusahaan)->where('marketing', 'on')->get(),
            'rayons' => AreaRayon::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'sub_rayon' => SubRayon::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'targets' => TargetSales::where('id_perusahaan', Auth::user()->id_perusahaan)->get()
        ]);
    }

    public function tambahTargetSales(Request $request)
    {
        $target = new TargetSales();
        $target->id_perusahaan = Auth::user()->id_perusahaan;
        $target->sales = $request->sales;
        $target->supervisor = $request->supervisor;
        $target->area_rayon = $request->area_rayon;
        $target->sub_rayon = $request->sub_rayon;
        $target->tahun = $request->tahun;
        $target->target_januari = $request->target_januari;
        $target->target_februari = $request->target_februari;
        $target->target_maret = $request->target_maret;
        $target->target_april = $request->target_april;
        $target->target_mei = $request->target_mei;
        $target->target_juni = $request->target_juni;
        $target->target_juli = $request->target_juli;
        $target->target_agustus = $request->target_agustus;
        $target->target_september = $request->target_september;
        $target->target_oktober = $request->target_oktober;
        $target->target_november = $request->target_november;
        $target->target_desember = $request->target_desember;

        $target->save();

        return back()->with('success', 'Target added successfully');
    }

    public function editTargetSales(Request $request, $id)
    {
        $target = TargetSales::find($id);
        $target->id_perusahaan = Auth::user()->id_perusahaan;
        $target->sales = $request->sales;
        $target->supervisor = $request->supervisor;
        $target->area_rayon = $request->area_rayon;
        $target->sub_rayon = $request->sub_rayon;
        $target->tahun = $request->tahun;
        $target->target_januari = $request->target_januari;
        $target->target_februari = $request->target_februari;
        $target->target_maret = $request->target_maret;
        $target->target_april = $request->target_april;
        $target->target_mei = $request->target_mei;
        $target->target_juni = $request->target_juni;
        $target->target_juli = $request->target_juli;
        $target->target_agustus = $request->target_agustus;
        $target->target_september = $request->target_september;
        $target->target_oktober = $request->target_oktober;
        $target->target_november = $request->target_november;
        $target->target_desember = $request->target_desember;

        $target->save();

        return back()->with('success', 'Target added successfully');
    }

    public function deleteTargetSales($id)
    {
        $target = TargetSales::find($id);
        $target->delete();

        return back()->with('success', 'Target delete successfully');
    }
}
