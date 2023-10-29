@php
    use Picqer\Barcode\BarcodeGeneratorHTML;
    $generator = new BarcodeGeneratorHTML();
@endphp
@extends('layout.main')

@section('main')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            Barcode Produk Generator
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="flex flex-wrap items-center col-span-12 mt-2 intro-y sm:flex-nowrap">
            <div class="relative w-56 text-slate-500 ">
                <input type="text" class="w-56 pr-10 form-control box" placeholder="Cari produk...">
                <i class="absolute inset-y-0 right-0 w-4 h-4 my-auto mr-3" data-feather="search"></i>
            </div>
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="col-span-12 mt-5 overflow-auto intro-y lg:overflow-visible">
        <table class="table -mt-2 table-report">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">No</th>
                    <th class="whitespace-nowrap">Kode</th>
                    <th class="whitespace-nowrap">Nama Produk</th>
                    <th class="whitespace-nowrap">Barcode</th>
                    <th class="whitespace-nowrap">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($produks as $produk)
                    <tr class="intro-x">
                        <td class="w-40">{{ $loop->iteration }}</td>
                        <td class="">{{ $produk->kode_obat_barang }}</td>
                        <td class="">{{ $produk->nama_obat_barang }}</td>
                        <td class="">
                            {!! $generator->getBarcode($produk->kode_obat_barang, $generator::TYPE_CODE_128) !!}</td>
                        <td class="w-56 table-report__action">
                            <a class="flex items-center text-warning"
                                href="{{ route('download.barcode', ['data' => $produk->kode_obat_barang]) }}">
                                <i data-feather="corner-right-down" class="w-4 h-4 mr-1"></i> Download
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr class="intro-x">
                        <td colspan="5" class="font-bold text-center">Data belum tersedia</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <!-- END: Data List -->
    </div>
@endsection
