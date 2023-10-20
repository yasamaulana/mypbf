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
                            @foreach ($stoks as $stok)
                                <option>{{ $stok->no_reff }}</option>
                            @endforeach
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
                </div>
                <div class="flex gap-3 mt-6 justify-center w-full">
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="satuan-dasar" class="form-label">Satuan Dasar</label>
                        <input id="satuan-dasar" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="isi" class="form-label">Isi</label>
                        <input id="isi" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="satuan-jual-terkecil" class="form-label">Satuan Jual Terkecil</label>
                        <input id="satuan-jual-terkecil" type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN: Input -->
    @forelse ($kelompoks as $kelompok)
        <div class="intro-y col-span-12 lg:col-span-6 mt-5">
            <!-- BEGIN: Input -->
            <div class="intro-y box">
                <div class="flex p-5 gap-4">
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-6" class="form-label">Satuan Jual {{ $loop->iteration }}</label>
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
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <div
                    class="flex flex-col sm:flex-row items-center p-5 bg-primary text-white border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Harga Jual {{ $kelompok->kelompok }}
                    </h2>
                </div>
                <div class="p-5">
                    <div class="overflow-auto">
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
                                <input id="horizontal-form-1" type="text"
                                    class="form-control w-24 mx-2 form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Disc 1</label>
                                <input id="horizontal-form-1" type="text"
                                    class="form-control mx-2 w-24 form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Disc 2</label>
                                <input id="horizontal-form-1" type="text"
                                    class="form-control mx-2 w-24 form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Harga Jual</label>
                                <input id="horizontal-form-1" type="text"
                                    class="form-control mx-2 w-24 form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Harga Final</label>
                                <input id="horizontal-form-1" type="text"
                                    class="form-control mx-2 w-24 form-control-sm" placeholder="">
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
                                <input id="horizontal-form-1" type="text"
                                    class="form-control w-24 mx-2 form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Disc 1</label>
                                <input id="horizontal-form-1" type="text"
                                    class="form-control mx-2 w-24 form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Disc 2</label>
                                <input id="horizontal-form-1" type="text"
                                    class="form-control mx-2 w-24 form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Harga Jual</label>
                                <input id="horizontal-form-1" type="text"
                                    class="form-control mx-2 w-24 form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Harga Final</label>
                                <input id="horizontal-form-1" type="text"
                                    class="form-control mx-2 w-24 form-control-sm" placeholder="">
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
                                <input id="horizontal-form-1" type="text"
                                    class="form-control w-24 mx-2 form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Disc 1</label>
                                <input id="horizontal-form-1" type="text"
                                    class="form-control mx-2 w-24 form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Disc 2</label>
                                <input id="horizontal-form-1" type="text"
                                    class="form-control mx-2 w-24 form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Harga Jual</label>
                                <input id="horizontal-form-1" type="text"
                                    class="form-control mx-2 w-24 form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Harga Final</label>
                                <input id="horizontal-form-1" type="text"
                                    class="form-control mx-2 w-24 form-control-sm" placeholder="">
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
                                <input id="horizontal-form-1" type="text"
                                    class="form-control w-24 mx-2 form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Disc 1</label>
                                <input id="horizontal-form-1" type="text"
                                    class="form-control mx-2 w-24 form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Disc 2</label>
                                <input id="horizontal-form-1" type="text"
                                    class="form-control mx-2 w-24 form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Harga Jual</label>
                                <input id="horizontal-form-1" type="text"
                                    class="form-control mx-2 w-24 form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Harga Final</label>
                                <input id="horizontal-form-1" type="text"
                                    class="form-control mx-2 w-24 form-control-sm" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="flex flex-col sm:flex-row items-center p-5 border border-slate-200/60 dark:border-darkmode-400">
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
    @empty
        <div class="card">
            <div class="card-body text-center font-bold">
                <h2>Belum ada data kelompok tersedia</h2>
            </div>
        </div>
    @endforelse
    <div class="flex justify-center mt-5 gap-2">
        <button class="btn btn-primary px-6">Simpan</button>
        <button class="btn btn-danger">Batal</button>
    </div>
@endsection
