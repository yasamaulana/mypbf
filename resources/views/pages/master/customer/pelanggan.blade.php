@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Pelanggan
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal" data-tw-target="#tambah-pelanggan">Tambah
                Pelanggan</button>
            <!-- BEGIN: Modal Content -->
            @include('components.modal.modal-pelanggan', [
                'id_modal' => 'tambah-pelanggan',
                'route' => 'tambah.pelanggan',
                'id' => '',
                'pelanggan' => '',
            ])
            <!-- END: Modal Content -->

            <div class="w-56 relative text-slate-500 ">
                <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <div class="overflow-auto">
                <table class="table table-report -mt-2">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">Kode</th>
                            <th class="whitespace-nowrap">Nama Pelanggan</th>
                            <th class="whitespace-nowrap">Alamat</th>
                            <th class="whitespace-nowrap">No. SIA</th>
                            <th class="whitespace-nowrap">Tgl. Exp SIA</th>
                            <th class="whitespace-nowrap">No. Tlp</th>
                            <th class="whitespace-nowrap">Apoteker</th>
                            <th class="whitespace-nowrap">No. SIPA</th>
                            <th class="whitespace-nowrap">Tgl. Exp SIPA</th>
                            <th class="whitespace-nowrap">Kelompok</th>
                            <th class="whitespace-nowrap">Jumlah Piutang</th>
                            <th class="text-center whitespace-nowrap">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pelanggans as $pelanggan)
                            <tr class="intro-x">
                                <td class="">{{ $pelanggan->kode }}</td>
                                <td class="">{{ $pelanggan->nama }}</td>
                                <td class="">{{ $pelanggan->alamat }}</td>
                                <td class="">{{ $pelanggan->no_sia }}</td>
                                <td class="">{{ $pelanggan->exp_date_sia }}</td>
                                <td class="">{{ $pelanggan->nomor }}</td>
                                <td class="">{{ $pelanggan->apoteker }}</td>
                                <td class="">{{ $pelanggan->no_sipa }}</td>
                                <td class="">{{ $pelanggan->exp_date_sipa }}</td>
                                <td class="">{{ $pelanggan->kelompok }}</td>
                                <td class="">{{ $pelanggan->batas_piutang }}</td>
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal"
                                            data-tw-target="#edit-pelanggan{{ $pelanggan->id }}"> <i
                                                data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                        <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                            data-tw-target="#delete-confirmation-modal{{ $pelanggan->id }}"> <i
                                                data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                        <!-- BEGIN: Delete Confirmation Modal -->
                                        @include('components.modal-delete', [
                                            'id_modal' => 'delete-confirmation-modal',
                                            'id' => $pelanggan->id,
                                            'route' => 'delete.pelanggan',
                                        ])
                                        <!-- END: Delete Confirmation Modal -->
                                        @include('components.modal.modal-pelanggan', [
                                            'id_modal' => 'edit-pelanggan',
                                            'route' => 'edit.pelanggan',
                                            'id' => $pelanggan->id,
                                        ])
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr class="intro-x">
                                <td class="font-bold text-center" colspan="12">Belum ada data tersedia</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END: Data List -->
    </div>
@endsection
