@extends('layout.main')

@section('main')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            Jabatan
        </h2>
    </div>
    @include('components.alert')
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="flex flex-wrap items-center col-span-12 mt-2 intro-y sm:flex-nowrap">
            @can('tambah jabatan')
                <button class="mr-2 shadow-md btn btn-primary" data-tw-toggle="modal" data-tw-target="#basic-modal-preview">Tambah
                    Jabatan</button>
            @endcan
            <!-- BEGIN: Modal Content -->
            <div id="basic-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="p-10 modal-body">
                            <div class="preview">
                                <form action="{{ route('create.jabatan') }}" method="POST">
                                    @csrf
                                    <div>
                                        <label for="vertical-form-1" class="form-label">Jabatan</label>
                                        <input id="vertical-form-1" name="jabatan" type="text" class="form-control"
                                            placeholder="Masukan jabatan Anda">
                                    </div>
                                    <button class="mt-5 btn btn-primary" type="submit">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Modal Content -->

            <div class="relative w-56 text-slate-500 ">
                <input type="text" class="w-56 pr-10 form-control box" placeholder="Search...">
                <i class="absolute inset-y-0 right-0 w-4 h-4 my-auto mr-3" data-feather="search"></i>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="col-span-12 overflow-auto intro-y lg:overflow-visible">
            <table class="table -mt-2 table-report">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">Nomor</th>
                        <th class="whitespace-nowrap">Jabatan</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($jabatans as $jabatan)
                        <tr class="intro-x">
                            <td class="w-40">1</td>
                            <td class="">{{ $jabatan->jabatan }}</td>
                            <td class="w-56 table-report__action">
                                <div class="flex items-center justify-center">
                                    @can('edit jabatan')
                                        <a data-tw-toggle="modal" data-tw-target="#edit-modal{{ $jabatan->id }}"
                                            class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square"
                                                class="w-4 h-4 mr-1"></i> Edit </a>
                                    @endcan
                                    @can('delete jabatan')
                                        <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                            data-tw-target="#delete-confirmation-modal{{ $jabatan->id }}"> <i
                                                data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                    @endcan

                                    @include('components.modal-delete', [
                                        'id_modal' => 'delete-confirmation-modal',
                                        'route' => 'delete.jabatan',
                                        'id' => $jabatan->id,
                                    ])

                                    <!-- BEGIN: Modal Content -->
                                    <div id="edit-modal{{ $jabatan->id }}" class="modal" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="p-10 modal-body">
                                                    <div class="preview">
                                                        <form action="{{ route('edit.jabatan', ['id' => $jabatan->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            <div>
                                                                <label for="vertical-form-1"
                                                                    class="form-label">Jabatan</label>
                                                                <input value="{{ $jabatan->jabatan }}" id="vertical-form-1"
                                                                    name="jabatan" type="text" class="form-control"
                                                                    placeholder="Masukan jabatan Anda">
                                                            </div>
                                                            <button class="mt-5 btn btn-primary"
                                                                type="submit">Simpan</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Modal Content -->
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="intro-x">
                            <td colspan="3" class="font-bold text-center">Data belum tersedia</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
    </div>
@endsection
