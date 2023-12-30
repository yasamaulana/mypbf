<div class="modal-content">
    <form wire:submit.prevent="tambahProduk">
        <div class="flex justify-center text-lg font-bold text-white modal-header bg-primary align-center">
            Tambah Produk Ke {{ $nama_suplier }}
        </div>
        <div class="p-5 modal-body">
            <div data-tw-merge class="items-center block mt-3 sm:flex">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                    Nama Produk
                </label>
                <select data-tw-merge aria-label="Default select example" name="id_obat_barang" required
                    wire:model.live="nama_produk" class="form-control tom-select">
                    <option value="">- Pilih -</option>
                    @foreach ($produks as $produk)
                        <option value="{{ $produk->id }}">
                            {{ $produk->nama_obat_barang }}</option>
                    @endforeach
                </select>
            </div>
            <input type="hidden" wire:model='id' value="{{ $id }}">
            <div data-tw-merge class="flex items-center mt-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 sm:w-32">
                    Satuan Beli
                </label>
                <input type="text" class="form-control" disabled
                    value="{{ $obatBarangDetail ? $obatBarangDetail->satuan_dasar_beli : '' }}">
            </div>
            <div data-tw-merge class="flex items-center mt-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 sm:w-32">
                    Isi
                </label>
                <input type="text" class="form-control" disabled
                    value="{{ $obatBarangDetail ? $obatBarangDetail->isi : '' }}">
            </div>
            <div data-tw-merge class="flex items-center mt-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 sm:w-32">
                    Sat Terkecil
                </label>
                <input type="text" class="form-control" disabled
                    value="{{ $obatBarangDetail ? $obatBarangDetail->satuan_jual_terkecil : '' }}">
            </div>
            <div data-tw-merge class="flex items-center mt-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 sm:w-32">
                    Stok Tersedia
                </label>
                <div class="flex w-full gap-3">
                    <input required type="text" class="form-control " placeholder=""
                        value="{{ $obatBarangDetail ? $obatBarangDetail->stokAwal->jumlah ?? 10 : '' }}" disabled>
                    <p class="mt-2 font-bold">{{ $obatBarangDetail ? $obatBarangDetail->satuan_jual_terkecil : '' }}</p>
                </div>
            </div>
            <div data-tw-merge class="flex items-center mt-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 sm:w-32">
                    Stok Min
                </label>
                <div class="flex w-full gap-3">
                    <input type="text" class="form-control" placeholder="Satuan Terkecil" disabled
                        value="{{ $obatBarangDetail ? $obatBarangDetail->stok_minimal : '' }}">
                    <p class="mt-2 font-bold">{{ $obatBarangDetail ? $obatBarangDetail->satuan_jual_terkecil : '' }}
                    </p>
                </div>
            </div>
            <div data-tw-merge class="flex items-center mt-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 sm:w-32">
                    Golongan
                </label>
                <input type="text" class="form-control" disabled
                    value="{{ $obatBarangDetail ? $obatBarangDetail->golongan : '' }}">
            </div>
            <div data-tw-merge class="flex items-center mt-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 sm:w-32">
                    Tipe
                </label>
                <input type="text" class="form-control" disabled
                    value="{{ $obatBarangDetail ? $obatBarangDetail->tipe : '' }}">
            </div>
            <div data-tw-merge class="flex items-center mt-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 sm:w-32">
                    Jumlah Order
                </label>
                <div class="flex w-full gap-3">
                    <input type="text" required class="form-control" wire:model="jumlah_order"
                        placeholder="Masukan jumlah order yang diinginkan">
                    <p class="mt-2 font-bold">{{ $obatBarangDetail ? $obatBarangDetail->satuan_dasar_beli : '' }}</p>
                </div>
            </div>
            <div data-tw-merge class="flex items-center mt-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 sm:w-32">
                    Keterangan
                </label>
                <textarea type="text" wire:model="keterangan" required class="form-control" placeholder="Masukan keterangan"
                    rows="5"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" data-tw-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" wire:loading.remove type="submit">Simpan</button>
            <button wire:loading class="btn btn-primary">
                Menyimpan...
            </button>
        </div>
    </form>
</div>
