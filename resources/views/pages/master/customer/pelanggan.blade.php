@extends('layout.main')

@section('main')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            Pelanggan
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="flex flex-wrap items-center col-span-12 mt-2 intro-y sm:flex-nowrap">
            <button class="mr-2 shadow-md btn btn-primary" data-tw-toggle="modal" data-tw-target="#tambah-pelanggan">Tambah
                Pelanggan</button>
            <!-- BEGIN: Modal Content -->
            @include('components.modal.modal-pelanggan', [
                'id_modal' => 'tambah-pelanggan',
                'route' => 'tambah.pelanggan',
                'id' => '',
                'pelanggan' => '',
            ])
            <!-- END: Modal Content -->

            <div class="relative w-56 text-slate-500 ">
                <input type="text" class="w-56 pr-10 form-control box" placeholder="Search...">
                <i class="absolute inset-y-0 right-0 w-4 h-4 my-auto mr-3" data-feather="search"></i>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="col-span-12 overflow-auto intro-y lg:overflow-visible">
            <div class="overflow-auto">
                <table class="table -mt-2 table-report">
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
                                <td class="">{{ date('d-m-Y', strtotime($pelanggan->exp_date_sia)) }}</td>
                                <td class="">{{ $pelanggan->nomor }}</td>
                                <td class="">{{ $pelanggan->apoteker }}</td>
                                <td class="">{{ $pelanggan->no_sipa }}</td>
                                <td class="">{{ date('d-m-Y', strtotime($pelanggan->exp_date_sipa)) }}
                                </td>
                                <td class="">{{ $pelanggan->kelompok }}</td>
                                <td class="">{{ $pelanggan->batas_piutang }}</td>
                                <td class="w-56 table-report__action">
                                    <div class="flex items-center justify-center">
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
