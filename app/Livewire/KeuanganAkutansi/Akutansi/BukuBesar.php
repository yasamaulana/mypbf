<?php

namespace App\Livewire\KeuanganAkutansi\Akutansi;

use App\Models\AkunAkutansi;
use App\Models\PiutangAwal;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class BukuBesar extends Component
{
    use WithPagination;

    protected $paginateTheme = 'tailwind';

    public $search = '', $perPage = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.keuangan-akutansi.akutansi.buku-besar', [
            'akuns' => AkunAkutansi::where('id_perusahaan', Auth::user()->id_perusahaan)
                ->orderBy('kode', 'asc')
                ->where('nama_akun', 'like', '%' . $this->search . '%')
                ->paginate($this->perPage),

            'piutangDagang' => PiutangAwal::where('jns_piutang', 'Piutang Dagang')
                ->where('id_perusahaan', Auth::user()->id_perusahaan)
                ->get(),
        ]);
    }
}
