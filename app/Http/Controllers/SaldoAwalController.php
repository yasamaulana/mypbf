<?php

namespace App\Http\Controllers;

use App\Models\AkunAkutansi;
use App\Models\HutangAwal;
use App\Models\PiutangAwal;
use App\Models\StokAwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaldoAwalController extends Controller
{
    public function index()
    {
        // DB::enableQueryLog();
        $firstKode = "1-";
        $akunAktiva = AkunAkutansi::where(function ($query) use ($firstKode) {
            $query->where('kode', 'like', $firstKode . '%');
            $query->where('id_perusahaan', Auth::user()->id_perusahaan);
        })->get();
        // dd(DB::getQueryLog());

        $firstKodePasifa = '2-';
        $firstKodePasifaTwo = '3-';
        $akunPasifa = AkunAkutansi::where(function ($q) use ($firstKodePasifa, $firstKodePasifaTwo) {
            $q->where('kode', 'like', $firstKodePasifa . '%')->orWhere('kode', 'like', $firstKodePasifaTwo . '%');
            $q->where('id_perusahaan', Auth::user()->id_perusahaan);
        })->get();

        // pasiva
        $totalHutangs = [];
        $hutangTypes = ['Hutang Dagang', 'Hutang Konsinyasi'];
        foreach ($hutangTypes as $hutangType) {
            $totalHutangs[$hutangType] = HutangAwal::where('jns_hutang', $hutangType)
                ->where('id_perusahaan', Auth::user()->id_perusahaan)
                ->sum('jmlh_hutang');
        }
        $totalHutangDagang = $totalHutangs['Hutang Dagang'];
        $totalHutangKonsinyasi = $totalHutangs['Hutang Konsinyasi'];


        // aktiva
        $totalHutangPiutangs = [];
        $hutangTypePiutangs = ['Piutang Dagang', 'Piutang Konsinyasi'];
        foreach ($hutangTypePiutangs as $hutangTypePiutang) {
            $totalHutangPiutangs[$hutangTypePiutang] = PiutangAwal::where('jns_piutang', $hutangTypePiutang)
                ->where('id_perusahaan', Auth::user()->id_perusahaan)
                ->sum('jmlh_piutang');
        }
        $totalDagangPiutang = $totalHutangPiutangs['Piutang Dagang'];
        $totalgKonsinyasiPiutang = $totalHutangPiutangs['Piutang Konsinyasi'];


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
        $modal = 0 - $totalHutangDagang - $totalHutangKonsinyasi + $totalDagangPiutang + $totalgKonsinyasiPiutang + $totalStokAwal;
        return view('pages.set-awal.saldo-awal.saldo-awal', [
            'title' => 'setting awal',
            'akunAktiva' => $akunAktiva,
            'akunPasifa' => $akunPasifa,
            'totalHutangDagang' => $totalHutangDagang,
            'totalHutangKonsinyasi' => $totalHutangKonsinyasi,
            'totalDagangPiutang' => $totalDagangPiutang,
            'totalKonsinyasiPiutang' => $totalgKonsinyasiPiutang,
            'persediaanDagang' => $totalStokAwal,
            'modal' => $modal,
        ]);
    }
}
