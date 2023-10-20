@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Produk
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal" data-tw-target="#modal-tambah">Tambah
                Produk Baru</button>
            <button class="btn btn-success text-white shadow-md mr-2">Import Excell</button>
            {{-- modal begin --}}
            @include('components.modal.modal-obat-barang', [
                'id_modal' => 'modal-tambah',
                'route' => 'tambah.obat-barang',
                'id' => '',
                'barang' => '',
            ])
            {{-- end modal --}}
            <div class="w-56 relative text-slate-500 ">
                <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
            </div>
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 mt-5 overflow-auto lg:overflow-visible">
        <div class="overflow-auto">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="">Kode obat</th>
                        <th class="">Barcode PBOm</th>
                        <th class="">Nama Produk</th>
                        <th class="">Golongan</th>
                        <th class="">Sub Golongan</th>
                        <th class="">Produsen</th>
                        <th class="">Tipe</th>
                        <th class="">No Ijin Edar</th>
                        <th class="">Komposisi</th>
                        <th class="w-34">Zat Aktif</th>
                        <th class="">Bentuk Kekuatan</th>
                        <th class="">Status</th>
                        <th class="text-center ">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($obat_barang as $barang)
                        <tr class="intro-x">
                            <td class="w-40">{{ $barang->kode_obat_barang }}</td>
                            <td class="">{{ $barang->kode_obat_bpom }}</td>
                            <td class="">{{ $barang->nama_obat_barang }}</td>
                            <td class="">{{ $barang->golongan }}</td>
                            <td class="">{{ $barang->sub_golongan }}</td>
                            <td class="">{{ $barang->produsen }}</td>
                            <td class="">{{ $barang->tipe }}</td>
                            <td class="">{{ $barang->no_ijin_edar }}</td>
                            <td class="">{{ $barang->komposisi }}</td>
                            <td class="">{{ $barang->zat_aktif }}</td>
                            <td class="">{{ $barang->bentuk_kekuatan }}</td>
                            <td class="">{{ $barang->status == 1 ? 'Aktif' : 'Tidak Aktif' }}</td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="credit-card"
                                            class="w-4 h-4 mr-1"></i> Harga </a>
                                    <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal"
                                        data-tw-target="#modal-edit{{ $barang->id }}"> <i data-feather="check-square"
                                            class="w-4 h-4 mr-1"></i> Edit </a>
                                    <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                        data-tw-target="#delete-confirmation-modal{{ $barang->id }}"> <i
                                            data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                    <!-- BEGIN: Delete Confirmation Modal -->
                                    @include('components.modal-delete', [
                                        'id_modal' => 'delete-confirmation-modal',
                                        'id' => $barang->id,
                                        'route' => 'delete.obat-barang',
                                    ])
                                    <!-- END: Delete Confirmation Modal -->

                                    {{-- modal edit --}}
                                    @include('components.modal.modal-obat-barang', [
                                        'id_modal' => 'modal-edit',
                                        'route' => 'edit.obat-barang',
                                        'id' => $barang->id,
                                    ])
                                    {{-- end modal edit --}}
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="intro-x">
                            <td class="text-center font-bold" colspan="13">Belum ada data tersedia</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <!-- END: Data List -->
    </div>
@endsection
