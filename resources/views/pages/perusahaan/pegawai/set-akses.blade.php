@extends('layout.main')

@section('main')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            Data Set Akses
        </h2>
    </div>
    @if (session('success'))
        @include('components.alert')
    @endif
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="flex flex-wrap items-center col-span-12 mt-2 intro-y sm:flex-nowrap">
            @can('tambah set akses')
                <button class="mr-2 shadow-md btn btn-primary" data-tw-toggle="modal" data-tw-target="#tambah-akses">Tambah
                    +</button>
            @endcan
            <!-- BEGIN: Modal Content -->
            @include('components.modal.akses-modal', [
                'id_modal' => 'tambah-akses',
                'role' => '',
                'route' => 'tambah.set_akses',
            ])
            <!-- END: Modal Content -->

            @include('components.search', [
                'id_table' => 'myTable',
            ])
        </div>
        <!-- BEGIN: Data List -->
        <div class="col-span-12 overflow-auto intro-y lg:overflow-visible">
            <table class="table -mt-2 table-report" id="myTable">
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
                            <td class="w-56 table-report__action">
                                <div class="flex items-center justify-center">
                                    {{-- button start --}}
                                    @can('delete set akses')
                                        <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                            data-tw-target="#delete-confirmation-modal{{ $role->id }}"> <i
                                                data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                    @endcan
                                    @can('edit set akses')
                                        <a class="flex items-center mr-3 text-warning" data-tw-toggle="modal"
                                            data-tw-target="#akses-modal{{ $role->id }}" href="javascript:;"> <i
                                                data-feather="key" class="w-4 h-4 ml-3 mr-1"></i> Akses </a>
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
