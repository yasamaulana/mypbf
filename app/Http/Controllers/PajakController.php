<?php

namespace App\Http\Controllers;

use App\Models\Pajak;
use App\Models\PPN;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PajakController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:akses pajak']);
        $this->middleware(['permission:tambah pajak'])->only('updatePajak');
        $this->middleware(['permission:edit pajak'])->only('updatePajak');
        $this->middleware(['permission:delete pajak'])->only('deletePajak');
    }
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

        // Pisahkan bagian depan dan belakang
        $parts = explode('.', $noSeriPajak);
        $bagianDepan = $parts[0] . '.' . $parts[1] . '.';
        $bagianBelakang = intval($parts[2]);

        for ($i = 0; $i < $kali; $i++) {
            // Tambahkan nomor pada bagian belakang
            $bagianBelakangBaru = $bagianBelakang + $i;

            // Gabungkan kembali dengan bagian depan
            $nomorBaru = $bagianDepan . $bagianBelakangBaru;

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
