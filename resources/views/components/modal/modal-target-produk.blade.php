<div id="{{ $id_modal }}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl rounded-lg">
        <div class="modal-content">
            <div class="modal-body p-10">
                <div class="preview">
                    <div class="flex gap-3 w-full">
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-20">
                                Tahun
                            </label>
                            <select data-tw-merge aria-label="Default select example" class="form-control">
                                <option>- Pilih -</option>
                                <option>Paracetamol</option>
                            </select>
                        </div>
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-20">
                                Bulan
                            </label>
                            <select data-tw-merge aria-label="Default select example" class="form-control">
                                <option>- Pilih -</option>
                                <option>Paracetamol</option>
                            </select>
                        </div>
                        <div data-tw-merge class="block sm:flex items-center mt-3">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-20">
                                Cari
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                    </div>
                    <div class="overflow-auto">
                        <table class="table mt-3">
                            <thead class="font-bold">
                                <tr>
                                    <td class="border border-slate-600">Kode</td>
                                    <td class="border border-slate-600">Nama Obat/Barang</td>
                                    <td class="border border-slate-600">Stok</td>
                                    <td class="border border-slate-600">Satuan Terkecil</td>
                                    <td class="border border-slate-600">Status Aktif</td>
                                    <td class="border border-slate-600">Tipe</td>
                                    <td class="border border-slate-600">Target</td>
                                    <td class="border border-slate-600">Penjualan (A)</td>
                                    <td class="border border-slate-600">Retur Penjualan (B)</td>
                                    <td class="border border-slate-600">(A-B)</td>
                                    <td class="border border-slate-600">%</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-slate-600">Contoh data</td>
                                    <td class="border border-slate-600">Contoh data</td>
                                    <td class="border border-slate-600">Contoh data</td>
                                    <td class="border border-slate-600">Contoh data</td>
                                    <td class="border border-slate-600">Contoh data</td>
                                    <td class="border border-slate-600">Contoh data</td>
                                    <td class="border border-slate-600">
                                        <input data-tw-merge id="horizontal-form-1" type="number" placeholder=""
                                            name="target"
                                            class="w-32 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                    </td>
                                    <td class="border border-slate-600">Contoh data</td>
                                    <td class="border border-slate-600">Contoh data</td>
                                    <td class="border border-slate-600">Contoh data</td>
                                    <td class="border border-slate-600">Contoh data</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- footer --}}
            <div class="modal-footer">
                <button class="btn btn-secondari mt-5" data-tw-dismiss="modal">Batal</button>
                <button class="btn btn-primary mt-5">Simpan</button>
            </div>
        </div>
    </div>
</div>
