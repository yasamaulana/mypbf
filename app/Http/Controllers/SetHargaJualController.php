<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use App\Models\ObatBarang;
use App\Models\PPN;
use App\Models\Satuan;
use App\Models\SetHarga;
use App\Models\StokAwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SetHargaJualController extends Controller
{
    public function index($id)
    {
        return view('pages.master.produk.set-harga.set-harga', [
            'title' => 'master',
            'stok' => StokAwal::where('id', $id)->first(),
            'kelompoks' => (new Kelompok())->getByIdPerusahaan(),
            'satuans' => (new Satuan())->getByIdPerusahaan(),
            'ppn' => PPN::where('id_perusahaan', Auth::user()->id_perusahaan)->first(),
            'id' => $id,
        ]);
    }

    public function createHarga(Request $request)
    {
        $sets = $request->input('sets');
        foreach ($sets as $set) {
            SetHarga::create([
                'id_perusahaan' => Auth::user()->id_perusahaan,
                'id_set_harga' => $set['id_set_harga'],
                'sumber' => $set['sumber'],
                'id_kelompok' => $set['id_kelompok'],
                'id_set' => $set['id_set'],
                'id_jumlah' => $set['id_jumlah'],
                'jumlah' => $set['jumlah'],
                'sampai' => $set['sampai'],
                'laba' => $set['laba'],
                'hasil_laba' => $set['hasil_laba'],
                'disc_1' => $set['disc_1'],
                'disc_2' => $set['disc_2'],
                'harga_jual' => $set['harga_jual'],
            ]);
        }

        return back()->with('success', 'Set Harga updated successfully');
    }

    public function updateHarga(Request $request)
    {
        $sets = $request->input('sets');
        foreach ($sets as $set) {
            $setId = $set['id'];
            if ($setId) {
                SetHarga::where('id', $setId)->update([
                    'jumlah' => $set['jumlah'],
                    'sampai' => $set['sampai'],
                    'laba' => $set['laba'],
                    'hasil_laba' => $set['hasil_laba'],
                    'disc_1' => $set['disc_1'],
                    'disc_2' => $set['disc_2'],
                    'harga_jual' => $set['harga_jual'],
                ]);
            }
        }

        return back()->with('success', 'Set Harga updated successfully');
    }
}
