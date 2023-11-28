@forelse ($kelompoks as $kelompok)
    @if ($kelompok->diskon($kelompok->id, $loop->iteration)->satuan_dasar_beli != null)
        <div class="col-span-12 intro-y lg:col-span-6 mt-5">
            <div class="intro-y box">
                <div
                    class="flex flex-col items-center p-5 text-white border-b sm:flex-row bg-primary border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="mr-auto text-base font-medium">
                        Harga Jual {{ $kelompok->kelompok }}
                    </h2>
                </div>
                <div class="intro-y box">
                    <div class="flex gap-4 p-5">
                        <div class="col-span-12 intro-y sm:col-span-6">
                            <label for="input-wizard-6" class="form-label">Satuan Jual
                                {{ $loop->iteration }}</label>
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
                                value="{{ $produk->stokAwal ? number_format(str_replace('.', '', $produk->stokAwal->hpp) / $produk->isi, 0, ',', '.') : '' }}">
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex gap-3">
                        <label>Inc PPN</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input inc_ppn" type="checkbox" name="status" value="11">
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
                                <input id="laba1" type="text" name="laba1" oninput="labaPersen()"
                                    class="w-24 form-control form-control-sm laba1" placeholder=""
                                    value="{{ $kelompok->diskon($kelompok->id, $loop->iteration)->persentase }}">
                                <input type="text" id="hasil-laba"
                                    class="w-24 mx-2 hasil-laba form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="disc_1_1" class="form-label">Disc 1</label>
                                <input id="disc_1_1" type="text" name="disc_1_1"
                                    value="{{ $kelompok->diskon($kelompok->id, $loop->iteration)->disc_1 }}"
                                    class="w-24 mx-2 disc_1 form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="disc_2_1" class="form-label">Disc 2</label>
                                <input id="disc_2_1" type="text" name="disc_2_1"
                                    value="{{ $kelompok->diskon($kelompok->id, $loop->iteration)->disc_2 }}"
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
                                <input id="laba2" type="text"name="laba2" oninput="labaPersen2()"
                                    class="w-24 form-control form-control-sm" placeholder=""
                                    value="{{ $kelompok->diskon($kelompok->id, $loop->iteration)->persentase }}">
                                <input id="horizontal-form-1" type="text"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Disc 1</label>
                                <input id="horizontal-form-1" type="text" name="disc_1_2"
                                    value="{{ $kelompok->diskon($kelompok->id, $loop->iteration)->disc_1 }}"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Disc 2</label>
                                <input id="horizontal-form-1" type="text" name="disc_2_2"
                                    value="{{ $kelompok->diskon($kelompok->id, $loop->iteration)->disc_2 }}"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Harga Jual</label>
                                <input id="horizontal-form-1" type="text" name="harga-jual2"
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
                                    value="{{ $kelompok->diskon($kelompok->id, $loop->iteration)->persentase }}">
                                <input id="horizontal-form-1" type="text"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Disc 1</label>
                                <input id="horizontal-form-1" type="text" name="disc_1_3"
                                    value="{{ $kelompok->diskon($kelompok->id, $loop->iteration)->disc_1 }}"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Disc 2</label>
                                <input id="horizontal-form-1" type="text" name="disc_2_3"
                                    value="{{ $kelompok->diskon($kelompok->id, $loop->iteration)->disc_2 }}"
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
                                    value="{{ $kelompok->diskon($kelompok->id, $loop->iteration)->persentase }}">
                                <input id="horizontal-form-1" type="text"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Disc 1</label>
                                <input id="horizontal-form-1" type="text" name="disc_1_4"
                                    value="{{ $kelompok->diskon($kelompok->id, $loop->iteration)->disc_1 }}"
                                    class="w-24 mx-2 form-control form-control-sm" placeholder="">
                            </div>
                            <div class="form-inline">
                                <label for="horizontal-form-1" class="form-label">Disc 2</label>
                                <input id="horizontal-form-1" type="text" name="disc_2_4"
                                    value="{{ $kelompok->diskon($kelompok->id, $loop->iteration)->disc_2 }}"
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
            </div>
        </div>
    @endif
@empty
    <div class="card">
        <div class="font-bold text-center card-body">
            <h2>Belum ada data kelompok tersedia</h2>
        </div>
    </div>
@endforelse
