@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Data Set Akses
        </h2>
    </div>
    @if (session('success'))
        @include('components.alert')
    @endif
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            @can('tambah set akses')
                <button class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal" data-tw-target="#tambah-akses">Tambah
                    Akses</button>
            @endcan
            <!-- BEGIN: Modal Content -->
            @include('components.modal.akses-modal', [
                'id_modal' => 'tambah-akses',
                'role' => '',
                'route' => 'tambah.set_akses',
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
                        <th class="whitespace-nowrap">No</th>
                        <th class="whitespace-nowrap">Nama Tingkat Akses</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($roles as $role)
                        <tr class="intro-x">
                            <td class="w-40">{{ $loop->iteration }}</td>
                            <td class="">{{ $role->name }}</td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    {{-- button start --}}
                                    @can('delete set akses')
                                        <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                            data-tw-target="#delete-confirmation-modal{{ $role->id }}"> <i
                                                data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                    @endcan
                                    @can('edit set akses')
                                        <a class="flex items-center mr-3 text-warning" data-tw-toggle="modal"
                                            data-tw-target="#akses-modal{{ $role->id }}" href="javascript:;"> <i
                                                data-feather="key" class="w-4 h-4 mr-1 ml-3"></i> Akses </a>
                                    @endcan
                                    {{-- end button --}}

                                    <!-- BEGIN: Delete Confirmation Modal -->
                                    @include('components.modal-delete', [
                                        'id_modal' => 'delete-confirmation-modal',
                                        'id' => $role->id,
                                        'route' => 'delete.set_akses',
                                    ])

                                    <!-- BEGIN: Akses Modal -->
                                    @include('components.modal.akses-modal', [
                                        'id_modal' => 'akses-modal' . $role->id,
                                        'role' => $role,
                                        'route' => 'edit.set_akses',
                                    ])
                                    <!-- END: Akses Modal -->
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="intro-x">
                            <td class="font-bold text-center" colspan="3">Belum Tersedia Data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
    </div>
@endsection
