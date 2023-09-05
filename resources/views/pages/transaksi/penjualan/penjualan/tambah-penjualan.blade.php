@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Pembelian
        </h2>
    </div>
    <div class="sm:grid grid-cols-3 gap-4 mt-5">
        <div class="box p-5 drop-shadow ">
            <div data-tw-merge class="block sm:flex items-center mt-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                    No SP
                </label>
                <div class="flex item-center w-full">
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    <button class="btn btn-warning ml-2" data-tw-toggle="modal" data-tw-target="#cari-no-sp">Cari</button>
                </div>
            </div>
            <div data-tw-merge class="block sm:flex items-center mt-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                    Tgl. Input
                </label>
                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
            </div>
            <div data-tw-merge class="block sm:flex items-center mt-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                    Tgl. Faktur
                </label>
                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
            </div>
        </div>
        <div class="text-center mb-5 mt-5 box p-3">
            <label for="no-reff" class="form-label">No. Reff</label>
            <input type="text" class="form-control" name="" id="" placeholder="Auto">
            <div class="flex justify-center mt-3">
                <img src="{{ asset('dist/images/barcode.png') }}" alt="">
            </div>
        </div>
        <div class="box p-5">
            <div data-tw-merge class="block sm:flex items-center mt-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                    Pelanggan
                </label>
                <div class="flex item-center w-full">
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    <button class="btn btn-warning ml-2" data-tw-toggle="modal"
                        data-tw-target="#cari-pelanggan">Cari</button>
                </div>
            </div>
            <div data-tw-merge class="block sm:flex items-center mt-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                    Sales
                </label>
                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
            </div>
            <div data-tw-merge class="block sm:flex items-center mt-3 gap-2">
                <div class="flex">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                        Kredit
                    </label>
                    <div class="form-check form-switch">
                        <input id="checkbox-switch-7" class="form-check-input mx-3" type="checkbox">
                    </div>
                </div>
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2">
                    Date
                </label>
                <input data-tw-merge id="horizontal-form-1" type="date" placeholder=""
                    class="sm:w-full disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
            </div>
            <div data-tw-merge class="block sm:flex items-center mt-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                    No Seri Pajak
                </label>
                <div class="flex item-center w-full">
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    <button class="btn btn-warning ml-2" data-tw-toggle="modal" data-tw-target="#data-pajak">Cari</button>
                </div>
            </div>
        </div>
    </div>

    {{-- modal cari no sp --}}
    <div id="cari-no-sp" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header text-lg font-bold  bg-primary flex align-center justify-center text-white">
                    Daftar Surat Pesanan
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
                                    <th class="border border-slate-600">No</th>
                                    <th class="border border-slate-600">No. SP</th>
                                    <th class="border border-slate-600">Tgl. SP</th>
                                    <th class="border border-slate-600">Pelanggan</th>
                                    <th class="border border-slate-600">Marketing</th>
                                    <th class="border border-slate-600">Tipe SP</th>
                                    <th class="border border-slate-600">Status</th>
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
                                    <td class="border border-slate-600">On Proses</td>
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
    {{-- end modal cari no sp --}}

    {{-- modal cari pelanggan --}}
    <div id="cari-pelanggan" class="modal" tabindex="-1" aria-hidden="true">
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
                                    <th class="border border-slate-600">Exp. SIA</th>
                                    <th class="border border-slate-600">Exp. SIPA</th>
                                    <th class="border border-slate-600">Batas Piutang</th>
                                    <th class="border border-slate-600">Jumalh Piutang</th>
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
    {{-- end modal cari pelanggan --}}

    {{-- modal cari no seri pajak --}}
    <div id="data-pajak" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-lg font-bold  bg-primary flex align-center justify-center text-white">
                    Data No Seri Pajak
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
                                    <th class="border border-slate-600">No</th>
                                    <th class="border border-slate-600">No Seri Pajak</th>
                                    <th class="border border-slate-600">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-slate-600">1</td>
                                    <td class="border border-slate-600">Contoh Data</td>
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
    {{-- end modal cari pelanggan --}}

    <div class="intro-y col-span-12 overflow-auto mt-5 lg:overflow-visible">
        <div class="sm:flex gap-3 mb-3 ">
            <div class="mr-auto">
                <button data-tw-toggle="modal" data-tw-target="#tambah-pembelian"
                    class="btn btn-primary text-white">Tambah
                    Produk</button>
            </div>
            {{-- modal tambah Pembelian --}}
            <div id="tambah-pembelian" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
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
                                            <th class="border border-slate-600">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border border-slate-600">Contoh Data</td>
                                            <td class="border border-slate-600">Contoh Data</td>
                                            <td class="border border-slate-600">Contoh Data</td>
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
            {{-- end modal tambah produk --}}

            <div class="box">
                <p class="font-bold p-2 text-xl rounded-md">Total </p>
            </div>
        </div>
    </div>
    <div class="box overflow-auto mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th class="border border-slate-600">No</th>
                    <th class="border border-slate-600">Kode</th>
                    <th class="border border-slate-600">Nama Obat/Barang</th>
                    <th class="border border-slate-600">Qty SP</th>
                    <th class="border border-slate-600">Satuan</th>
                    <th class="border border-slate-600">No Batch</th>
                    <th class="border border-slate-600">Exp Date</th>
                    <th class="border border-slate-600">Stok</th>
                    <th class="border border-slate-600">Qty</th>
                    <th class="border border-slate-600">Harga</th>
                    <th class="border border-slate-600">Disc 1</th>
                    <th class="border border-slate-600">Disc 2</th>
                    <th class="border border-slate-600">Total</th>
                    <th class="border border-slate-600">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-slate-600">1</td>
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
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">Contoh Data</td>
                    <td class="border border-slate-600">
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="box p-5 mt-5">
        <div class="sm:grid grid-cols-2 gap-5">
            <div class="">
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Sub Total
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Disc
                    </label>
                    <div class="flex gap-2 w-full">
                        <input data-tw-merge id="horizontal-form-1" type="text" placeholder="%"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    </div>
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        DPP
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        PPN
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Biaya 1
                    </label>
                    <div class="flex gap-2 w-full">
                        <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        <select data-tw-merge aria-label="Default select example" class="form-control">
                            <option>- Pilih -</option>
                            <option>Supri</option>
                            <option>Ahmad</option>
                        </select>
                    </div>
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Biaya 2
                    </label>
                    <div class="flex gap-2 w-full">
                        <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        <select data-tw-merge aria-label="Default select example" class="form-control">
                            <option>- Pilih -</option>
                            <option>Supri</option>
                            <option>Ahmad</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="">
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Total Tagihan
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Akun Bayar
                    </label>
                    <select data-tw-merge aria-label="Default select example" class="form-control">
                        <option>- Pilih -</option>
                        <option>Supri</option>
                        <option>Ahmad</option>
                    </select>
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Jumlah Bayar
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Kurang
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Kembalian
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Akun Kembalian
                    </label>
                    <select data-tw-merge aria-label="Default select example" class="form-control">
                        <option>- Pilih -</option>
                        <option>Supri</option>
                        <option>Ahmad</option>
                    </select>
                </div>
            </div>
        </div>
        <div data-tw-merge class="block sm:flex items-center mt-5">
            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-52">
                Keterangan
            </label>
            <textarea data-tw-merge id="horizontal-form-1" type="text" placeholder="" rows="4"
                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80"></textarea>
        </div>
        <div class="flex gap-2 mt-5 justify-center">
            <button class="btn px-10 btn-primary">Simpan</button>
            <a href="/penjualan"><button class="btn btn-danger mx-5">Batal</button></a>
        </div>
    </div>
@endsection
