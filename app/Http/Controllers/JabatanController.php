<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JabatanController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:akses jabatan']);
        $this->middleware(['permission:tambah jabatan'])->only('createJabatan');
        $this->middleware(['permission:edit jabatan'])->only('editJabatan');
        $this->middleware(['permission:delete jabatan'])->only('deleteJabatan');
    }

    public function index()
    {
        return view('pages.perusahaan.pegawai.jabatan', [
            'title' => "perusahaan",
            'jabatans' => Jabatan::where('id_perusahaan', Auth::user()->id_perusahaan)->get()
        ]);
    }

    public function createJabatan(Request $request)
    {
        $jabatan = new Jabatan();
        $jabatan->jabatan = $request->jabatan;
        $jabatan->id_perusahaan = Auth::user()->id_perusahaan;

        $jabatan->save();

        return back()->with('success', 'Jabatan updated successfully');
    }

    public function editJabatan(Request $request, $id)
    {
        $jabatan = Jabatan::find($id);
        $jabatan->jabatan = $request->jabatan;
        $jabatan->save();

        return back()->with('success', 'Jabatan updated successfully');
    }

    public function deleteJabatan($id)
    {
        $jabatan = Jabatan::find($id);
        $jabatan->delete();

        return back()->with('success', 'Jabatan updated successfully');
    }
}
