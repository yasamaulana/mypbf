@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Sub Rayon
        </h2>
    </div>
    @if (session('success'))
        @include('components.alert')
    @endif
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal" data-tw-target="#basic-modal-preview">Tambah
                Sub Rayon</button>
            <!-- BEGIN: Modal Content -->
            <div id="basic-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body p-10">
                            <div class="preview">
                                <form action="{{ route('tambah.sub_rayon') }}" method="POST">
                                    @csrf
                                    <div>
                                        <label for="vertical-form-1" class="form-label">Sub Rayon</label>
                                        <input id="vertical-form-1" type="text" class="form-control"
                                            placeholder="Masukan Sub Rayon" name="sub_rayon">
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-5">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                    <th class="whitespace-nowrap">Nama Sub Rayon</th>
                    <th class="text-center whitespace-nowrap">Action</th>
                </tr>
            </thead>
            <tbody>
                @if (!$subRayons->isNotEmpty())
                    <tr class="intro-x">
                        <td class="text-center font-bold" colspan="3">Belum ada data tersedia</td>
                    </tr>
                @endif
                @foreach ($subRayons as $rayon)
                    <tr class="intro-x">
                        <td class="w-40">{{ $loop->iteration }}</td>
                        <td class="">{{ $rayon->sub_rayon }}</td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal"
                                    data-tw-target="#edit-rayon{{ $rayon->id }}"> <i data-feather="check-square"
                                        class="w-4 h-4 mr-1"></i> Edit </a>
                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                    data-tw-target="#delete-confirmation-modal{{ $rayon->id }}"> <i
                                        data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                <!-- BEGIN: Delete Confirmation Modal -->
                                @include('components.modal-delete', [
                                    'id_modal' => 'delete-confirmation-modal',
                                    'id' => $rayon->id,
                                    'route' => 'delete.sub_rayon',
                                ])
                                <!-- END: Delete Confirmation Modal -->

                                <!-- BEGIN: edit Content -->
                                <div id="edit-rayon{{ $rayon->id }}" class="modal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body p-10">
                                                <div class="preview">
                                                    <form action="{{ route('edit.sub_rayon', ['id' => $rayon->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        <div>
                                                            <label for="vertical-form-1" class="form-label">Area
                                                                Rayon</label>
                                                            <input id="vertical-form-1" type="text" class="form-control"
                                                                placeholder="Masukan Area Rayon" name="sub_rayon"
                                                                value="{{ $rayon->sub_rayon }}">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary mt-5">Simpan</button>
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
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- END: Data List -->
    </div>
@endsection
