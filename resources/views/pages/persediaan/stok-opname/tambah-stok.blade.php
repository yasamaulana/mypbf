@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <a href="/stok-opname"><button class="btn btn-secondary mr-2"><i data-feather="corner-up-left" class="w-4 h-4 mr-1"></i>
                Kembali</button></a>
        <h2 class="text-lg font-medium mr-auto">
            Tambah Data Stok Opname
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 gap-4 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <div data-tw-merge class="block sm:flex items-center">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-24">
                    Gudang
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
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
            <div class="">
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
                            <th class="whitespace-nowrap">Jenis</th>
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
                                            class="w-4 h-4 mr-1"></i> Stok Opname </a>
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
                            <th class="whitespace-nowrap">Ket. Satuan</th>
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
                                                data-feather="file-minus" class="w-4 h-4 mr-1"></i> Stok Opname </a>
                                        <!-- BEGIN: stok kartu Modal -->
                                        @include('components.modal.modal-tambah-opname')

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
