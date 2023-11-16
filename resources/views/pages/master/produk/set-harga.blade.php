@php
    use Livewire\Features\SupportFormObjects\Form;
@endphp
@extends('layout.main')

@section('main')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            Setting Harga Jual {{ $produk->nama_obat_barang }}
        </h2>
    </div>
    <div class="col-span-12 mt-5 intro-y lg:col-span-6">
        <!-- BEGIN: Input -->
        <div class="intro-y box">
            <div class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400">
                <h2 class="mr-auto text-base font-medium">
                    Setting Harga Jual
                </h2>
            </div>
            <div class="p-5">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 intro-y sm:col-span-6">
                        <label for="input-wizard-6" class="form-label">Stok Awal</label>
                        <input id="input-wizard-3" type="text" class="form-control" placeholder="" readonly
                            value="{{ $stok ? $stok->produk->kode_obat_barang . ' | ' . $stok->gudang . ' | ' . $stok->rak . ' | ' . $stok->sub_rak : '' }}">
                    </div>
                    <div class="col-span-12 intro-y sm:col-span-6">
                        <label for="input-wizard-3" class="form-label">HPP</label>
                        <input id="input-wizard-3" type="text" class="form-control" readonly placeholder=""
                            value="{{ $produk->stokAwal ? $produk->stokAwal->hpp : '' }}">
                    </div>
                    <div class="col-span-12 intro-y sm:col-span-6">
                        <label for="input-wizard-6" class="form-label">Pembelian</label>
                        <input id="input-wizard-3" type="text" class="form-control" readonly placeholder=""
                            value="Dari Pembelian" readonly>
                    </div>
                    <div class="col-span-12 intro-y sm:col-span-6">
                        <label for="input-wizard-3" class="form-label">HPP Final</label>
                        <input id="input-wizard-3" type="text" class="form-control" placeholder="" readonly
                            value="{{ $produk->stokAwal ? $produk->stokAwal->hpp / $produk->isi : '' }}">
                    </div>
                </div>
                <div class="flex justify-center w-full gap-3 mt-6">
                    <div class="col-span-12 intro-y sm:col-span-6">
                        <label for="satuan-dasar" class="form-label">Satuan Dasar</label>
                        <input id="satuan-dasar" type="text" class="form-control" readonly placeholder=""
                            value="{{ $produk->satuan_dasar_beli }}">
                    </div>
                    <div class="col-span-12 intro-y sm:col-span-6">
                        <label for="isi" class="form-label">Isi</label>
                        <input id="isi" type="text" class="form-control" readonly placeholder=""
                            value="{{ $produk->isi }}">
                    </div>
                    <div class="col-span-12 intro-y sm:col-span-6">
                        <label for="satuan-jual-terkecil" class="form-label">Satuan Jual Terkecil</label>
                        <input id="satuan-jual-terkecil" type="text" class="form-control" readonly placeholder=""
                            value="{{ $produk->satuan_jual_terkecil }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN: Input -->
    @forelse ($setHarga as $set)
        <div class="col-span-12 mt-5 intro-y lg:col-span-6">
            <!-- BEGIN: Input -->
            <div class="intro-y box">
                <div class="flex gap-4 p-5">
                    <div class="col-span-12 intro-y sm:col-span-6">
                        <label for="input-wizard-6" class="form-label">Satuan Jual {{ $loop->iteration }}</label>
                        <input id="input-wizard-3" type="text" class="form-control" placeholder=""
                            value="{{ $produk->satuan_dasar_beli }}" placeholder="Untuk satuan" readonly>
                    </div>
                    <div class="col-span-12 intro-y sm:col-span-6">
                        <label for="input-wizard-3" class="form-label">Isi</label>
                        <input id="input-wizard-3" type="text" class="form-control" readonly placeholder=""
                            value="{{ $produk->isi }}">
                    </div>
                    <div class="col-span-12 intro-y ">
                        <label for="input-wizard-3" class="form-label">HPP Final</label>
                        <input id="input-wizard-3" type="text" class="form-control" readonly placeholder=""
                            value="{{ $produk->stokAwal ? $produk->stokAwal->hpp / $produk->isi : '' }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 intro-y lg:col-span-6">
            <div class="intro-y box">
                <div
                    class="flex flex-col items-center p-5 text-white border-b sm:flex-row bg-primary border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="mr-auto text-base font-medium">
                        Harga Jual {{ $setHarga->kelompok($set->id_kelompok)->kelompok }}
                    </h2>
                </div>
                <div class="p-5">
                    <div class="flex gap-3">
                        <label>Inc PPN</label>
                        <div class="form-check form-switch">
                            <input id="checkbox-switch-7" class="form-check-input" type="checkbox"
                                name="inc_ppn{{ $loop->iteration }}">
                        </div>
                    </div>
                    <div class="overflow-auto">
                        <div class="flex mt-5">
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Jumlah 1</label>
                                <input id="horizontal-form-1" type="text" class="w-24 form-control form-control-sm"
                                    placeholder="">
                            </div>
                            <div class="mx-2 form-inline">
                                <label for="horizontal-form-1" class="form-label form-">Sampai</label>
                                <input id="horizontal-form-1" type="text" class="w-24 form-control form-control-sm"
                                    placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Laba %</label>
                                <input id="horizontal-form-1" type="text" class="w-24 form-control form-control-sm"
                                    placeholder="" value="{{ $kelompok->diskon($kelompok->id)->persentase }}">
                                <input id="horizontal-form-1" type="text"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Disc 1</label>
                                <input id="horizontal-form-1" type="text"
                                    value="{{ $kelompok->diskon($kelompok->id)->disc_1 }}"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Disc 2</label>
                                <input id="horizontal-form-1" type="text"
                                    value="{{ $kelompok->diskon($kelompok->id)->disc_2 }}"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Harga Jual</label>
                                <input id="horizontal-form-1" type="text"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Harga Final</label>
                                <input id="horizontal-form-1" type="text"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                        </div>
                        <div class="flex mt-5">
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Jumlah 2</label>
                                <input id="horizontal-form-1" type="text" class="w-24 form-control form-control-sm"
                                    placeholder="">
                            </div>
                            <div class="mx-2 form-inline">
                                <label for="horizontal-form-1" class="form-label form-">Sampai</label>
                                <input id="horizontal-form-1" type="text" class="w-24 form-control form-control-sm"
                                    placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Laba %</label>
                                <input id="horizontal-form-1" type="text" class="w-24 form-control form-control-sm"
                                    placeholder="" value="{{ $kelompok->diskon($kelompok->id)->persentase }}">
                                <input id="horizontal-form-1" type="text"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Disc 1</label>
                                <input id="horizontal-form-1" type="text"
                                    value="{{ $kelompok->diskon($kelompok->id)->disc_1 }}"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Disc 2</label>
                                <input id="horizontal-form-1" type="text"
                                    value="{{ $kelompok->diskon($kelompok->id)->disc_2 }}"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Harga Jual</label>
                                <input id="horizontal-form-1" type="text"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Harga Final</label>
                                <input id="horizontal-form-1" type="text"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                        </div>
                        <div class="flex mt-5">
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Jumlah 3</label>
                                <input id="horizontal-form-1" type="text" class="w-24 form-control form-control-sm"
                                    placeholder="">
                            </div>
                            <div class="mx-2 form-inline">
                                <label for="horizontal-form-1" class="form-label form-">Sampai</label>
                                <input id="horizontal-form-1" type="text" class="w-24 form-control form-control-sm"
                                    placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Laba %</label>
                                <input id="horizontal-form-1" type="text" class="w-24 form-control form-control-sm"
                                    placeholder="" value="{{ $kelompok->diskon($kelompok->id)->persentase }}">
                                <input id="horizontal-form-1" type="text"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Disc 1</label>
                                <input id="horizontal-form-1" type="text"
                                    value="{{ $kelompok->diskon($kelompok->id)->disc_1 }}"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Disc 2</label>
                                <input id="horizontal-form-1" type="text"
                                    value="{{ $kelompok->diskon($kelompok->id)->disc_2 }}"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Harga Jual</label>
                                <input id="horizontal-form-1" type="text"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Harga Final</label>
                                <input id="horizontal-form-1" type="text"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                        </div>
                        <div class="flex mt-5">
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Jumlah 4</label>
                                <input id="horizontal-form-1" type="text" class="w-24 form-control form-control-sm"
                                    placeholder="">
                            </div>
                            <div class="mx-2 form-inline">
                                <label for="horizontal-form-1" class="form-label form-">Sampai</label>
                                <input id="horizontal-form-1" type="text" class="w-24 form-control form-control-sm"
                                    placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Laba %</label>
                                <input id="horizontal-form-1" type="text" class="w-24 form-control form-control-sm"
                                    placeholder="" value="{{ $kelompok->diskon($kelompok->id)->persentase }}">
                                <input id="horizontal-form-1" type="text"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Disc 1</label>
                                <input id="horizontal-form-1" type="text"
                                    value="{{ $kelompok->diskon($kelompok->id)->disc_1 }}"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Disc 2</label>
                                <input id="horizontal-form-1" type="text"
                                    value="{{ $kelompok->diskon($kelompok->id)->disc_2 }}"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Harga Jual</label>
                                <input id="horizontal-form-1" type="text"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Harga Final</label>
                                <input id="horizontal-form-1" type="text"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="flex flex-col items-center p-5 border sm:flex-row border-slate-200/60 dark:border-darkmode-400">
                    <div class="form-inline">
                        <label for="horizontal-form-3" class="form-label">Satuan Harga Jual</label>
                        <select class="w-48 form-select" aria-label="Default select example">
                            @foreach ($satuans as $satuan)
                                <option>{{ $satuan->satuan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="mx-4 form-label">Isi</label>
                        <input id="horizontal-form-1" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="form-inline">
                        <label for="horizontal-form-1" class="mx-4 form-label">HPP Final</label>
                        <input id="horizontal-form-1" type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
        </div>
    @empty
        @forelse ($kelompoks as $kelompok)
            <input type="hidden" name="id_produk" value="{{ $produk->id }}">
            <div class="col-span-12 mt-5 intro-y lg:col-span-6">
                <!-- BEGIN: Input -->
                <div class="intro-y box">
                    <div class="flex gap-4 p-5">
                        <div class="col-span-12 intro-y sm:col-span-6">
                            <label for="input-wizard-6" class="form-label">Satuan Jual {{ $loop->iteration }}</label>
                            <input id="input-wizard-3" type="text" class="form-control" placeholder=""
                                value="{{ $produk->satuan_dasar_beli }}" placeholder="Untuk satuan" readonly>
                        </div>
                        <div class="col-span-12 intro-y sm:col-span-6">
                            <label for="input-wizard-3" class="form-label">Isi</label>
                            <div class="flex gap-2">
                                <input id="input-wizard-3" type="text" class="form-control" readonly placeholder=""
                                    value="{{ $produk->isi }}">
                                <p class="mt-2 font-bold text-primary">{{ $produk->satuan_jual_terkecil }}</p>
                            </div>
                        </div>
                        <div class="col-span-12 intro-y ">
                            <label for="input-wizard-3" class="form-label">HPP Final</label>
                            <input id="hpp_final" type="text" class="form-control" readonly placeholder=""
                                value="{{ $produk->stokAwal ? $produk->stokAwal->hpp / $produk->isi : '' }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 intro-y lg:col-span-6">
                <div class="intro-y box">
                    <div
                        class="flex flex-col items-center p-5 text-white border-b sm:flex-row bg-primary border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="mr-auto text-base font-medium">
                            Harga Jual {{ $kelompok->kelompok }}
                        </h2>
                    </div>
                    <div class="p-5">
                        <div class="flex gap-3">
                            <label>Inc PPN</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input inc_ppn" type="checkbox" name="status">
                            </div>
                        </div>
                        <div class="overflow-auto">
                            <div class="flex mt-5">
                                <div class="form-inline">
                                    <label for="jumlah1" class="form-label">Jumlah 1</label>
                                    <input id="jumlah1" type="text" name="jumlah1"
                                        class="w-24 form-control form-control-sm" placeholder="">
                                </div>
                                <div class="mx-2 form-inline">
                                    <label for="sampai1" class="form-label form-">Sampai</label>
                                    <input id="sampai1" type="text" name="sampai1"
                                        class="w-24 form-control form-control-sm" placeholder="">
                                </div>
                                <div class="form-inline">
                                    <label for="laba1" class="form-label">Laba %</label>
                                    <input id="laba1" type="text" name="laba1"
                                        class="w-24 form-control form-control-sm laba1" placeholder=""
                                        value="{{ $kelompok->diskon($kelompok->id)->persentase }}">
                                    <input type="text" id="hasil-laba"
                                        class="w-24 mx-2 hasil-laba form-control form-control-sm" placeholder="">
                                </div>
                                <div class="form-inline">
                                    <label for="disc_1_1" class="form-label">Disc 1</label>
                                    <input id="disc_1_1" type="text" name="disc_1_1"
                                        value="{{ $kelompok->diskon($kelompok->id)->disc_1 }}"
                                        class="w-24 mx-2 disc_1 form-control form-control-sm" placeholder="">
                                </div>
                                <div class="form-inline">
                                    <label for="disc_2_1" class="form-label">Disc 2</label>
                                    <input id="disc_2_1" type="text" name="disc_2_1"
                                        value="{{ $kelompok->diskon($kelompok->id)->disc_2 }}"
                                        class="w-24 mx-2 disc_2 form-control form-control-sm" placeholder="">
                                </div>
                                <div class="form-inline">
                                    <label for="harga-jual" class="form-label">Harga Jual</label>
                                    <input id="harga-jual" type="text"
                                        class="w-24 mx-2 harga-jual form-control form-control-sm" placeholder="">
                                </div>
                                <div class="form-inline">
                                    <label for="harga_final1" class="form-label">Harga Final</label>
                                    <input id="harga_final1" type="text" name="harga_final1"
                                        class="w-24 mx-2 harga-final1 form-control form-control-sm" placeholder="">
                                </div>
                            </div>

                            <div class="flex mt-5">
                                <div class="form-inline">
                                    <label for="horizontal-form-1" class="form-label">Jumlah 1</label>
                                    <input id="horizontal-form-1" type="text" name="jumlah2"
                                        class="w-24 form-control form-control-sm" placeholder="">
                                </div>
                                <div class="mx-2 form-inline">
                                    <label for="horizontal-form-1" class="form-label form-">Sampai</label>
                                    <input id="horizontal-form-1" type="text" name="sampai2"
                                        class="w-24 form-control form-control-sm" placeholder="">
                                </div>
                                <div class="form-inline">
                                    <label for="horizontal-form-1" class="form-label">Laba %</label>
                                    <input id="horizontal-form-1" type="text"name="laba2"
                                        class="w-24 form-control form-control-sm" placeholder=""
                                        value="{{ $kelompok->diskon($kelompok->id)->persentase }}">
                                    <input id="horizontal-form-1" type="text"
                                        class="w-24 mx-2 form-control form-control-sm" placeholder="">
                                </div>
                                <div class="form-inline">
                                    <label for="horizontal-form-1" class="form-label">Disc 1</label>
                                    <input id="horizontal-form-1" type="text" name="disc_1_2"
                                        value="{{ $kelompok->diskon($kelompok->id)->disc_1 }}"
                                        class="w-24 mx-2 form-control form-control-sm" placeholder="">
                                </div>
                                <div class="form-inline">
                                    <label for="horizontal-form-1" class="form-label">Disc 2</label>
                                    <input id="horizontal-form-1" type="text" name="disc_2_2"
                                        value="{{ $kelompok->diskon($kelompok->id)->disc_2 }}"
                                        class="w-24 mx-2 form-control form-control-sm" placeholder="">
                                </div>
                                <div class="form-inline">
                                    <label for="horizontal-form-1" class="form-label">Harga Jual</label>
                                    <input id="horizontal-form-1" type="text"
                                        class="w-24 mx-2 form-control form-control-sm" placeholder="">
                                </div>
                                <div class="form-inline">
                                    <label for="horizontal-form-1" class="form-label">Harga Final</label>
                                    <input id="horizontal-form-1" type="text" name="harga_final2"
                                        class="w-24 mx-2 form-control form-control-sm" placeholder="">
                                </div>
                            </div>
                            <div class="flex mt-5">
                                <div class="form-inline">
                                    <label for="horizontal-form-1" class="form-label">Jumlah 1</label>
                                    <input id="horizontal-form-1" type="text" name="jumlah3"
                                        class="w-24 form-control form-control-sm" placeholder="">
                                </div>
                                <div class="mx-2 form-inline">
                                    <label for="horizontal-form-1" class="form-label form-">Sampai</label>
                                    <input id="horizontal-form-1" type="text" name="sampai3"
                                        class="w-24 form-control form-control-sm" placeholder="">
                                </div>
                                <div class="form-inline">
                                    <label for="horizontal-form-1" class="form-label">Laba %</label>
                                    <input id="horizontal-form-1" type="text"name="laba3"
                                        class="w-24 form-control form-control-sm" placeholder=""
                                        value="{{ $kelompok->diskon($kelompok->id)->persentase }}">
                                    <input id="horizontal-form-1" type="text"
                                        class="w-24 mx-2 form-control form-control-sm" placeholder="">
                                </div>
                                <div class="form-inline">
                                    <label for="horizontal-form-1" class="form-label">Disc 1</label>
                                    <input id="horizontal-form-1" type="text" name="disc_1_3"
                                        value="{{ $kelompok->diskon($kelompok->id)->disc_1 }}"
                                        class="w-24 mx-2 form-control form-control-sm" placeholder="">
                                </div>
                                <div class="form-inline">
                                    <label for="horizontal-form-1" class="form-label">Disc 2</label>
                                    <input id="horizontal-form-1" type="text" name="disc_2_3"
                                        value="{{ $kelompok->diskon($kelompok->id)->disc_2 }}"
                                        class="w-24 mx-2 form-control form-control-sm" placeholder="">
                                </div>
                                <div class="form-inline">
                                    <label for="horizontal-form-1" class="form-label">Harga Jual</label>
                                    <input id="horizontal-form-1" type="text"
                                        class="w-24 mx-2 form-control form-control-sm" placeholder="">
                                </div>
                                <div class="form-inline">
                                    <label for="horizontal-form-1" class="form-label">Harga Final</label>
                                    <input id="horizontal-form-1" type="text" name="harga_final3"
                                        class="w-24 mx-2 form-control form-control-sm" placeholder="">
                                </div>
                            </div>
                            <div class="flex mt-5">
                                <div class="form-inline">
                                    <label for="horizontal-form-1" class="form-label">Jumlah 1</label>
                                    <input id="horizontal-form-1" type="text" name="jumlah4"
                                        class="w-24 form-control form-control-sm" placeholder="">
                                </div>
                                <div class="mx-2 form-inline">
                                    <label for="horizontal-form-1" class="form-label form-">Sampai</label>
                                    <input id="horizontal-form-1" type="text" name="sampai4"
                                        class="w-24 form-control form-control-sm" placeholder="">
                                </div>
                                <div class="form-inline">
                                    <label for="horizontal-form-1" class="form-label">Laba %</label>
                                    <input id="horizontal-form-1" type="text"name="laba4"
                                        class="w-24 form-control form-control-sm" placeholder=""
                                        value="{{ $kelompok->diskon($kelompok->id)->persentase }}">
                                    <input id="horizontal-form-1" type="text"
                                        class="w-24 mx-2 form-control form-control-sm" placeholder="">
                                </div>
                                <div class="form-inline">
                                    <label for="horizontal-form-1" class="form-label">Disc 1</label>
                                    <input id="horizontal-form-1" type="text" name="disc_1_4"
                                        value="{{ $kelompok->diskon($kelompok->id)->disc_1 }}"
                                        class="w-24 mx-2 form-control form-control-sm" placeholder="">
                                </div>
                                <div class="form-inline">
                                    <label for="horizontal-form-1" class="form-label">Disc 2</label>
                                    <input id="horizontal-form-1" type="text" name="disc_2_4"
                                        value="{{ $kelompok->diskon($kelompok->id)->disc_2 }}"
                                        class="w-24 mx-2 form-control form-control-sm" placeholder="">
                                </div>
                                <div class="form-inline">
                                    <label for="horizontal-form-1" class="form-label">Harga Jual</label>
                                    <input id="horizontal-form-1" type="text"
                                        class="w-24 mx-2 form-control form-control-sm" placeholder="">
                                </div>
                                <div class="form-inline">
                                    <label for="horizontal-form-1" class="form-label">Harga Final</label>
                                    <input id="horizontal-form-1" type="text" name="harga_final4"
                                        class="w-24 mx-2 form-control form-control-sm" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-center p-5 border sm:flex-row border-slate-200/60 dark:border-darkmode-400">
                        <div class="form-inline">
                            <label for="horizontal-form-3" class="form-label">Satuan Harga Jual</label>
                            <select class="w-48 form-select" aria-label="Default select example">
                                @foreach ($satuans as $satuan)
                                    <option>{{ $satuan->satuan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-inline">
                            <label for="horizontal-form-1" class="mx-4 form-label">Isi</label>
                            <input id="horizontal-form-1" type="text" class="form-control" placeholder="" required>
                            <p class="mt-2 ml-2 font-bold text-primary">{{ $produk->satuan_jual_terkecil }}</p>
                        </div>
                        <div class="form-inline">
                            <label for="horizontal-form-1" class="mx-4 form-label">HPP Final</label>
                            <input id="horizontal-form-1" type="text" class="form-control" placeholder="" required>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        @empty
            <div class="card">
                <div class="font-bold text-center card-body">
                    <h2>Belum ada data kelompok tersedia</h2>
                </div>
            </div>
        @endforelse
    @endforelse
    <div class="flex justify-center gap-2 mt-5">
        <button type="submit" class="px-6 btn btn-primary">Simpan</button>
        <button class="btn btn-danger">Batal</button>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var getPPN = {{ $ppn ? $ppn->ppn : '' }};
            var ppn = 1 + (getPPN / 100);

            // Mengambil elemen input dan checkbox
            var incPpnCheckbox = document.querySelector(".inc_ppn");
            var jumlah1Input = document.querySelector(".jumlah1");
            var sampai1Input = document.querySelector(".sampai1");
            var laba1Input = document.querySelector(".laba1");
            var hasilLabaInput = document.querySelector(".hasil-laba");
            var disc1Input = document.querySelector(".disc_1_1");
            var disc2Input = document.querySelector(".disc_2_1");
            var hargaJualInput = document.querySelector(".harga-jual");
            var hargaFinal1Input = document.querySelector(".harga-final1");

            // Fungsi untuk menghitung harga jual dan harga final
            function hitungHarga() {
                var hppFinal = parseFloat(hppFinalElement.value);
                var laba1Percent = parseFloat(laba1Input.value) / 100;
                var disc1Percent = parseFloat(disc1Input.value) / 100;
                var disc2Percent = parseFloat(disc2Input.value) / 100;

                var hargaJual = hppFinal * (1 + laba1Percent);
                var hargaFinal = hargaJual * (1 - disc1Percent) * (1 - disc2Percent);

                hargaJualInput.value = hargaFinal;

                if (incPpnCheckbox.checked) {
                    hargaFinal *= ppn;
                }

                // Menampilkan hasil pada elemen input "harga-jual" dan "harga-final1"
                hargaJualInput.value = hargaJual;
                hargaFinal1Input.value = hargaFinal;
            }

            // Menambahkan event listener pada elemen input yang relevan
            laba1Input.addEventListener("input", function() {
                hitungHarga();
            });

            disc1Input.addEventListener("input", function() {
                hitungHarga();
            });

            disc2Input.addEventListener("input", function() {
                hitungHarga();
            });

            incPpnCheckbox.addEventListener("change", function() {
                hitungHarga();
            });

            // Inisialisasi perhitungan saat halaman dimuat
            hitungHarga();
        });
    </script>
@endsection
