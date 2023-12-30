<?php

namespace App\Livewire\PembuatanSp;

use App\Models\NoSPPembelian;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SetNoSp extends Component
{
    public $nomor1, $nomor2, $nomor3, $nomor4, $nomor5;

    public function render()
    {
        return view('livewire.pembuatan-sp.set-no-sp');
    }

    public function mount()
    {
        $records = NoSPPembelian::where('id_perusahaan', Auth::user()->id_perusahaan)->get();

        $this->nomor1 = isset($records[0]) ? $this->extractNomorSurat($records[0]->nomor_surat) : '';
        $this->nomor2 = isset($records[1]) ? $this->extractNomorSurat($records[1]->nomor_surat) : '';
        $this->nomor3 = isset($records[2]) ? $this->extractNomorSurat($records[2]->nomor_surat) : '';
        $this->nomor4 = isset($records[3]) ? $this->extractNomorSurat($records[3]->nomor_surat) : '';
        $this->nomor5 = isset($records[4]) ? $this->extractNomorSurat($records[4]->nomor_surat) : '';
    }

    private function extractNomorSurat($nomorSurat)
    {
        $parts = explode(' - ', $nomorSurat);
        return $parts[0];
    }

    public function simpanNomorSurat()
    {
        $nomors = [
            $this->nomor1 . ' - REG/'.date('m-y'),
            $this->nomor2 . ' - OOT/'.date('m-y'),
            $this->nomor3 . ' - Prek/'.date('m-y'),
            $this->nomor4 . ' - Psiko/'.date('m-y'),
            $this->nomor5 . ' - Narko/'.date('m-y'),
        ];

        NoSPPembelian::where('id_perusahaan', Auth::user()->id_perusahaan)->delete();

        foreach ($nomors as $nomor) {
            NoSPPembelian::create([
                'id_perusahaan' => Auth::user()->id_perusahaan,
                'nomor_surat' => $nomor,
            ]);
        }

        session()->flash('success', 'Data berhasil disimpan!');
    }
}