<div>
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            Data Rencana Order
        </h2>
        <div data-tw-merge class="flex items-center">
            <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 font-bold sm:w-52">
                Cari Suplier
            </label>
            <select data-tw-merge aria-label="Default select example" class="w-full tom-select" wire:model.live="search">
                <option value="">- Pilih -</option>
                @forelse ($supliers as $sup)
                    <option>{{ $sup->nama_suplier }}</option>
                @empty
                @endforelse
            </select>
        </div>
    </div>

    <!-- BEGIN: Data List -->
    @forelse ($supliers as $sup)
        <div class="col-span-12 mt-5 overflow-auto intro-y lg:overflow-visible">
            <div class="p-2 box">
                <div class="flex justify-end gap-3 mb-3">
                    <div class="relative w-56 mr-auto border text-slate-500 border-slate-600">
                        <input type="text" class="w-56 pr-10 form-control box" placeholder="Search...">
                        <i class="absolute inset-y-0 right-0 w-4 h-4 my-auto mr-3" data-feather="search"></i>
                    </div>
                    <button class="text-white btn btn-warning" data-tw-toggle="modal"
                        data-tw-target="#buat-sp{{ $sup->id }}">Buat SP
                        +</button>
                    <button class="text-white btn btn-success" data-tw-toggle="modal"
                        data-tw-target="#tambah-produk{{ $sup->id }}">Tambah
                        Produk +</button>
                </div>

                {{-- modal buat sp --}}
                <div id="buat-sp{{ $sup->id }}" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div
                                class="flex justify-center text-lg font-bold text-white modal-header bg-primary align-center">
                                Nama Suplier PT ABC
                            </div>
                            <div class="p-5 modal-body">
                                <div data-tw-merge class="flex items-center">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 sm:w-32">
                                        Tgl SP
                                    </label>
                                    <input type="date" name="" id="" class="form-control w-52">
                                </div>
                                <div data-tw-merge class="flex items-center mt-3">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 sm:w-32">
                                        No Sp
                                    </label>
                                    <input type="text" name="" id="" class="form-control w-52">
                                    <input data-tw-merge type="checkbox"
                                        class="transition-all ml-3 duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                        id="checkbox-switch-6" value="" />
                                </div>
                                <div data-tw-merge class="flex items-center mt-3">
                                    <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 sm:w-32">
                                        No Sp
                                    </label>
                                    <select data-tw-merge aria-label="Default select example" class="form-control w-52">
                                        <option>- Pilih -</option>
                                        <option>Supri</option>
                                        <option>Ahmad</option>
                                    </select>
                                </div>
                                <div class="overflow-auto">
                                    <table class="table mt-3">
                                        <thead>
                                            <tr>
                                                <td class="border border-slate-600">No</td>
                                                <td class="border border-slate-600">Nama Obat/Barang</td>
                                                <td class="border border-slate-600">Golongan</td>
                                                <td class="border border-slate-600">Jumalah Order</td>
                                                <td class="border border-slate-600">Satuan</td>
                                                <td class="border border-slate-600">Keterangan</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="border border-slate-600">1</td>
                                                <td class="border border-slate-600">Abajos</td>
                                                <td class="border border-slate-600"></td>
                                                <td class="border border-slate-600">5</td>
                                                <td class="border border-slate-600">Box</td>
                                                <td class="border border-slate-600">Segera</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-slate-600">2</td>
                                                <td class="border border-slate-600">Amoxan Tab</td>
                                                <td class="border border-slate-600"></td>
                                                <td class="border border-slate-600">2</td>
                                                <td class="border border-slate-600">Box</td>
                                                <td class="border border-slate-600">Ok</td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" class="font-bold border border-slate-600">Jumlah Item
                                                    : 2
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-tw-dismiss="modal">Cancel</button>
                                <button class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end modal buat sp --}}
                {{-- modal tambah produk --}}
                {{-- <div id="tambah-produk{{ $sup->id }}" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        @livewire('pembuatan-sp.rencana-order.modal-tambah-produk', [
                            'nama_suplier' => $sup->nama_suplier,
                            'id' => $sup->id,
                        ])
                    </div>
                </div> --}}
                {{-- end modal tambah produk --}}

                <p class="p-2 font-bold text-white bg-primary">Suplier {{ $sup->nama_suplier }}</p>
                @livewire('pembuatan-sp.rencana-order.table-order', [
                    'nama_suplier' => $sup->nama_suplier,
                    'sup' => $sup,
                ])
            </div>
        </div>
    @empty
        <div class="p-5 mt-5 box">
            <h3 class="m-5 font-bold text-center">Belum ada data suplier tersedia</h3>
        </div>
    @endforelse
    <!-- END: Data List -->
</div>
