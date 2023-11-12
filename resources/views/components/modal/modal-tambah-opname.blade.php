<div id="cetak-kartu-stok" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form class="mb-3" action="{{ route('tambah-stok-opname') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="modal-body px-5">
                        <div class="preview">
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Nama Produk
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                    name="nama_produk" value="{{ $stok ? $stok->produk->nama_obat_barang : '' }}"
                                    disabled
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Tipe
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder="" disabled
                                    value="{{ $stok ? $stok->tipe : '' }}" name="tipe"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    No. Batch
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder="" disabled
                                    name="no_batch" value="{{ $stok ? $stok->no_batch : '' }}"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Exp. Date
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="date" placeholder="" disabled
                                    name="exp_date" value="{{ $stok ? $stok->exp_date : '' }}"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Stok Tercatat
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder="" disabled
                                    disabled value="{{ $stok->produk->isi }}"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Stok Real
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-60">
                                    Tanggal Stok Opname
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="date" placeholder="Auto"
                                    class="form-control" name="tgl_so" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Satuan Terkecil
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder="" disabled
                                    name="satuan_terkecil" value="{{ $stok->produk->satuan_jual_terkecil }}"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Gudang
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder="" disabled
                                    name="gudang_asal" value="{{ $stok ? $stok->gudang : '' }}"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Rak
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder="" disabled
                                    name="rak_asal" value="{{ $stok ? $stok->rak : '' }}"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Sub Rak
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder="" disabled
                                    name="subrak_asal" value="{{ $stok ? $stok->sub_rak : '' }}"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-60">
                                    Keterangan
                                </label>
                                <textarea name="keterangan" id="" rows="3" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-tw-dismiss="modal">Batal</button>
                    <button class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
