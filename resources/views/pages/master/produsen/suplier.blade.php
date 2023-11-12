@extends('layout.main')

@section('main')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            Suplier
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="flex flex-wrap items-center col-span-12 mt-2 intro-y sm:flex-nowrap">
            <button class="mr-2 shadow-md btn btn-primary" data-tw-toggle="modal" data-tw-target="#tambah-suplier">Tambah
                +</button>
            <!-- BEGIN: Modal Content -->
            @include('components.modal.modal-suplier', [
                'id_modal' => 'tambah-suplier',
                'route' => 'tambah.suplier',
                'id' => '',
                'sup' => '',
            ])
            @include('components.search', [
                'id_table' => 'myTable',
            ])
        </div>
        <!-- BEGIN: Data List -->
        <div class="col-span-12 overflow-auto intro-y lg:overflow-visible">
            <table class="table -mt-2 table-report" id="myTable">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">Kode</th>
                        <th class="whitespace-nowrap">Kode E-Report</th>
                        <th class="whitespace-nowrap">Nama Suplier</th>
                        <th class="whitespace-nowrap">Alamat</th>
                        <th class="whitespace-nowrap">NPWP</th>
                        <th class="whitespace-nowrap">No. Telp</th>
                        <th class="whitespace-nowrap">Jumlah Sisa Hutang</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($suplier as $sup)
                        <tr class="intro-x">
                            <td class="">{{ $sup->kode }}</td>
                            <td class="">{{ $sup->kode_e_report }}</td>
                            <td class="">{{ $sup->nama_suplier }}</td>
                            <td class="">{{ $sup->alamat }}</td>
                            <td class="">{{ $sup->npwp }}</td>
                            <td class="">{{ $sup->no_telepon }}</td>
                            <td class="">Contoh Data</td>
                            <td class="w-56 table-report__action">
                                <div class="flex items-center justify-center">
                                    <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal"
                                        data-tw-target="#edit-suplier{{ $sup->id }}"> <i data-feather="check-square"
                                            class="w-4 h-4 mr-1"></i> Edit </a>
                                    <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                        data-tw-target="#delete-confirmation-modal{{ $sup->id }}"> <i
                                            data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                    <!-- BEGIN: Delete Confirmation Modal -->
                                    @include('components.modal-delete', [
                                        'id_modal' => 'delete-confirmation-modal',
                                        'id' => $sup->id,
                                        'route' => 'delete.suplier',
                                    ])
                                    <!-- END: Delete Confirmation Modal -->

                                    @include('components.modal.modal-suplier', [
                                        'id_modal' => 'edit-suplier',
                                        'route' => 'edit.suplier',
                                        'id' => $sup->id,
                                    ])
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="intro-x">
                            <td class="font-bold text-center" colspan="8">Belum ada data tersedia!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
