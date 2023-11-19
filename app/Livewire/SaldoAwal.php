<?php

namespace App\Livewire;

use App\Models\AkunAkutansi;
use App\Models\TempSaldoAwal;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SaldoAwal extends Component
{
    public $id_perusahaan;
    public $id_akun;
    public $saldo;
    public $tipe_saldo;
    public function store()
    {
        $rules = [
            'id_akun' => 'required',
            'saldo' => 'required',
            'tipe_saldo' => 'required'
        ];

        $validated = $this->validate($rules);
        TempSaldoAwal::create($validated);

        return back()->with('success', 'success added');
    }

    public function render()
    {
        $oneKodePasifa = '1-';
        $firstKodePasifa = '2-';
        $firstKodePasifaTwo = '3-';
        $akunAkuntansi = AkunAkutansi::where(function ($q) use ($firstKodePasifa, $firstKodePasifaTwo, $oneKodePasifa) {
            $q->where('kode', 'like', $firstKodePasifa . '%')->orWhere('kode', 'like', $firstKodePasifaTwo . '%')
                ->orWhere('kode', 'like', $oneKodePasifa . '%');
            $q->where('id_perusahaan', Auth::user()->id_perusahaan);
        })->get();
        return view('livewire.saldo-awal', [
            'akunAkuntansi' => $akunAkuntansi
        ]);
    }
}
