@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Detail Terima Barang
        </h2>
    </div>
    <div class="box p-5 mt-5">
        <div class="sm:grid grid-cols-2 gap-5">
            <div class="">
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        No. Reff
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder="Auto"
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        Tanggal
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="date" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="block sm:flex items-center mt-3">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                        No. Faktur
                    </label>
                    <div class="flex item-center w-full">
                        <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        <button class="btn btn-warning ml-2" data-tw-toggle="modal" data-tw-target="#cari">Cari</button>
                    </div>
                </div>
            </div>
            <div data-tw-merge class="block mt-2 items-center">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2  sm:w-60">
                    Keterangan
                </label>
                <textarea rows="5" data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80"></textarea>
            </div>
        </div>
    </div>

    {{-- Modal Cari --}}
    <div id="cari" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-lg font-bold  bg-primary flex align-center justify-center text-white">
                    Daftar Pembelian
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
                                    <th class="border border-slate-600">Tanggal</th>
                                    <th class="border border-slate-600">No Faktur</th>
                                    <th class="border border-slate-600">Suplier</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-slate-600">Contoh Data</td>
                                    <td class="border border-slate-600">Contoh Data</td>
                                    <td class="border border-slate-600">Contoh Data</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                    <button class="btn btn-secondary" data-tw-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary">Simpan</button>
                </div> --}}
            </div>
        </div>
    </div>
    {{-- End Modal Cari --}}

    <div class="flex mt-5 justify-end">
        <button class="btn btn-primary" data-tw-toggle="modal" data-tw-target="#tambah">Tambah +</button>
    </div>

    {{-- modal tambah --}}
    <div id="tambah" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-lg font-bold  bg-primary flex align-center justify-center text-white">
                    Daftar Produk Pembelian
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
                                    <th class="border border-slate-600">Kode</th>
                                    <th class="border border-slate-600">Nama Produk</th>
                                    <th class="border border-slate-600">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-slate-600">Contoh Data</td>
                                    <td class="border border-slate-600">Contoh Data</td>
                                    <td class="border border-slate-600">Contoh Data</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                    <button class="btn btn-secondary" data-tw-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary">Simpan</button>
                </div> --}}
            </div>
        </div>
    </div>
    {{-- end modal tambah --}}

    <div class="box p-5 mt-3">
        <div class="overflow-auto">
            <table class="table">
                <thead class="text-center">
                    <tr>
                        <td class="border border-slate-600">Kode Barang</td>
                        <td class="border border-slate-600">Nama Produk</td>
                        <td class="border border-slate-600">Satuan</td>
                        <td class="border border-slate-600">Qyt SP</td>
                        <td class="border border-slate-600">Qyt Faktur</td>
                        <td class="border border-slate-600">Diterima</td>
                        <td class="border border-slate-600">Batch</td>
                        <td class="border border-slate-600">Tgl. Exp Date</td>
                        <td class="border border-slate-600">Gudang</td>
                        <td class="border border-slate-600">Rak</td>
                        <td class="border border-slate-600">Sub Rak</td>
                        <td class="border border-slate-600">Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">Contoh Data</td>
                        <td class="border border-slate-600">
                            <select data-tw-merge aria-label=".form-select-sm example"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 text-xs py-1.5 pl-2 pr-8 mt-2 mt-2">
                                <option>- Pilih -</option>
                                <option>Liam Neeson</option>
                                <option>Daniel Craig</option>
                            </select>
                        </td>
                        <td class="border border-slate-600 ">
                            <select data-tw-merge aria-label=".form-select-sm example"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 text-xs py-1.5 pl-2 pr-8 mt-2 mt-2">
                                <option>- Pilih -</option>
                                <option>Liam Neeson</option>
                                <option>Daniel Craig</option>
                            </select>
                        </td>
                        <td class="border border-slate-600">
                            <select data-tw-merge aria-label=".form-select-sm example"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 text-xs py-1.5 pl-2 pr-8 mt-2 mt-2">
                                <option>- Pilih -</option>
                                <option>Liam Neeson</option>
                                <option>Daniel Craig</option>
                            </select>
                        </td>
                        <td class="border border-slate-600">
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="12" class="font-bold border border-slate-600 text-bold">Total</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="flex gap-3 mt-5 justify-center">
        <button class="btn btn-primary px-10">Simpan</button>
        <button class="btn btn-danger">Batal</button>
    </div>
@endsection
