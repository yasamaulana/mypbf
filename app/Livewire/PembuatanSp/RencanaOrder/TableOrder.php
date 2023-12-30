<?php

namespace App\Livewire\PembuatanSp\RencanaOrder;

use App\Models\RencanaOrder;
use Livewire\Component;

class TableOrder extends Component
{
    public $sup, $loadingItemId;

    protected $listeners = ['refresh' => 'render'];

    public function render()
    {
        return view('livewire.pembuatan-sp.rencana-order.table-order');
    }

    public function deleteProduk($id)
    {
        $this->loadingItemId = $id;
        $order = RencanaOrder::find($id);
        if ($order) {
            $order->delete();
        }
        $this->dispatch('refresh');
        session()->flash('success', 'Data berhasil dihapus!');
    }
}
