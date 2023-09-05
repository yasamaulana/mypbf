@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Pesanan Penjualan
        </h2>
    </div>
    <div class="box p-5 mt-5">
        <div class="sm:grid grid-cols-2 gap-5">
            <div class="">
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Tanggal
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="date" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        No. Reff
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder="Auto"
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Tgl. SP
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="date" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        No. SP
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
            </div>
            <div data-tw-merge class="block mt-2 items-center">
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Pelanggan
                    </label>
                    <div class="flex item-center w-full">
                        <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        <button class="btn btn-warning ml-2" data-tw-toggle="modal"
                            data-tw-target="#daftar-pelanggan">Cari</button>
                    </div>
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Marketing
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-60">
                        Tipe SP
                    </label>
                    <select data-tw-merge aria-label="Default select example" class="form-control">
                        <option>- Pilih -</option>
                        <option>Supri</option>
                        <option>Ahmad</option>
                    </select>
                </div>
                <div class="form-switch block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-40">
                        Sudah Di Cek
                    </label>
                    <input id="checkbox-switch-7" class="form-check-input mx-3" type="checkbox">
                </div>
            </div>
        </div>
    </div>

    {{-- Modal daftar-pelanggan --}}
    <div id="daftar-pelanggan" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header text-lg font-bold  bg-primary flex align-center justify-center text-white">
                    Daftar Pelanggan
                </div>
                <div class="modal-body p-5">
                    <div class="overflow-auto">
                        <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 mb-3 sm:mt-0">
                            <div class="w-56 relative text-slate-500 ">
                                <input type="text" class="form-control w-56 pr-10" placeholder="Search...">
                                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="border border-slate-600">Aksi</th>
                                    <th class="border border-slate-600">Kode</th>
                                    <th class="border border-slate-600">Nama Pelanggan</th>
                                    <th class="border border-slate-600">Exp SIA</th>
                                    <th class="border border-slate-600">Exp SIPA</th>
                                    <th class="border border-slate-600">Batas Piutang</th>
                                    <th class="border border-slate-600">Jumlah Piutang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-slate-600">
                                        <input data-tw-merge type="checkbox"
                                            class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="" />
                                    </td>
                                    <td class="border border-slate-600">Contoh Data</td>
                                    <td class="border border-slate-600">Contoh Data</td>
                                    <td class="border border-slate-600">Contoh Data</td>
                                    <td class="border border-slate-600">Contoh Data</td>
                                    <td class="border border-slate-600">Contoh Data</td>
                                    <td class="border border-slate-600">Contoh Data</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-tw-dismiss="modal">Batal</button>
                    <button class="btn btn-primary">Pilih</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal daftar --}}

    <div class="box p-5 mt-3">
        <div class="overflow-auto">
            <table class="table">
                <thead class="text-center font-bold">
                    <tr>
                        <td class="border border-slate-600">No</td>
                        <td class="border border-slate-600">Kode</td>
                        <td class="border border-slate-600">Obat/Barang</td>
                        <td class="border border-slate-600">Golongan</td>
                        <td class="border border-slate-600">Qty SP</td>
                        <td class="border border-slate-600">Satuan</td>
                        <td class="border border-slate-600">Batch</td>
                        <td class="border border-slate-600">Exp Date</td>
                        <td class="border border-slate-600">Stok</td>
                        <td class="border border-slate-600">Gudang</td>
                        <td class="border border-slate-600">Rak</td>
                        <td class="border border-slate-600">Sub Rak</td>
                        <td class="border border-slate-600">Qty</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-slate-600">1</td>
                        <td class="border border-slate-600">
                            <div class="flex justify-between">
                                <p class="mr-auto mt-2">123123</p>
                                <button class="btn btn-sm" data-tw-toggle="modal" data-tw-target="#daftar-produk"><i
                                        class="w-3" data-feather="search"></i></button>
                            </div>
                        </td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">
                            <select data-tw-merge aria-label="Default select example" class="form-control">
                                <option>- Pilih -</option>
                                <option>Box</option>
                                <option>Botol</option>
                            </select>
                        </td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600 w-32">
                            <div class="flex  gap-2">
                                <p class="mr-auto mt-2"><input type="text" class="form-control w-24"></p>
                                <button class="btn btn-sm btn-warning" data-tw-toggle="modal"
                                    data-tw-target="#cek-barcode-produk"><i class="w-3"
                                        data-feather="search"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            {{-- Modal daftar-produk --}}
            <div id="daftar-produk" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div
                            class="modal-header text-lg font-bold  bg-primary flex align-center justify-center text-white">
                            Daftar Produk
                        </div>
                        <div class="modal-body p-5">
                            <div class="overflow-auto">
                                <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 mb-3 sm:mt-0">
                                    <div class="w-56 relative text-slate-500 ">
                                        <input type="text" class="form-control w-56 pr-10" placeholder="Search...">
                                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"
                                            data-feather="search"></i>
                                    </div>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border border-slate-600">Kode</th>
                                            <th class="border border-slate-600">Nama Barang</th>
                                            <th class="border border-slate-600">Golongan</th>
                                            <th class="border border-slate-600">Qty SP</th>
                                            <th class="border border-slate-600">Satuan</th>
                                            <th class="border border-slate-600">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border border-slate-600">Contoh Data</td>
                                            <td class="border border-slate-600">Contoh Data</td>
                                            <td class="border border-slate-600">Contoh Data</td>
                                            <td class="border border-slate-600">2</td>
                                            <td class="border border-slate-600">Box</td>
                                            <td class="border border-slate-600">
                                                <input data-tw-merge type="checkbox"
                                                    class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                                    id="checkbox-switch-1" value="" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-tw-dismiss="modal">Batal</button>
                            <button class="btn btn-primary">Pilih</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Modal daftar --}}
            {{-- Modal daftar-produk --}}
            <div id="cek-barcode-produk" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div
                            class="modal-header text-lg font-bold  bg-primary flex align-center justify-center text-white">
                            Cek Barcode Produk
                        </div>
                        <div class="modal-body p-5">
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Barcode
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Kode
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                            <div data-tw-merge class="block sm:flex items-center mt-3">
                                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                                    Nama Produk
                                </label>
                                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-tw-dismiss="modal">Batal</button>
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Modal daftar --}}
        </div>
    </div>
    <div class="box p-5 mt-3">
        <div data-tw-merge class="block items-center mt-3">
            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                Keterangan
            </label>
            <textarea data-tw-merge id="horizontal-form-1" type="text" placeholder="" rows="5"
                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80"></textarea>
        </div>
    </div>
    <div class="flex gap-3 mt-5 justify-center">
        <button class="btn btn-primary px-10">Simpan</button>
        <a href="/cek-sp-penjualan"><button class="btn btn-danger">Batal</button></a>
    </div>
@endsection
