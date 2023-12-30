@extends('layout.main')
@section('main')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            Pembelian
        </h2>
    </div>
    @include('components.alert')
    <div class="grid-cols-3 gap-4 mt-5 sm:grid">
        <div class="p-5 box drop-shadow">
            <div data-tw-merge class="items-center block mt-3 sm:flex">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-60">
                    No. SP
                </label>
                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
            </div>
            <div data-tw-merge class="items-center block mt-3 sm:flex">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-60">
                    Tgl. Input
                </label>
                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
            </div>
            <div data-tw-merge class="items-center block mt-3 sm:flex">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-60">
                    Tgl. Faktur
                </label>
                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
            </div>
            <div class="mt-3">
                <div class="form-check form-switch">
                    <label class="form-check-label" for="checkbox-switch-7">Inc PPN</label>
                    <input id="checkbox-switch-7" class="mx-3 form-check-input" type="checkbox">
                </div>
            </div>
        </div>
        <div class="mt-5 mb-5 text-center">
            <label for="no-reff" class="form-label">No. Reff</label>
            <input type="text" class="form-control" name="" id="" placeholder="Auto">
        </div>
        <div class="p-5 box">
            <div data-tw-merge class="items-center block mt-3 sm:flex">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-60">
                    Suplier
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    <option>- Pilih -</option>
                    <option>Supri</option>
                    <option>Ahmad</option>
                </select>
            </div>
            <div data-tw-merge class="items-center block mt-3 sm:flex">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-60">
                    No Fakturs
                </label>
                <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
            </div>
            <div data-tw-merge class="flex items-center block gap-2 mt-3">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-60">
                    Kredit
                </label>
                <div class="form-check form-switch">
                    <input id="checkbox-switch-7" class="mx-3 form-check-input" type="checkbox">
                </div>
                <div class="flex gap-2">
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="sm:w-20 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="sm:w-32 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
            </div>
        </div>
    </div>
    <div class="col-span-12 mt-5 overflow-auto intro-y lg:overflow-visible">
        <div class="gap-3 mb-3 sm:flex ">
            <div class="mr-auto">
                <button class="btn btn-primary" data-tw-toggle="modal" data-tw-target="#surat-pesanan">Surat
                    Pesanan</button>
            </div>

            {{-- modal surat pesanan --}}
            <div id="surat-pesanan" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="flex justify-center text-lg font-bold text-white modal-header bg-primary align-center">
                            Daftar Surat Pesanan
                        </div>
                        <div class="p-5 modal-body">
                            <div class="overflow-auto">
                                <div class="w-full mt-3 mb-3 form-check form-switch sm:w-auto sm:ml-auto sm:mt-0">
                                    <div class="relative w-56 text-slate-500 ">
                                        <input type="text" class="w-56 pr-10 form-control" placeholder="Search...">
                                        <i class="absolute inset-y-0 right-0 w-4 h-4 my-auto mr-3"
                                            data-feather="search"></i>
                                    </div>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border border-slate-600">No</th>
                                            <th class="border border-slate-600">No Reff</th>
                                            <th class="border border-slate-600">Tgl. SP</th>
                                            <th class="border border-slate-600">Suplier</th>
                                            <th class="border border-slate-600">No. SP</th>
                                            <th class="border border-slate-600">Tipe SP</th>
                                            <th class="border border-slate-600">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border border-slate-600">1</td>
                                            <td class="border border-slate-600">Contoh Data</td>
                                            <td class="border border-slate-600">Contoh Data</td>
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
                            <button class="btn btn-secondary" data-tw-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <p class="p-2 font-bold rounded-md">Total Hutang</p>
            </div>
        </div>
    </div>
    <div class="mt-5 overflow-auto box">
        <table class="table">
            <thead>
                <tr>
                    <th class="border border-slate-600">No</th>
                    <th class="border border-slate-600">Nama Obat/Barang</th>
                    <th class="border border-slate-600">Satuan</th>
                    <th class="border border-slate-600">Qty SP</th>
                    <th class="border border-slate-600">Qty Faktur</th>
                    <th class="border border-slate-600">Harga</th>
                    <th class="border border-slate-600">Disc 1</th>
                    <th class="border border-slate-600">Disc 2</th>
                    <th class="border border-slate-600">Total</th>
                    <th class="border border-slate-600">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($produks as $produk)
                    <tr>
                        <td class="border border-slate-600">{{ $loop->iteration }}</td>
                        <td class="border border-slate-600">{{ $produk->produk->nama_obat_barang }}</td>
                        <td class="border border-slate-600">{{ $produk->satuan }}</td>
                        <td class="border border-slate-600">{{ $produk->satuan_terkecil }}</td>
                        <td class="border border-slate-600">{{ $produk->qty_faktur }}</td>
                        <td class="border border-slate-600">{{ number_format($produk->harga, 2, ',', '.') }}</td>
                        <td class="border border-slate-600">{{ $produk->disc1 }}</td>
                        <td class="border border-slate-600">{{ $produk->disc2 }}</td>
                        <td class="border border-slate-600">{{ number_format($produk->total, 2, ',', '.') }} </td>
                        <td class="flex border border-slate-600">
                            <button class="mr-1 btn btn-warning btn-sm" data-tw-toggle="modal"
                                data-tw-target="#edit-produk{{ $produk->id }}">Edit</button>
                            {{-- @include('components.modal.modal-tambah-pembelian', [
                                'id_modal' => 'edit-produk',
                                'route' => 'edit.hutang-awal',
                                'id' => $produk->id,
                                'produk' => $produk,
                                'stok' => '',
                            ]) --}}
                            <form action="/delete-produk-pembelian/{{ $produk->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr class="intro-x">
                        <td colspan="13" class="font-bold text-center">Belum ada data tersedia</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="p-5 mt-5 box">
        <div class="grid-cols-2 gap-5 sm:grid">
            <div class="">
                <div data-tw-merge class="items-center block mt-3 sm:flex">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-60">
                        Sub Total
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="items-center block mt-3 sm:flex">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-60">
                        Disc
                    </label>
                    <div class="flex w-full gap-2">
                        <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    </div>
                </div>
                <div data-tw-merge class="items-center block mt-3 sm:flex">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-60">
                        DPP
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="items-center block mt-3 sm:flex">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-60">
                        PPN
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="items-center block mt-3 sm:flex">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-60">
                        Biaya 1
                    </label>
                    <div class="flex w-full gap-2">
                        <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        <select data-tw-merge aria-label="Default select example" class="form-control">
                            <option>- Pilih -</option>
                            <option>Supri</option>
                            <option>Ahmad</option>
                        </select>
                    </div>
                </div>
                <div data-tw-merge class="items-center block mt-3 sm:flex">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-60">
                        Biaya 2
                    </label>
                    <div class="flex w-full gap-2">
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
                <div data-tw-merge class="items-center block mt-3 sm:flex">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-60">
                        Total Tagihan
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="items-center block mt-3 sm:flex">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-60">
                        Akun Bayar
                    </label>
                    <select data-tw-merge aria-label="Default select example" class="form-control">
                        <option>- Pilih -</option>
                        <option>Supri</option>
                        <option>Ahmad</option>
                    </select>
                </div>
                <div data-tw-merge class="items-center block mt-3 sm:flex">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-60">
                        Jumlah Bayar
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="items-center block mt-3 sm:flex">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-60">
                        No Faktur Pajak
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="items-center block mt-3 sm:flex">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-60">
                        Tgl Faktur Pajak
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="text" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
                <div data-tw-merge class="items-center block mt-3 sm:flex">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-60">
                        Kompensasi Pajak
                    </label>
                    <input data-tw-merge id="horizontal-form-1" type="date" placeholder=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                </div>
            </div>
        </div>
        <div data-tw-merge class="items-center block mt-5 sm:flex">
            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-52">
                Keterangan
            </label>
            <textarea data-tw-merge id="horizontal-form-1" type="text" placeholder="" rows="4"
                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80"></textarea>
        </div>
        <div class="flex justify-center gap-2 mt-5">
            <button class="px-10 btn btn-primary">Simpan</button>
            <button class="mx-5 btn btn-danger">Batal</button>
        </div>
    </div>
@endsection
