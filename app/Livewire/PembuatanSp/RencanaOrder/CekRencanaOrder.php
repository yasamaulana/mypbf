<?php

namespace App\Livewire\PembuatanSp\RencanaOrder;

use App\Models\RencanaOrder;
use App\Models\Suplier;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CekRencanaOrder extends Component
{
    public $supliers = [], $search = '';

    public function render()
    {
        return view('livewire.pembuatan-sp.rencana-order.cek-rencana-order');
    }

    public function mount()
    {
        $this->supliers = Suplier::where('id_perusahaan', Auth::user()->id_perusahaan)->get();
    }
}
