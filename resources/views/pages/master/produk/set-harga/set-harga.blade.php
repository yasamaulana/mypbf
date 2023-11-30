@php
    use Livewire\Features\SupportFormObjects\Form;
@endphp
@extends('layout.main')

@section('main')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            Setting Harga Jual {{ $stok->produk->nama_obat_barang }}
        </h2>
    </div>
    @include('pages.master.produk.set-harga.keterangan')

    @forelse ($setHarga as $set)
        {{-- jika data harga sudah di set --}}
        @include('pages.master.produk.set-harga.data-set-harga')
    @empty
        {{-- jika data harga belum di set --}}
        @include('pages.master.produk.set-harga.data-set-kelompok')
    @endforelse

    {{-- button save --}}
    <div class="flex justify-center gap-2 mt-5">
        <button type="submit" class="px-6 btn btn-primary">Simpan</button>
        <button class="btn btn-danger">Batal</button>
    </div>
    @include('pages.master.produk.set-harga.javasctript')
@endsection
