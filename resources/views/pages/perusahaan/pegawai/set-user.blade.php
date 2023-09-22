@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            User Aplikasi
        </h2>
    </div>
    @if (session('success'))
        @include('components.alert')
    @endif
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            @can('tambah set user')
                <button class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal" data-tw-target="#basic-modal-preview">Tambah
                    User</button>
            @endcan
            <!-- BEGIN: Modal Content -->
            <div id="basic-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body p-10">
                            <form action="{{ route('tambah.set_user') }}" method="POST">
                                @csrf
                                <div class="preview">
                                    <div class="intro-y col-span-12 sm:col-span-6 mt-3">
                                        <label for="input-wizard-6" class="form-label">Nama Pegawai</label>
                                        <select id="input-wizard-6" class="form-select" required name="name">
                                            @foreach ($pegawais as $pegawai)
                                                <option>{{ $pegawai->nama_pegawai }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="intro-y col-span-12 sm:col-span-6 mt-3">
                                        <label for="input-wizard-6" class="form-label">Tingkat Akses</label>
                                        <select id="input-wizard-6" class="form-select" required name="role">
                                            @foreach ($roles as $role)
                                                <option>{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div>
                                        <label for="vertical-form-1" class="form-label">Email</label>
                                        <input id="vertical-form-1" type="email" class="form-control"
                                            placeholder="Masukan email anda" required name="email">
                                    </div>
                                    <div class="mt-3">
                                        <label for="vertical-form-1" class="form-label">Password</label>
                                        <input id="vertical-form-1" type="password" class="form-control" placeholder=""
                                            required name="password">
                                    </div>
                                    <div class="mt-3">
                                        <div class="form-check form-switch">
                                            <label class="form-check-label" for="checkbox-switch-7">Aktif</label>
                                            <input id="checkbox-switch-7" class="form-check-input mx-3" type="checkbox"
                                                checked name="status">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-5">Simpan</button>
                                </div>
                            </form>
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
                        <th class="whitespace-nowrap">No</th>
                        <th class="whitespace-nowrap">Email</th>
                        <th class="whitespace-nowrap">Nama Pegawai</th>
                        <th class="whitespace-nowrap">Tingkat Akses</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="intro-x">
                            <td class="w-40">{{ $loop->iteration }}</td>
                            <td class="">{{ $user->email }}</td>
                            <td class="">{{ $user->name }}</td>
                            <td class="">{{ $user->status == 'main' ? 'Akun Utama' : $user->getRoleNames()->first() }}
                            </td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    @if (!$user->id == Auth::user()->id || !$user->status == 'main')
                                        @can('edit set user')
                                            <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal"
                                                data-tw-target="#edit-modal{{ $user->id }}"> <i data-feather="check-square"
                                                    class="w-4 h-4 mr-1"></i> Edit </a>
                                        @endcan
                                        @can('delete set user')
                                            <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                                data-tw-target="#delete-confirmation-modal{{ $user->id }}"> <i
                                                    data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                        @endcan
                                    @elseif($user->status != 'main')
                                        @can('edit set user')
                                            <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal"
                                                data-tw-target="#edit-modal{{ $user->id }}"> <i data-feather="check-square"
                                                    class="w-4 h-4 mr-1"></i> Edit </a>
                                        @endcan
                                    @else
                                        <p class="font-bold">Tidak Tersedia Aksi</p>
                                    @endif
                                    <!-- BEGIN: Delete Confirmation Modal -->
                                    @include('components.modal-delete', [
                                        'id_modal' => 'delete-confirmation-modal',
                                        'id' => $user->id,
                                        'route' => 'delete.set_user',
                                    ])
                                    <!-- END: Delete Confirmation Modal -->

                                    <!-- BEGIN: Modal Content -->
                                    <div id="edit-modal{{ $user->id }}" class="modal" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body p-10">
                                                    <form action="{{ route('edit.set_user', ['id' => $user->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        <div class="preview">
                                                            <div class="intro-y col-span-12 sm:col-span-6 mt-3">
                                                                <label for="input-wizard-6" class="form-label">Nama
                                                                    Pegawai</label>
                                                                <select id="input-wizard-6" class="form-select" required
                                                                    name="name">
                                                                    @foreach ($pegawais as $pegawai)
                                                                        <option
                                                                            {{ $user->name == $pegawai->nama_pegawai ? 'selected' : '' }}>
                                                                            {{ $pegawai->nama_pegawai }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="intro-y col-span-12 sm:col-span-6 mt-3">
                                                                <label for="input-wizard-6" class="form-label">Tingkat
                                                                    Akses</label>
                                                                <select id="input-wizard-6" class="form-select" required
                                                                    name="role">
                                                                    @foreach ($roles as $role)
                                                                        <option
                                                                            {{ $user->getRoleNames()->first() == $role->name ? 'selected' : '' }}>
                                                                            {{ $role->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div>
                                                                <label for="vertical-form-1"
                                                                    class="form-label">Email</label>
                                                                <input id="vertical-form-1" type="email"
                                                                    class="form-control" placeholder="Masukan email anda"
                                                                    required name="email" value="{{ $user->email }}">
                                                            </div>
                                                            <div class="mt-3">
                                                                <label for="vertical-form-1"
                                                                    class="form-label">Password</label>
                                                                <input id="vertical-form-1" type="password"
                                                                    class="form-control" placeholder="" required
                                                                    name="password" value="{{ $user->password }}">
                                                            </div>
                                                            <div class="mt-3">
                                                                <div class="form-check form-switch">
                                                                    <label class="form-check-label"
                                                                        for="checkbox-switch-7">Aktif</label>
                                                                    <input id="checkbox-switch-7"
                                                                        class="form-check-input mx-3" type="checkbox"
                                                                        checked name="status"
                                                                        {{ $user->status == '1' ? 'checked' : '' }}>
                                                                </div>
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-primary mt-5">Simpan</button>
                                                        </div>
                                                    </form>
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
