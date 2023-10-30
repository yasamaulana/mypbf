<?php

namespace App\Http\Controllers;

use App\Models\HutangAwal;
use App\Models\Suplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HutangAwalController extends Controller
{
    public function index()
    {
        return view('pages.set-awal.hutang-awal', [
            'title' => 'setting awal',
            'hutangAwals' => HutangAwal::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'suppliers' => Suplier::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'numberRandom' => strval(rand(1, 99999999999)),
            'totalHutang' => DB::table('hutang_awals')->get()->sum('jmlh_hutang')
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'jns_hutang' => 'required',
            'supplier' => 'required'
        ]);
        
        $request->merge(['id_perusahaan' => Auth::user()->id_perusahaan]);
        $request['jmlh_hutang'] = str_replace(".", "", $request->jmlh_hutang);
        HutangAwal::create($request->all());
        return back()->with('success', 'Hutang Awal added successfully');
    }

    public function edit(Request $request, $id)
    {
        $hutangAwal = HutangAwal::find($id);
        $request['jmlh_hutang'] = str_replace(".", "", $request->jmlh_hutang);
        $hutangAwal->update($request->all());
        return back()->with('success', 'Hutang Awal Update successfully');
    }

    public function destroy($id)
    {
        $hutangAwal = HutangAwal::find($id);

        $hutangAwal->delete();
        return back()->with('success', 'Hutang deleted successfully');
    }
}
