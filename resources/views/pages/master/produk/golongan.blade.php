@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Golongan
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal"
                data-tw-target="#tambah-golongan">Tambah</button>
            <!-- BEGIN: Modal Content -->
            @include('components.modal.modal-golongan', [
                'id_modal' => 'tambah-golongan',
                'route' => 'tambah.golongan',
                'id' => '',
                'golongan' => '',
            ])
            <!-- END: Modal Content -->

            <div class="w-56 relative text-slate-500 ">
                <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">Nomor</th>
                        <th class="whitespace-nowrap">Nama Golongan</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($golongans as $golongan)
                        <tr class="intro-x">
                            <td class="w-40">{{ $loop->iteration }}</td>
                            <td class="">{{ $golongan->golongan }}</td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal"
                                        data-tw-target="#edit-golongan{{ $golongan->id }}"> <i data-feather="check-square"
                                            class="w-4 h-4 mr-1"></i> Edit </a>
                                    <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                        data-tw-target="#delete-confirmation-modal{{ $golongan->id }}"> <i
                                            data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                    <!-- BEGIN: Delete Confirmation Modal -->
                                    @include('components.modal-delete', [
                                        'id_modal' => 'delete-confirmation-modal',
                                        'id' => $golongan->id,
                                        'route' => 'delete.golongan',
                                    ])
                                    <!-- END: Delete Confirmation Modal -->
                                    @include('components.modal.modal-golongan', [
                                        'id_modal' => 'edit-golongan',
                                        'route' => 'edit.golongan',
                                        'id' => $golongan->id,
                                    ])
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="intro-x">
                            <td class="font-bold text-center" colspan="3">Belum ada data tersedia</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
    </div>
@endsection
