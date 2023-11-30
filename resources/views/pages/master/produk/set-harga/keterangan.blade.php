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
                        value="{{ $stok ? $stok->no_reff . ' | ' . $stok->no_batch . ' | ' . $stok->gudang . ' | ' . $stok->rak . ' | ' . $stok->sub_rak : '' }}">
                </div>
                <div class="col-span-12 intro-y sm:col-span-6">
                    <label for="input-wizard-3" class="form-label">HPP</label>
                    <input id="hpp" type="text" class="form-control" readonly placeholder=""
                        value="{{ $stok ? $stok->hpp : '' }}">
                </div>
                <div class="col-span-12 intro-y sm:col-span-6">
                    <label for="input-wizard-6" class="form-label">Pembelian</label>
                    <input id="input-wizard-3" type="text" class="form-control" readonly placeholder=""
                        value="Dari Pembelian" readonly>
                </div>
                <div class="col-span-12 intro-y sm:col-span-6">
                    <label for="input-wizard-3" class="form-label">HPP Final</label>
                    <input id="input-wizard-3" type="text" class="form-control" placeholder="" readonly
                        value="{{ $stok ? number_format(str_replace('.', '', $stok->hpp) / $stok->produk->isi, 0, ',', '.') : '' }}">
                </div>
            </div>
            <div class="flex justify-center w-full gap-3 mt-6">
                <div class="col-span-12 intro-y sm:col-span-6">
                    <label for="satuan-dasar" class="form-label">Satuan Dasar</label>
                    <input id="satuan-dasar" type="text" class="form-control" readonly placeholder=""
                        value="{{ $stok->produk->satuan_dasar_beli }}">
                </div>
                <div class="col-span-12 intro-y sm:col-span-6">
                    <label for="isi" class="form-label">Isi</label>
                    <input id="isi" type="text" class="form-control" readonly placeholder=""
                        value="{{ $stok->produk->isi }}">
                </div>
                <div class="col-span-12 intro-y sm:col-span-6">
                    <label for="satuan-jual-terkecil" class="form-label">Satuan Jual Terkecil</label>
                    <input id="satuan-jual-terkecil" type="text" class="form-control" readonly placeholder=""
                        value="{{ $stok->produk->satuan_jual_terkecil }}">
                </div>
            </div>
        </div>
    </div>
</div>
