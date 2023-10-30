<?php

namespace App\Http\Controllers;

use App\Models\AkunAkutansi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AkunAkutansiController extends Controller
{
    public function index()
    {
        return view('pages.master.akuntansi.akun-akuntansi', [
            'title' => 'master',
            'akuns' => AkunAkutansi::where('id_perusahaan', Auth::user()->id_perusahaan)->get()
        ]);
    }

    public function tambahAkun(Request $request)
    {
        $request->merge(['id_perusahaan' => Auth::user()->id_perusahaan]);
        $request->merge(['kas_bank' => $request->has('kas_bank') ? 1 : 0]);
        AkunAkutansi::create($request->all());

        return back()->with('success', 'Akun Akutansi added successfully');
    }

    public function editAkun(Request $request, $id)
    {
        $akun = AkunAkutansi::find($id);
        $request->merge(['kas_bank' => $request->has('kas_bank') ? 1 : 0]);
        $akun->update($request->all());

        return back()->with('success', 'Akun Akutansi edit successfully');
    }

    public function deleteAkun($id)
    {
        $akun = AkunAkutansi::find($id);
        $akun->delete();

        return back()->with('success', 'Akun Akutansi delete successfully');
    }
}
