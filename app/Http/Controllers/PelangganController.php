<?php

namespace App\Http\Controllers;

use App\Models\AreaRayon;
use App\Models\Kelompok;
use App\Models\Pegawai;
use App\Models\Pelanggan;
use App\Models\SubRayon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PelangganController extends Controller
{
    public function index()
    {
        return view('pages.master.customer.pelanggan', [
            'title' => 'master',
            'pegawais' => Pegawai::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'kelompoks' => Kelompok::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'pelanggans' => Pelanggan::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'rayons' => AreaRayon::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'sub_rayons' => SubRayon::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
        ]);
    }

    public function tambahPelanggan(Request $request)
    {
        $request->merge(['id_perusahaan' => Auth::user()->id_perusahaan]);
        $request->merge(['date_status_sipa' => $request->has('date_status_sipa') ? 1 : 0]);
        $request->merge(['date_status_sia' => $request->has('date_status_sia') ? 1 : 0]);

        Pelanggan::create($request->all());

        return back()->with('success', 'Pelanggan add successfully');
    }

    public function editPelanggan(Request $request, $id)
    {
        $pelanggan = Pelanggan::find($id);
        $request->merge(['date_status_sipa' => $request->has('date_status_sipa') ? 1 : 0]);
        $request->merge(['date_status_sia' => $request->has('date_status_sia') ? 1 : 0]);

        $pelanggan->update($request->all());

        return back()->with('success', 'Pelanggan edited successfully');
    }

    public function deletePelanggan(Request $request, $id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();

        return back()->with('success', 'Pelanggan deleted successfully');
    }
}
