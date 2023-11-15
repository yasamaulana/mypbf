<?php

namespace App\Http\Controllers;

use App\Models\AkunAkutansi;
use App\Models\HutangAwal;
use App\Models\PiutangAwal;
use App\Models\StokAwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NeracaController extends Controller
{
    public function index()
    {
        // stok Awal
        $stockAwal  = StokAwal::where('id_perusahaan', Auth::user()->id_perusahaan)->get();
        $isi = [];
        $hpp = [];
        foreach ($stockAwal as $value) {
            $isi[$value->produk->id] = $value->produk->isi;
            $hpp[$value->produk->id] = $value->hpp;
        }
        $result = [];

        foreach ($isi as $key1 => $value1) {
            if (isset($hpp[$key1])) {
                $result[$key1] = $value1 * $hpp[$key1];
            }
        }
        $totalStokAwal = array_sum($result);

        $totalPiutangDagang = PiutangAwal::where('jns_piutang', 'Piutang Dagang')->sum('jmlh_piutang');
        $totalPiutangKonsinyasi = PiutangAwal::where('jns_piutang', 'Piutang Konsinyasi')->sum('jmlh_piutang');

        $totalHutangDagang =  HutangAwal::where('jns_hutang', 'Hutang Dagang')->sum('jmlh_hutang');
        $totalHutangKonsinyasi = HutangAwal::where('jns_hutang', 'Hutang Konsinyasi')->sum('jmlh_hutang');

        //modal
        $modal = 0 - $totalHutangDagang - $totalHutangKonsinyasi + $totalPiutangDagang + $totalPiutangKonsinyasi + $totalStokAwal;

        return view('pages.keuangan-akuntansi.akuntansi.neraca', [
            'title' => 'keuangan & akuntansi',
            'akunAktiva' => AkunAkutansi::where('jenis_akun', 'Aktiva')->where('id_perusahaan', Auth::user()->id_perusahaan)->orderBy('kode', 'asc')->get(),
            'totalPiutangDagang' => $totalPiutangDagang,
            'totalPiutangKonsinyasi' => $totalPiutangKonsinyasi,
            'PersediaanDagang' => $totalStokAwal,

            //untuk pasiva
            'akunPasiva' => AkunAkutansi::where('jenis_akun', 'Kewajiban')
                ->orWhere('jenis_akun', 'Modal')
                ->where('id_perusahaan', Auth::user()->id_perusahaan)->orderBy('kode', 'asc')
                ->get(),
            'totalHutangDagang' => $totalHutangDagang,
            'totalHutangKonsinyasi' => $totalHutangKonsinyasi,
            'modal' => $modal,
        ]);
    }
}
