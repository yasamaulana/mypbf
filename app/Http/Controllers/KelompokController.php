<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelompokController extends Controller
{
    public function index()
    {
        return view('pages.master.customer.kelompok', [
            'title' => 'master',
            'kelompoks' => Kelompok::where('id_perusahaan', Auth::user()->id_perusahaan)->get()
        ]);
    }

    public function tambahKelompok(Request $request)
    {
        $jumlahKelompok = count(Kelompok::where('id_perusahaan', Auth::user()->id_perusahaan)->get());

        if ($jumlahKelompok < 5) {
            $kelompok = new Kelompok();
            $kelompok->id_perusahaan = Auth::user()->id_perusahaan;
            $kelompok->kelompok = $request->kelompok;

            $kelompok->save();

            return back()->with('success', 'Kelompok added successfully');
        } else {
            return back()->with('error', 'Maaf, maksimal hanya boleh menambahkan 5 kelompok');
        }
    }


    public function editKelompok(Request $request, $id)
    {
        $kelompok = Kelompok::find($id);
        $kelompok->kelompok = $request->kelompok;

        $kelompok->save();

        return back()->with('success', 'Kelompok edit successfully');
    }

    public function deleteKelompok($id)
    {
        $kelompok = Kelompok::find($id);
        $kelompok->delete();

        return back()->with('success', 'Kelompok delete successfully');
    }
}
