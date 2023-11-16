@extends('layout.main')

@section('main')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            Data Buku Besar
        </h2>
    </div>

    <livewire:keuangan-akutansi.akutansi.buku-besar />
@endsection
