@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Setting Harga Jual
        </h2>
    </div>
    <div class="intro-y col-span-12 lg:col-span-6 mt-5">
        <!-- BEGIN: Input -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Setting Harga Jual
                </h2>
            </div>
            <div class="p-5">
                <div class="grid grid-cols-12 gap-4">
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-6" class="form-label">Stok Awal</label>
                        <select id="input-wizard-6" class="form-select">
                            <option>10</option>
                            <option>25</option>
                            <option>35</option>
                            <option>50</option>
                        </select>
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-3" class="form-label">HPP</label>
                        <input id="input-wizard-3" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-6" class="form-label">Pembelian</label>
                        <select id="input-wizard-6" class="form-select">
                            <option>10</option>
                            <option>25</option>
                            <option>35</option>
                            <option>50</option>
                        </select>
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-3" class="form-label">HPP Final</label>
                        <input id="input-wizard-3" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-3" class="form-label">Satuan Dasar</label>
                        <input id="input-wizard-3" type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-span-12 lg:col-span-6 mt-5">
        <!-- BEGIN: Input -->
        <div class="intro-y box">
            <div class="flex p-5 gap-4">
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-6" class="form-label">Satuan Jual 1</label>
                    <select id="input-wizard-6" class="form-select">
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                    </select>
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-3" class="form-label">Isi</label>
                    <input id="input-wizard-3" type="text" class="form-control" placeholder="">
                </div>
                <div class="intro-y col-span-12 ">
                    <label for="input-wizard-3" class="form-label">HPP Final</label>
                    <input id="input-wizard-3" type="text" class="form-control" placeholder="">
                </div>
            </div>
        </div>
    </div>

    <div class="intro-y col-span-12 lg:col-span-6 mt-5">
        <!-- BEGIN: Input -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Harga Jual Kelompok 1
                </h2>
            </div>
            <div class="p-5">
                <div class="mt-2">
                    <div class="form-check form-switch">
                        <label class="form-check-label" for="checkbox-switch-7">Inc PPN</label>
                        <input id="checkbox-switch-7" class="form-check-input mx-3" type="checkbox">
                    </div>
                </div>
                <div class="flex mt-5">
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="form-label">Jumlah 1</label>
                        <input id="horizontal-form-1" type="text" class="form-control w-24 form-control-sm"
                            placeholder="">
                    </div>
                    <div class=" mx-2 form-inline">
                        <label for="horizontal-form-1" class="form-label form-">Sampai</label>
                        <input id="horizontal-form-1" type="text" class="form-control w-24 form-control-sm"
                            placeholder="">
                    </div>
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="form-label">Laba %</label>
                        <input id="horizontal-form-1" type="text" class="form-control w-24 form-control-sm"
                            placeholder="">
                        <input id="horizontal-form-1" type="text" class="form-control w-24 mx-2 form-control-sm"
                            placeholder="">
                    </div>
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="form-label">Disc 1</label>
                        <input id="horizontal-form-1" type="text" class="form-control mx-2 w-24 form-control-sm"
                            placeholder="">
                    </div>
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="form-label">Disc 2</label>
                        <input id="horizontal-form-1" type="text" class="form-control mx-2 w-24 form-control-sm"
                            placeholder="">
                    </div>
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="form-label">Harga Jual</label>
                        <input id="horizontal-form-1" type="text" class="form-control mx-2 w-24 form-control-sm"
                            placeholder="">
                    </div>
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="form-label">Harga Final</label>
                        <input id="horizontal-form-1" type="text" class="form-control mx-2 w-24 form-control-sm"
                            placeholder="">
                    </div>
                </div>
                <div class="flex mt-5">
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="form-label">Jumlah 2</label>
                        <input id="horizontal-form-1" type="text" class="form-control w-24 form-control-sm"
                            placeholder="">
                    </div>
                    <div class=" mx-2 form-inline">
                        <label for="horizontal-form-1" class="form-label form-">Sampai</label>
                        <input id="horizontal-form-1" type="text" class="form-control w-24 form-control-sm"
                            placeholder="">
                    </div>
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="form-label">Laba %</label>
                        <input id="horizontal-form-1" type="text" class="form-control w-24 form-control-sm"
                            placeholder="">
                        <input id="horizontal-form-1" type="text" class="form-control w-24 mx-2 form-control-sm"
                            placeholder="">
                    </div>
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="form-label">Disc 1</label>
                        <input id="horizontal-form-1" type="text" class="form-control mx-2 w-24 form-control-sm"
                            placeholder="">
                    </div>
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="form-label">Disc 2</label>
                        <input id="horizontal-form-1" type="text" class="form-control mx-2 w-24 form-control-sm"
                            placeholder="">
                    </div>
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="form-label">Harga Jual</label>
                        <input id="horizontal-form-1" type="text" class="form-control mx-2 w-24 form-control-sm"
                            placeholder="">
                    </div>
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="form-label">Harga Final</label>
                        <input id="horizontal-form-1" type="text" class="form-control mx-2 w-24 form-control-sm"
                            placeholder="">
                    </div>
                </div>
                <div class="flex mt-5">
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="form-label">Jumlah 3</label>
                        <input id="horizontal-form-1" type="text" class="form-control w-24 form-control-sm"
                            placeholder="">
                    </div>
                    <div class=" mx-2 form-inline">
                        <label for="horizontal-form-1" class="form-label form-">Sampai</label>
                        <input id="horizontal-form-1" type="text" class="form-control w-24 form-control-sm"
                            placeholder="">
                    </div>
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="form-label">Laba %</label>
                        <input id="horizontal-form-1" type="text" class="form-control w-24 form-control-sm"
                            placeholder="">
                        <input id="horizontal-form-1" type="text" class="form-control w-24 mx-2 form-control-sm"
                            placeholder="">
                    </div>
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="form-label">Disc 1</label>
                        <input id="horizontal-form-1" type="text" class="form-control mx-2 w-24 form-control-sm"
                            placeholder="">
                    </div>
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="form-label">Disc 2</label>
                        <input id="horizontal-form-1" type="text" class="form-control mx-2 w-24 form-control-sm"
                            placeholder="">
                    </div>
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="form-label">Harga Jual</label>
                        <input id="horizontal-form-1" type="text" class="form-control mx-2 w-24 form-control-sm"
                            placeholder="">
                    </div>
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="form-label">Harga Final</label>
                        <input id="horizontal-form-1" type="text" class="form-control mx-2 w-24 form-control-sm"
                            placeholder="">
                    </div>
                </div>
                <div class="flex mt-5">
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="form-label">Jumlah 4</label>
                        <input id="horizontal-form-1" type="text" class="form-control w-24 form-control-sm"
                            placeholder="">
                    </div>
                    <div class=" mx-2 form-inline">
                        <label for="horizontal-form-1" class="form-label form-">Sampai</label>
                        <input id="horizontal-form-1" type="text" class="form-control w-24 form-control-sm"
                            placeholder="">
                    </div>
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="form-label">Laba %</label>
                        <input id="horizontal-form-1" type="text" class="form-control w-24 form-control-sm"
                            placeholder="">
                        <input id="horizontal-form-1" type="text" class="form-control w-24 mx-2 form-control-sm"
                            placeholder="">
                    </div>
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="form-label">Disc 1</label>
                        <input id="horizontal-form-1" type="text" class="form-control mx-2 w-24 form-control-sm"
                            placeholder="">
                    </div>
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="form-label">Disc 2</label>
                        <input id="horizontal-form-1" type="text" class="form-control mx-2 w-24 form-control-sm"
                            placeholder="">
                    </div>
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="form-label">Harga Jual</label>
                        <input id="horizontal-form-1" type="text" class="form-control mx-2 w-24 form-control-sm"
                            placeholder="">
                    </div>
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="form-label">Harga Final</label>
                        <input id="horizontal-form-1" type="text" class="form-control mx-2 w-24 form-control-sm"
                            placeholder="">
                    </div>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-center p-5 border border-slate-200/60 dark:border-darkmode-400">
                <div class="form-inline">
                    <label for="horizontal-form-3" class="form-label">Satuan Harga Jual</label>
                    <select class="form-select w-48" aria-label="Default select example">
                        <option>123</option>
                        <option>123</option>
                        <option>123</option>
                    </select>
                </div>
                <div class="form-inline">
                    <label for="horizontal-form-1" class="form-label mx-4">Isi</label>
                    <input id="horizontal-form-1" type="text" class="form-control" placeholder="">
                </div>
                <div class="form-inline">
                    <label for="horizontal-form-1" class="form-label mx-4">HPP Final</label>
                    <input id="horizontal-form-1" type="text" class="form-control" placeholder="">
                </div>
            </div>
        </div>
    </div>
@endsection
