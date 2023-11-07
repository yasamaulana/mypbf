<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use App\Models\JenisObatBarang;
use App\Models\Mutasi;
use App\Models\ObatBarang;
use App\Models\Rak;
use App\Models\StokAwal;
use App\Models\SubRak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MutasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.persediaan.mutasi-stok.mutasi', [
            'title' => 'persediaan',
            'stoks' => StokAwal::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'barangs' => ObatBarang::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'gudangs' => Gudang::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'raks' => Rak::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'sub_rak' => SubRak::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'jenis_obat' => JenisObatBarang::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            
        ]);
    }

    public function tambahmutasi(Request $request)
    {
        $request->merge(['id_perusahaan' => Auth::user()->id_perusahaan]);
        Mutasi::create($request->all());

        return back()->with('success', 'Mutasi added successfully');

    //     $validateData = $request->validate([
    
    // ]);
   
    //     // User::create($validateData);
    //     Mutasi::create($validateData);
    //     return back()->with('success', 'Mutasi added successfully');   
 }

    public function datamutasi()
    {
        return view('pages.persediaan.mutasi-stok.tambah-mutasi', [
            'title' => 'persediaan',
            'stoks' => StokAwal::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'barangs' => ObatBarang::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'gudangs' => Gudang::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'raks' => Rak::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'sub_rak' => SubRak::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
            'jenis_obat' => JenisObatBarang::where('id_perusahaan', Auth::user()->id_perusahaan)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
