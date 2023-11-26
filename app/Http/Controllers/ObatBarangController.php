<?php

namespace App\Http\Controllers;

use App\Models\DaftarObat;
use App\Models\DiskonKelompok;
use App\Models\Golongan;
use App\Models\JenisObatBarang;
use App\Models\Kelompok;
use App\Models\ObatBarang;
use App\Models\Produsen;
use App\Models\Satuan;
use App\Models\SubGolongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ObatBarangController extends Controller
{
    public function index()
    {
        return view('pages.master.produk.obat-barang', [
            'title' => 'master',
            'daftar_obat' => DaftarObat::all(),
            'obat_barang' => ObatBarang::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'satuans' => Satuan::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'golongans' => Golongan::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'sub_golongans' => SubGolongan::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'jenis_obat' => JenisObatBarang::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'produsens' => Produsen::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'kelompoks' => Kelompok::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
        ]);
    }

    public function tambahObat(Request $request)
    {
        // dd($request->all());
        $request->merge(['id_perusahaan' => Auth::user()->id_perusahaan]);
        $request->merge(['exp_date' => $request->has('exp_date') ? 1 : 0]);
        $request->merge(['status' => $request->has('status') ? 1 : 0]);

        $obatBarang = ObatBarang::create($request->all());

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $unique = uniqid() . '.' . $gambar->getClientOriginalExtension();
            $gambar->storeAs('public/obat-barang', $unique);

            $obatBarang->gambar = $unique;
            $obatBarang->save();
        }

        $kelompoks = $request->input('kelompoks');

        foreach ($kelompoks as $kelompok) {
            DiskonKelompok::create([
                'id_obat_barang' => $obatBarang['id'],
                'id_kelompok' => $kelompok['id_kelompok'],
                'id_set_harga' => $kelompok['id_set_harga'] ?? 1,
                'satuan_dasar_beli' => $kelompok['satuan_dasar_beli'],
                'persentase' => $kelompok['persentase'] ?? 0,
                'disc_1' => $kelompok['disc_1'] ?? 0,
                'disc_2' => $kelompok['disc_2'] ?? 0,
            ]);
        }
        return redirect()->route('obat-barang')->with('success', 'Produk added successfully');
    }

    public function editObat(Request $request, $id)
    {
        // dd($request->all());

        $obatBarang = ObatBarang::find($id);
        $request->merge(['exp_date' => $request->has('exp_date') ? 1 : 0]);
        $request->merge(['status' => $request->has('status') ? 1 : 0]);

        if (!$obatBarang) {
            return back()->with('error', 'Produk not found');
        }

        // Update the existing record with the new data
        $obatBarang->update($request->all());

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $unique = uniqid() . '.' . $gambar->getClientOriginalExtension();
            $gambar->storeAs('public/obat-barang', $unique);

            $obatBarang->gambar = $unique;
            $obatBarang->save();
        }

        // Delete existing DiskonKelompok records for the given obat_barang
        DiskonKelompok::where('id_obat_barang', $id)->delete();

        // Insert updated Kelompok records
        $kelompoks = $request->input('kelompoks');

        foreach ($kelompoks as $kelompok) {
            DiskonKelompok::create([
                'id_obat_barang' => $obatBarang['id'],
                'id_kelompok' => $kelompok['id_kelompok'],
                'id_set_harga' => $kelompok['id_set_harga'] ?? 1,
                'satuan_dasar_beli' => $kelompok['satuan_dasar_beli'],
                'persentase' => $kelompok['persentase'] ?? 0,
                'disc_1' => $kelompok['disc_1'] ?? 0,
                'disc_2' => $kelompok['disc_2'] ?? 0,
            ]);
        }
        return redirect()->route('obat-barang')->with('success', 'Produk updated successfully');
    }


    public function deleteObat($id)
    {
        $barang = ObatBarang::find($id);

        if (!$barang) {
            return back()->with('error', 'Produk not found');
        }

        if ($barang->gambar) {
            $path = 'obat-barang/' . $barang->gambar;

            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
        }

        if ($barang->stokAwal) {
            $barang->stokAwal->delete();
        }

        DiskonKelompok::where('id_obat_barang', $id)->delete();

        $barang->delete();

        return back()->with('success', 'Produk berhasil dihapus');
    }


    public function ProdukEReport()
    {
        return view('pages.master.produk.cari-produk', [
            'title' => 'master',
            'produks' => [],
            'allProduk' => DaftarObat::paginate(20)
        ]);
    }
    public function cariProdukEReport(Request $request)
    {
        return view('pages.master.produk.cari-produk', [
            'title' => 'master',
            'produks' => DaftarObat::where('nama_obat', 'like', "%" . $request->cari . "%")->paginate(20)
        ]);
    }
}
