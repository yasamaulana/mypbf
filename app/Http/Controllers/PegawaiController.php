<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PegawaiController extends Controller
{
    public function index()
    {
        return view('pages.perusahaan.pegawai.nama-pegawai', [
            'title' => "perusahaan",
            'pegawais' => Pegawai::where('id_perusahaan', Auth::user()->id_perusahaan)->get()
        ]);
    }

    public function createPegawai(Request $request)
    {
        $pegawai = new Pegawai();
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->id_perusahaan = Auth::user()->id_perusahaan;
        $pegawai->no_bpjs_tk = $request->no_bpjs_tk;
        $pegawai->alamat = $request->alamat;
        $pegawai->nip = $request->nip;
        $pegawai->no_telepon = $request->no_telepon;
        $pegawai->tgl_lahir = $request->tgl_lahir;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->marketing = $request->marketing == null ? 'off' : 'on';
        $pegawai->kolektor = $request->kolektor == null ? 'off' : 'on';
        $pegawai->status = $request->status == null ? 'off' : 'on';

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $unique = uniqid() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/foto', $unique);
            $pegawai->foto = $unique;
        }

        $pegawai->save();

        return back()->with('success', 'Pegawai added successfully');
    }

    public function editPegawai(Request $request, $id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->id_perusahaan = Auth::user()->id_perusahaan;
        $pegawai->no_bpjs_tk = $request->no_bpjs_tk;
        $pegawai->alamat = $request->alamat;
        $pegawai->nip = $request->nip;
        $pegawai->no_telepon = $request->no_telepon;
        $pegawai->tgl_lahir = $request->tgl_lahir;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->marketing = $request->marketing == null ? 'off' : 'on';
        $pegawai->kolektor = $request->kolektor == null ? 'off' : 'on';
        $pegawai->status = $request->status == null ? 'off' : 'on';

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $unique = uniqid() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/foto', $unique);
            $pegawai->foto = $unique;
            $path = 'foto/' . $pegawai->foto;
            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
        }

        $pegawai->save();

        return back()->with('success', 'Pegawai edit successfully');
    }

    public function deletePegawai($id)
    {
        $pegawai = Pegawai::find($id);

        if (!$pegawai) {
            return back()->with('error', 'Pegawai not found');
        }

        if ($pegawai->foto) {
            $path = 'foto/' . $pegawai->foto;

            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
        }

        $pegawai->delete();

        return back()->with('success', 'Pegawai deleted successfully');
    }
}
