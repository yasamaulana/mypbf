<?php

namespace App\Http\Controllers;

use App\Models\HutangAwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HutangAwalController extends Controller
{
    public function index()
    {
        return view('pages.set-awal.hutang-awal', [
            'title' => 'setting awal',
            'hutangAwals' => HutangAwal::all(),
            'numberRandom' => strval(rand(1, 99999999999)),
            'totalHutang' => DB::table('hutang_awals')->get()->sum('jmlh_hutang')
        ]);
    }

    public function create(Request $request)
    {

        $hutangAwal = new HutangAwal();
        $hutangAwal->id_perusahaan = Auth::user()->id_perusahaan;
        $hutangAwal->no_reff = $request->no_reff;
        $hutangAwal->no_faktur = $request->no_faktur;
        $hutangAwal->tgl_faktur = $request->tgl_faktur;
        $hutangAwal->supplier = $request->supplier;
        $hutangAwal->tgl_jth_tempo = $request->tgl_jth_tempo;
        $hutangAwal->jmlh_hutang = $request->jmlh_hutang;
        $hutangAwal->jns_hutang = $request->jns_hutang;
        // save
        $hutangAwal->save();
        return back()->with('success', 'Hutang Awal added successfully');
    }

    public function edit(Request $request, $id)
    {
        $hutangAwal = HutangAwal::find($id);
        $hutangAwal->id_perusahaan = Auth::user()->id_perusahaan;
        $hutangAwal->no_reff = $request->no_reff;
        $hutangAwal->no_faktur = $request->no_faktur;
        $hutangAwal->tgl_faktur = $request->tgl_faktur;
        $hutangAwal->supplier = $request->supplier;
        $hutangAwal->tgl_jth_tempo = $request->tgl_jth_tempo;
        $hutangAwal->jmlh_hutang = $request->jmlh_hutang;
        $hutangAwal->jns_hutang = $request->jns_hutang;

        // save
        $hutangAwal->save();
        return back()->with('success', 'Hutang Awal Update successfully');
    }

    public function destroy($id)
    {
        $hutangAwal = HutangAwal::find($id);

        $hutangAwal->delete();
        return back()->with('success', 'Hutang deleted successfully');
    }
}
