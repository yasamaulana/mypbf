<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\PiutangAwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PiutangAwalController extends Controller
{
    public function index()
    {
        return view('pages.set-awal.piutang-awal', [
            'title' => 'setting awal',
            'piutangAwals' => PiutangAwal::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'pelanggans' => Pelanggan::all(),
            'nofakturRand' => strval(rand(1, 99999999999)),
            'totalPiutang' => DB::table('piutang_awal')->get()->sum('jmlh_piutang')
        ]);
    }

    public function edit(Request $request, $id)
    {
        $piutangAwal = PiutangAwal::find($id);
        $request->validate([
            'jns_piutang' => 'required',
            'pelanggan' => 'required'
        ]);
        $request['jmlh_piutang'] = str_replace(".", "", $request->jmlh_piutang);
        $piutangAwal->update($request->all());
        return back()->with('success', 'Piutang Awal Update successfully');
    }

    public function create(Request $request)
    {
        $request->validate([
            'jns_piutang' => 'required',
            'pelanggan' => 'required'
        ]);
        $request->merge(['id_perusahaan' => Auth::user()->id_perusahaan]);
        $request['jmlh_piutang'] = str_replace(".", "", $request->jmlh_piutang);
        PiutangAwal::create($request->all());
        return back()->with('success', 'Piutang Awal added successfully');
    }

    public function destroy($id)
    {
        $piutangAwal = PiutangAwal::find($id);

        $piutangAwal->delete();
        return back()->with('success', 'Piutang Awal deleted successfully');
    }
}
