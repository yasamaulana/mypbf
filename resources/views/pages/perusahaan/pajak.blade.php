@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Pajak Perusahaan
        </h2>
    </div>
    <div class="intro-y box mt-5">
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">
                PPN
            </h2>
        </div>
        <div id="vertical-form" class="p-5">
            <div class="preview">
                <div>
                    <label for="vertical-form-1" class="form-label">PPN</label>
                    <input id="vertical-form-1" type="text" class="form-control" placeholder="%">
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y box mt-5">
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">
                Nomor Faktur Seri Pajak
            </h2>
        </div>
        <div id="inline-form" class="p-5">
            <div class="preview">
                <label class="form-label">Nomor Seri Pajak</label>
                <div class="flex">
                    <input id="horizontal-form-1" type="text" class="form-control" placeholder="">
                    <p class="mx-3 mt-2">s/d</p>
                    <input id="horizontal-form-1" type="text" class="form-control" placeholder="">
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary mt-5"> <i data-feather="download" class="w-4 h-4 mr-2"></i>
        Simpan Perubahan </button>
@endsection
