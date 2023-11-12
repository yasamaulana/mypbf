@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Data Stok Opname
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="/data-stok-opname"><button class="btn btn-primary shadow-md mr-2">Tambah Data Stok Opname</button></a>
            <button class="btn btn-warning shadow-md mr-2" data-tw-toggle="modal" data-tw-target="#basic-modal-preview">Tambah
                Stok Masuk</button>
            <!-- BEGIN: Modal Content -->
            @include('components.modal.modal-masuk-opname', [
                'id_modal' => 'modal-tambah',
                'route' => 'tambah-opname-masuk',
                'id' => '',
                'stok' => '',
                'id_dropdown' => 'obatTambah',
            ])
            <!-- END: Modal Content -->
            <div data-tw-merge class="block sm:flex items-center ml-5">
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
            <div data-tw-merge class="block sm:flex items-center ml-5">
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
            <div data-tw-merge class="block sm:flex items-center ml-5">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-32">
                    Sub Rak
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control">
                    @foreach ($sub_rak as $sub_rak)
                        <option value="{{ $sub_rak->id }}"
                            {{ $sub_rak ? ($sub_rak->id == $sub_rak->id ? 'selected' : '') : '' }}>
                            {{ $sub_rak->sub_rak }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <div class="w-56 relative text-slate-500 mt-5">
            <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
            <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
        </div>
        <div class="intro-y box mt-5">
            <div class="overflow-x-auto">
                <table class="table mt-2">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">No</th>
                            <th class="whitespace-nowrap">Tgl SO</th>
                            <th class="whitespace-nowrap">Nama Produk</th>
                            <th class="whitespace-nowrap">No. Batch</th>
                            <th class="whitespace-nowrap">Exp. Date</th>
                            <th class="whitespace-nowrap">Stok Tercatat</th>
                            <th class="whitespace-nowrap">Stok Real</th>
                            <th class="whitespace-nowrap">Selisih Stok</th>
                            <th class="whitespace-nowrap">Nominal Selisih</th>
                            <th class="whitespace-nowrap">Keterangan</th>
                            <th class="whitespace-nowrap">Gudang</th>
                            <th class="whitespace-nowrap">Rak</th>
                            <th class="whitespace-nowrap">Sub Rak</th>
                            <th class="whitespace-nowrap">Ket Satuan</th>
                            <th class="whitespace-nowrap">Jenis</th>
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
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                            <td class="">Contoh Data</td>
                        </tr>
                        <tr>
                            <td colspan="15" class="font-bold text-center">Total</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
