<?php

namespace App\Http\Controllers;

use App\Models\Pajak;
use App\Models\PPN;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PajakController extends Controller
{
    public function index()
    {
        return view('pages.perusahaan.pajak', [
            'title' => "perusahaan",
            'ppn' => PPN::where('id_perusahaan', Auth::user()->id_perusahaan)->first()
        ]);
    }

    public function updatePajak(Request $request)
    {
        $existingPpn = PPN::where('id_perusahaan', Auth::user()->id_perusahaan)->first();

        if ($existingPpn) {
            $existingPpn->ppn = $request->ppn;
            $existingPpn->save();
        } else {
            $newPpn = new PPN();
            $newPpn->ppn = $request->ppn;
            $newPpn->id_perusahaan = Auth::user()->id_perusahaan;
            $newPpn->save();
        }

        $noSeriPajak = $request->no_seri_pajak;
        $kali = $request->kali;

        // dd($kali);

        $angkaTerakhir = intval(substr($noSeriPajak, -1));

        for ($i = 0; $i < $kali; $i++) {
            $nomorBaru = $noSeriPajak - $angkaTerakhir + $angkaTerakhir + $i;

            $pajak = new Pajak();
            $pajak->pajak = $nomorBaru;
            $pajak->id_perusahaan = Auth::user()->id_perusahaan;
            $pajak->save();
        }

        return back()->with('success', 'Pajak updated successfully');
    }

    public function deletePajak($id)
    {
        $pajak = Pajak::find($id);
        $pajak->delete();

        return back()->with('success', 'Pajak updated successfully');
    }
}