<?php

namespace App\Http\Controllers;

use App\Models\AreaRayon;
use App\Models\Pegawai;
use App\Models\TargetSPV;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TargetSPVController extends Controller
{
    public function index()
    {
        return view('pages.perusahaan.marketing.target-spv', [
            'title' => "perusahaan",
            'pegawais' => Pegawai::where('id_perusahaan', Auth::user()->id_perusahaan)->where('marketing', 'on')->get(),
            'rayons' => AreaRayon::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'targets' => TargetSPV::where('id_perusahaan', Auth::user()->id_perusahaan)->get()
        ]);
    }

    public function tambahTargetSpv(Request $request)
    {
        $target = new TargetSPV();
        $target->id_perusahaan = Auth::user()->id_perusahaan;
        $target->supervisor = $request->supervisor;
        $target->area_rayon = $request->area_rayon;
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

    public function editTargetSpv(Request $request, $id)
    {
        $target = TargetSPV::find($id);
        $target->id_perusahaan = Auth::user()->id_perusahaan;
        $target->supervisor = $request->supervisor;
        $target->area_rayon = $request->area_rayon;
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

        return back()->with('success', 'Target edit successfully');
    }

    public function deleteTargetSpv($id)
    {
        $target = TargetSPV::find($id);
        $target->delete();

        return back()->with('success', 'Target delete successfully');
    }
}
