<div id="cetak-kartu-stok" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form class="mb-3" action="{{ route('tambah-mutasi') }}" method="POST">
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
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Tipe
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder="" name="tipe"
                                    value="{{ $stok ? $stok->tipe : '' }}"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    No. Batch
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                    name="no_batch" value="{{ $stok ? $stok->no_batch : '' }}"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Exp. Date
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                    name="exp_date" value="{{ $stok ? $stok->exp_date : '' }}"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Jurnal Stok
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                    name="jurnal_stok" value="{{ $stok ? $stok->jurnal_stok : '' }}"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Gudang Asal
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                    name="gudang_asal" value="{{ $stok ? $stok->gudang : '' }}"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Sub Rak Asal
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                    name="subrak_asal" value="{{ $stok ? $stok->sub_rak : '' }}"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-60">
                                    Gudang Baru
                                </label>
                                <select data-tw-merge aria-label="Default select example" class="form-control"
                                    name="gudang_baru">
                                    @foreach ($gudangs as $gudang)
                                        <option {{ $stok ? ($stok->gudang == $gudang->gudang ? 'selected' : '') : '' }}>
                                            {{ $gudang->gudang }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-60">
                                    Rak Baru
                                </label>
                                <select data-tw-merge aria-label="Default select example" class="form-control"
                                    name="rak_baru">
                                    @foreach ($raks as $rak)
                                        <option {{ $stok ? ($stok->rak == $rak->rak ? 'selected' : '') : '' }}>
                                            {{ $rak->rak }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-60">
                                    Sub Rak Baru
                                </label>
                                <select data-tw-merge aria-label="Default select example" class="form-control"
                                    name="subrak_baru">
                                    @foreach ($sub_rak as $rak)
                                        <option {{ $stok ? ($stok->rak == $rak->sub_rak ? 'selected' : '') : '' }}>
                                            {{ $rak->sub_rak }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-60">
                                    Keterangan
                                </label>
                                <textarea name="keterangan" id="" rows="3" class="form-control">{{ $stok ? $stok->produk->ket_satuan : '' }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
