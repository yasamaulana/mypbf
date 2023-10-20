@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Stok Awal
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal" data-tw-target="#modal-tambah">Tambah
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

            <div class="w-56 relative text-slate-500 ">
                <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
            </div>
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible mt-5">
        <div class="overflow-x-auto">
            <table class="table table-report -mt-2">
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
                            <td class="">{{ $stok->obatBarang->nama_obat_barang }}</td>
                            <td class="">{{ $stok->obatBarang->kode_obat_barang }}</td>
                            <td class="">{{ $stok->exp_date }}</td>
                            <td class="">{{ $stok->obatBarang->satuan_dasar_beli }}</td>
                            <td class="">{{ $stok->obatBarang->isi }}</td>
                            <td class="">{{ $stok->obatBarang->satuan_jual_terkecil }}</td>
                            <td class="">{{ $stok->obatBarang->ket_satuan }}</td>
                            <td class="">{{ $stok->jumlah }}</td>
                            <td class="">{{ $stok->hpp }}</td>
                            <td class="">{{ $stok->gudang }}</td>
                            <td class="">{{ $stok->rak }}</td>
                            <td class="">{{ $stok->sub_rak }}</td>
                            <td class="">{{ $stok->jenis }}</td>
                            <td class="table-report__action w-72">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal"
                                        data-tw-target="#modal-edit{{ $stok->id }}"> <i data-feather="check-square"
                                            class="w-4 h-4 mr-1"></i> Edit </a>
                                    <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                        data-tw-target="#delete-confirmation-modal{{ $stok->id }}"> <i
                                            data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                    <a class="flex items-center text-warning mr-3 mx-3"
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
                            <td class="text-center font-bold" colspan="16">Belum ada data tersedia</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <!-- END: Data List -->
@endsection
