<?php

namespace App\Livewire\PembuatanSp\RencanaOrder;

use App\Models\ObatBarang;
use App\Models\RencanaOrder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ModalTambahProduk extends Component
{
    public $id, $nama_suplier, $produks, $nama_produk, $obatBarangDetail, $keterangan, $jumlah_order, $satuan,
        $isi,
        $satuan_terkecil,
        $stok_tersedia,
        $stok_minimal,
        $golongan,
        $tipe;

    public function render()
    {
        return view('livewire.pembuatan-sp.rencana-order.modal-tambah-produk');
    }

    public function mount()
    {
        $this->produks = ObatBarang::where('id_perusahaan', Auth::user()->id_perusahaan)->get();
        $this->obatBarangDetail = new ObatBarang();
    }

    public function updatedNamaProduk($value)
    {
        if (!is_null($value)) {
            $this->obatBarangDetail = ObatBarang::find($value);
        }
    }

    public function none()
    {
        $this->nama_produk = null;
        $this->jumlah_order = null;
        $this->isi = null;
        $this->keterangan = null;
        $this->satuan = null;
        $this->satuan_terkecil = null;
        $this->stok_tersedia = null;
        $this->stok_minimal = null;
        $this->golongan = null;
        $this->tipe = null;
    }

    public function tambahProduk()
    {
        RencanaOrder::create([
            'id_perusahaan' => Auth::user()->id_perusahaan,
            'id_suplier' => $this->id,
            'id_produk' => $this->nama_produk,
            'jumlah_order' => $this->jumlah_order,
            'keterangan' => $this->keterangan,
        ]);

        $this->none();
        session()->flash('success', 'Data berhasil disimpan!');
        $this->dispatch('refresh');
    }
}
