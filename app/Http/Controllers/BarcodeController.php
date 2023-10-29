<?php

namespace App\Http\Controllers;

use App\Models\ObatBarang;
use App\Models\Pelanggan;
use Picqer\Barcode\BarcodeGeneratorPNG;

class BarcodeController extends Controller
{
    public function indexProduk()
    {
        return view('pages.master.barcode.barcode-produk', [
            'title' => 'master',
            'produks' => (new ObatBarang())->getByIdPerusahaan(),
        ]);
    }

    public function indexPelanggan()
    {
        return view('pages.master.barcode.barcode-pelanggan', [
            'title' => 'master',
            'pelanggans' => (new Pelanggan())->getByIdPerusahaan(),
        ]);
    }

    public function download($data)
    {
        $generatorPNG = new BarcodeGeneratorPNG();
        $barcodePNG = $generatorPNG->getBarcode($data, $generatorPNG::TYPE_CODE_128);

        $pngPath = public_path('barcode.png');
        file_put_contents($pngPath, $barcodePNG);

        return response()->download($pngPath, 'barcode.png');
    }
}
