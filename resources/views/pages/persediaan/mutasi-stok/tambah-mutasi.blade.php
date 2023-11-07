@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <a href="/mutasi-stok"><button class="btn btn-secondary mr-2"><i data-feather="corner-up-left" class="w-4 h-4 mr-1"></i>
                Kembali</button></a>
        <h2 class="text-lg font-medium mr-auto">
            Mutasi Stok
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 gap-4 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <div data-tw-merge class="block sm:flex items-center">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-24">
                    Gudang
                </label>
                <select data-tw-merge id="" aria-label="Default select example" name="gudang_asal"
                    class="form-control">
                    <option value="">- Pilih -</option>
                    @foreach ($gudangs as $gudang)
                        <option value="{{ $gudang->id }}"
                            {{ $gudang ? ($gudang->id == $gudang->id ? 'selected' : '') : '' }}>
                            {{ $gudang->gudang }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div data-tw-merge class="block sm:flex items-center">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-20">
                    Rak
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    @foreach ($raks as $rak)
                        <option value="{{ $rak->id }}" {{ $rak ? ($rak->id == $rak->id ? 'selected' : '') : '' }}>
                            {{ $rak->rak }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div data-tw-merge class="block sm:flex items-center">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-32">
                    Sub Rak
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    @foreach ($stoks as $stok)
                        <option value="{{ $stok->id }}" {{ $stok ? ($stok->id == $stok->id ? 'selected' : '') : '' }}>
                            {{ $stok->sub_rak }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div data-tw-merge class="block sm:flex items-center">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-20">
                    Tipe
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    @foreach ($stoks as $stok)
                        <option value="{{ $stok->id }}" {{ $stok ? ($stok->id == $stok->id ? 'selected' : '') : '' }}>
                            {{ $stok->tipe }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div data-tw-merge class="block sm:flex items-center">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-40">
                    Exp Sampai Tanggal

                </label>
                @foreach ($stoks as $stok)
                    <input data-tw-merge id="horizontal-form-1" value="{{ $stok->exp_date }}" type="date"
                        placeholder="Stok dari master"
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                @endforeach
            </div>
            <div class="flex gap-2">
                <button class="btn btn-primary">Tampilkan</button>
                <button class="btn btn-warning text-white">Atur Ulang</button>
            </div>
        </div>
    </div>
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <div class="intro-y box mt-5">
            <div
                class="flex flex-col sm:flex-row items-center p-2 border-b bg-primary border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto text-white">
                    Stok Dari Pembelian
                </h2>
                <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                    <div class="w-56 relative text-slate-500 ">
                        <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="table mt-2">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">Nama Produk</th>
                            <th class="whitespace-nowrap">No. Batch</th>
                            <th class="whitespace-nowrap">Exp. Date</th>
                            <th class="whitespace-nowrap">Stok</th>
                            <th class="whitespace-nowrap">Satuan Terkecil</th>
                            <th class="whitespace-nowrap">Tipe</th>
                            <th class="whitespace-nowrap">Gudang</th>
                            <th class="whitespace-nowrap">Rak</th>
                            <th class="whitespace-nowrap">Sub Rak</th>
                            <th class="whitespace-nowrap">Keterangan</th>
                            <th class="text-center whitespace-nowrap">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="intro-x">
                            <td class="w-40">1</td>
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center text-success" href="javascript:;" data-tw-toggle="modal"
                                        data-tw-target="#cetak-kartu-stok"> <i data-feather="file-minus"
                                            class="w-4 h-4 mr-1"></i> Mutasi Stok </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="intro-y box mt-5">
            <div
                class="flex flex-col sm:flex-row items-center p-2 border-b bg-primary border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto text-white">
                    Stok Awal
                </h2>
                <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                    <div class="w-56 relative text-slate-500 ">
                        <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="table mt-2">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">Nama Produk</th>
                            <th class="whitespace-nowrap">No. Batch</th>
                            <th class="whitespace-nowrap">Exp. Date</th>
                            <th class="whitespace-nowrap">Stok</th>
                            <th class="whitespace-nowrap">Satuan Terkecil</th>
                            <th class="whitespace-nowrap">Tipe</th>
                            <th class="whitespace-nowrap">Gudang</th>
                            <th class="whitespace-nowrap">Rak</th>
                            <th class="whitespace-nowrap">Sub Rak</th>
                            <th class="whitespace-nowrap">Keterangan</th>
                            <th class="text-center whitespace-nowrap">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($stoks as $stok)
                            <tr class="intro-x">
                                <td class="">{{ $stok->produk->nama_obat_barang }}</td>
                                <td class="">{{ $stok->no_batch }}</td>
                                <td class="">{{ $stok->exp_date }}</td>
                                <td class="">{{ $stok->produk->isi }}</td>
                                <td class="">{{ $stok->produk->satuan_jual_terkecil }}</td>
                                <td class="">{{ $stok->tipe }}</td>
                                <td class="">{{ $stok->gudang }}</td>
                                <td class="">{{ $stok->rak }}</td>
                                <td class="">{{ $stok->sub_rak }}</td>
                                <td class="">{{ $stok->produk->ket_satuan }}</td>
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center text-success" href="javascript:;"
                                            data-tw-toggle="modal" data-tw-target="#cetak-kartu-stok"> <i
                                                data-feather="file-minus" class="w-4 h-4 mr-1"></i> Mutasi Stok </a>
                                        <!-- BEGIN: stok kartu Modal -->

                                        {{-- </form> --}}

                                        @include('components.modal.modal-mutasi-stok')
                                        {{-- <div id="cetak-kartu-stok" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <form class="mb-3" action="{{ route('tambah-mutasi') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">

                                            <div class="modal-body px-5">
                                                <div class="preview">
                                                    <div data-tw-merge class="block sm:flex items-center mt-3">
                                                        <label data-tw-merge for="horizontal-form-1"
                                                            class="inline-block mb-2  sm:w-60">
                                                            Nama Produk
                                                        </label>
                                                        @foreach ($stoks as $stok)
                                                            <input data-tw-merge id="horizontal-form-1" type="text"
                                                                placeholder=""
                                                                value="{{ $stok->produk->nama_obat_barang }} "
                                                                name="nama_produk"
                                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                                        @endforeach
                                                    </div>
                                                    <div data-tw-merge class="block sm:flex items-center mt-3">
                                                        <label data-tw-merge for="horizontal-form-1"
                                                            class="inline-block mb-2  sm:w-60">
                                                            Tipe
                                                        </label>
                                                        @foreach ($stoks as $stok)
                                                            <input data-tw-merge id="horizontal-form-1" type="text"
                                                                placeholder="" value="{{ $stok->tipe }}"
                                                                name="tipe"
                                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                                        @endforeach
                                                    </div>
                                                    <div data-tw-merge class="block sm:flex items-center mt-3">
                                                        <label data-tw-merge for="horizontal-form-1"
                                                            class="inline-block mb-2  sm:w-60">
                                                            No. Batch
                                                        </label>
                                                        @foreach ($stoks as $stok)
                                                            <input data-tw-merge id="horizontal-form-1" type="text"
                                                                placeholder="" value="{{ $stok->no_batch }}"
                                                                name="no_batch"
                                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                                        @endforeach
                                                    </div>
                                                    <div data-tw-merge class="block sm:flex items-center mt-3">
                                                        <label data-tw-merge for="horizontal-form-1"
                                                            class="inline-block mb-2  sm:w-60">
                                                            Exp. Date
                                                        </label>
                                                        @foreach ($stoks as $stok)
                                                            <input data-tw-merge id="horizontal-form-1" type="text"
                                                                placeholder="" value="{{ $stok->exp_date }}"
                                                                name="exp_date"
                                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                                        @endforeach
                                                    </div>
                                                    <div data-tw-merge class="block sm:flex items-center mt-3">
                                                        <label data-tw-merge for="horizontal-form-1"
                                                            class="inline-block mb-2  sm:w-60">
                                                            Jurnal Stok
                                                        </label>
                                                        <input data-tw-merge id="horizontal-form-1" type="text"
                                                            placeholder="" name="jurnal_stok"
                                                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                                    </div>
                                                    <div data-tw-merge class="block sm:flex items-center mt-3">
                                                        <label data-tw-merge for="horizontal-form-1"
                                                            class="inline-block mb-2  sm:w-60">
                                                            Gudang Asal
                                                        </label>
                                                        @foreach ($stoks as $stok)
                                                            <input data-tw-merge id="horizontal-form-1" type="text"
                                                                placeholder="" value="{{ $stok->gudang }}"
                                                                name="gudang_asal"
                                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                                        @endforeach
                                                    </div>
                                                    <div data-tw-merge class="block sm:flex items-center mt-3">
                                                        <label data-tw-merge for="horizontal-form-1"
                                                            class="inline-block mb-2  sm:w-60">
                                                            Sub Rak Asal
                                                        </label>
                                                        @foreach ($stoks as $stok)
                                                            <input data-tw-merge id="horizontal-form-1" type="text"
                                                                placeholder="" value="{{ $stok->sub_rak }}"
                                                                name="subrak_baru"
                                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                                        @endforeach
                                                    </div>
                                                    <div data-tw-merge class="block sm:flex items-center mt-3">
                                                        <label data-tw-merge for="horizontal-form-1"
                                                            class="inline-block mb-2 mt-2 sm:w-60">
                                                            Gudang Baru
                                                        </label>
                                                        <select data-tw-merge aria-label="Default select example"
                                                            class="form-control" name="gudang_baru">
                                                            @foreach ($gudangs as $gudang)
                                                                <option value="{{ $gudang->id }}"
                                                                    {{ $gudang ? ($gudang->id == $gudang->id ? 'selected' : '') : '' }}>
                                                                    {{ $gudang->gudang }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div data-tw-merge class="block sm:flex items-center mt-3">
                                                        <label data-tw-merge for="horizontal-form-1"
                                                            class="inline-block mb-2 mt-2 sm:w-60">
                                                            Rak Baru
                                                        </label>
                                                        <select data-tw-merge aria-label="Default select example"
                                                            class="form-control" name="rak_baru">
                                                            @foreach ($raks as $rak)
                                                                <option value="{{ $rak->id }}"
                                                                    {{ $rak ? ($rak->id == $rak->id ? 'selected' : '') : '' }}>
                                                                    {{ $rak->rak }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div data-tw-merge class="block sm:flex items-center mt-3">
                                                        <label data-tw-merge for="horizontal-form-1"
                                                            class="inline-block mb-2 mt-2 sm:w-60">
                                                            Sub Rak Baru
                                                        </label>
                                                        <select data-tw-merge aria-label="Default select example"
                                                            class="form-control" name="subrak_baru">
                                                            @foreach ($sub_rak as $sub_rak)
                                                                <option value="{{ $sub_rak->id }}"
                                                                    {{ $sub_rak ? ($sub_rak->id == $sub_rak->id ? 'selected' : '') : '' }}>
                                                                    {{ $sub_rak->sub_rak }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div data-tw-merge class="block sm:flex items-center mt-3">
                                                        <label data-tw-merge for="horizontal-form-1"
                                                            class="inline-block mb-2 mt-2 sm:w-60">
                                                            Keterangan
                                                        </label>
                                                        @foreach ($stoks as $stok)
                                                            <textarea name="" id="" rows="3" class="form-control" name="keterangan">{{ $stok->produk->ket_satuan }}</textarea>
                                                        @endforeach
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
                        </div> --}}
                                        <!-- END: stok kartu Modal -->
                                    </div>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- END: Data List -->
    @endsection
