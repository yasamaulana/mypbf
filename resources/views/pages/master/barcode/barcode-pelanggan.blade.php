@php
    use Picqer\Barcode\BarcodeGeneratorHTML;
    $generator = new BarcodeGeneratorHTML();
@endphp
@extends('layout.main')

@section('main')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            Barcode Pelanggan Generator
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        @include('components.search', [
            'id_table' => 'myTable',
        ])
    </div>
    <!-- BEGIN: Data List -->
    <div class="col-span-12 mt-5 overflow-auto intro-y lg:overflow-visible">
        <table class="table -mt-2 table-report" id="myTable">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">No</th>
                    <th class="whitespace-nowrap">Kode</th>
                    <th class="whitespace-nowrap">Nama Pelanggan</th>
                    <th class="whitespace-nowrap">Barcode</th>
                    <th class="whitespace-nowrap">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pelanggans as $pelanggan)
                    <tr class="intro-x">
                        <td class="w-40">{{ $loop->iteration }}</td>
                        <td class="">{{ $pelanggan->kode }}</td>
                        <td class="">{{ $pelanggan->nama }}</td>
                        <td class="">
                            {!! $generator->getBarcode($pelanggan->kode, $generator::TYPE_CODE_128) !!}</td>
                        <td class="w-56 table-report__action">
                            <a class="flex items-center text-warning"
                                href="{{ route('download.barcode', ['data' => $pelanggan->kode]) }}">
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
