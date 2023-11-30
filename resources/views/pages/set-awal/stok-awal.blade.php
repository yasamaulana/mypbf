@extends('layout.main')

@section('main')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            Stok Awal
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="flex flex-wrap items-center col-span-12 mt-2 intro-y sm:flex-nowrap">
            <button class="mr-2 shadow-md btn btn-primary" data-tw-toggle="modal" data-tw-target="#modal-tambah">Tambah
                Stok Awal</button>
            <!-- BEGIN: Modal Content -->
            @include('components.modal.modal-stok-awal', [
                'id_modal' => 'modal-tambah',
                'route' => 'tambah.stok-awal',
                'id' => '',
                'stok' => '',
                'id_dropdown' => 'obatTambah',
            ])
            <!-- END: Modal Content -->

            <div class="relative w-56 text-slate-500 ">
                <input type="text" class="w-56 pr-10 form-control box" placeholder="Search...">
                <i class="absolute inset-y-0 right-0 w-4 h-4 my-auto mr-3" data-feather="search"></i>
            </div>
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="col-span-12 mt-5 overflow-auto intro-y lg:overflow-visible">
        <div class="overflow-x-auto">
            <table class="table -mt-2 table-report">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">No.</th>
                        <th class="whitespace-nowrap">No. Reff</th>
                        <th class="whitespace-nowrap">Nama Obat/Barang</th>
                        <th class="whitespace-nowrap">No. batch</th>
                        <th class="whitespace-nowrap">Exp. Date</th>
                        <th class="whitespace-nowrap">Satuan</th>
                        <th class="whitespace-nowrap">Isi</th>
                        <th class="whitespace-nowrap">Sat. Jual Terkecil</th>
                        <th class="whitespace-nowrap">Ket. Satuan</th>
                        <th class="whitespace-nowrap">Stok Saat Ini</th>
                        <th class="whitespace-nowrap">HPP</th>
                        <th class="whitespace-nowrap">Gudang</th>
                        <th class="whitespace-nowrap">Rak</th>
                        <th class="whitespace-nowrap">Sub Rak</th>
                        <th class="whitespace-nowrap">Jenis</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($stoks as $stok)
                        <tr class="intro-x">
                            <td class="w-40">{{ $loop->iteration }}</td>
                            <td class="">{{ $stok->no_reff }}</td>
                            <td class="">{{ $stok->produk->nama_obat_barang }}</td>
                            <td class="">{{ $stok->no_batch }}</td>
                            <td class="">{{ date('d-m-Y', strtotime($stok->exp_date)) }}</td>
                            <td class="">{{ $stok->satuan }}</td>
                            <td class="">{{ $stok->produk->isi }}</td>
                            <td class="">{{ $stok->produk->satuan_jual_terkecil }}</td>
                            <td class="">{{ $stok->produk->ket_satuan }}</td>
                            <td class="">{{ $stok->jumlah }}</td>
                            <td class="">{{ $stok->hpp }}</td>
                            <td class="">{{ $stok->gudang }}</td>
                            <td class="">{{ $stok->rak }}</td>
                            <td class="">{{ $stok->sub_rak }}</td>
                            <td class="">{{ $stok->tipe }}</td>
                            <td class="table-report__action w-72">
                                <div class="flex items-center justify-center">
                                    <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal"
                                        data-tw-target="#modal-edit{{ $stok->id }}"> <i data-feather="check-square"
                                            class="w-4 h-4 mr-1"></i> Edit </a>
                                    <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                        data-tw-target="#delete-confirmation-modal{{ $stok->id }}"> <i
                                            data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                    <a class="flex items-center mx-3 mr-3 text-warning"
                                        href="{{ route('setHarga', ['id' => $stok->id]) }}"> <i data-feather="file-text"
                                            class="text-xl"></i> Update Harga </a>
                                    <!-- BEGIN: Delete Confirmation Modal -->
                                    @include('components.modal-delete', [
                                        'id_modal' => 'delete-confirmation-modal',
                                        'id' => $stok->id,
                                        'route' => 'delete.stok-awal',
                                    ])
                                    <!-- END: Delete Confirmation Modal -->

                                    @include('components.modal.modal-stok-awal', [
                                        'id_modal' => 'modal-edit',
                                        'route' => 'edit.stok-awal',
                                        'id' => $stok->id,
                                        'id_dropdown' => 'obatEdit',
                                    ])
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="intro-x">
                            <td class="font-bold text-center" colspan="16">Belum ada data tersedia</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <!-- END: Data List -->
@endsection
