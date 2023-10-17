@php
    use App\Models\Jabatan;
@endphp

@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Nama Pegawai
        </h2>
    </div>
    @if (session('success'))
        @include('components.alert')
    @endif
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            @can('tambah nama pegawai')
                <button class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal" data-tw-target="#basic-modal-preview">Tambah
                    Pegawai</button>
            @endcan
            <!-- BEGIN: Modal Content -->
            <div id="basic-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <form action="{{ route('create.pegawai') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body p-10">
                                <div class="preview">
                                    <div class="sm:flex gap-5 w-full">
                                        <div class="w-full">
                                            <div>
                                                <label for="vertical-form-1" class="form-label">NIP</label>
                                                <input required name="nip" id="vertical-form-1" type="text"
                                                    class="form-control" placeholder="">
                                            </div>
                                            <div>
                                                <label for="vertical-form-1" class="form-label mt-3">Nama Pegawai</label>
                                                <input required name="nama_pegawai" id="vertical-form-1" type="text"
                                                    class="form-control" placeholder="">
                                            </div>
                                            <div>
                                                <label for="vertical-form-1" class="form-label mt-3">No. BPJS TK</label>
                                                <input required name="no_bpjs_tk" id="vertical-form-1" type="text"
                                                    class="form-control" placeholder="">
                                            </div>
                                            <div>
                                                <label for="vertical-form-1" class="form-label mt-3">Alamat</label>
                                                <input required name="alamat" id="vertical-form-1" type="text"
                                                    class="form-control" placeholder="">
                                            </div>
                                            <div>
                                                <label for="vertical-form-1" class="form-label mt-3">Nomor Telepon</label>
                                                <input required name="no_telepon" id="vertical-form-1" type="text"
                                                    class="form-control" placeholder="">
                                            </div>
                                            <div>
                                                <label for="vertical-form-1" class="form-label mt-3">Tanggal Lahir</label>
                                                <input required name="tgl_lahir" id="vertical-form-1" type="date"
                                                    class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div>
                                                <label for="vertical-form-1" class="form-label mt-3 sm:mt-0">Jenis
                                                    Kelamin</label>
                                                <select required name="jenis_kelamin" id="jenis_kelamin"
                                                    data-placeholder="jenis_kelamin" class="form-control w-full">
                                                    <option value="Laki-laki">Laki laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for="vertical-form-1" class="form-label mt-3">Jabatan</label>
                                                <select required name="jabatan" id="jabatan" data-placeholder="Jabatan"
                                                    class="form-control w-full">
                                                    @foreach (Jabatan::where('id_perusahaan', Auth::user()->id_perusahaan)->get() as $jabatan)
                                                        <option value="{{ $jabatan->jabatan }}">
                                                            {{ $jabatan->jabatan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="flex gap-3">
                                                <div class="form-check form-switch mt-3">
                                                    <label class="form-check-label"
                                                        for="checkbox-switch-7">Marketing</label>
                                                    <input name="marketing" id="checkbox-switch-7"
                                                        class="form-check-input mx-3" type="checkbox">
                                                </div>
                                                <div class="form-check form-switch mt-3">
                                                    <label class="form-check-label" for="checkbox-switch-7">Kolektor</label>
                                                    <input name="kolektor" id="checkbox-switch-7"
                                                        class="form-check-input mx-3" type="checkbox">
                                                </div>
                                            </div>
                                            <div class="form-check form-switch mt-5">
                                                <label class="form-check-label" for="checkbox-switch-7">Status
                                                    Pegawai</label>
                                                <input name="status" id="checkbox-switch-7" class="form-check-input mx-3"
                                                    type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Aktif/Tidak
                                                    Aktif</label>
                                            </div>
                                            <div class="mt-3">
                                                <label for="vertical-form-1" class="form-label">Foto</label>
                                                <input class="form-control border border-slate-600" required
                                                    name="foto" type="file" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
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
            <div class="overflow-auto">
                <table class="table table-report -mt-2">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">NIP</th>
                            <th class="whitespace-nowrap">Nama Pegawai</th>
                            <th class="whitespace-nowrap">No BPJS TK</th>
                            <th class="whitespace-nowrap">Alamat</th>
                            <th class="whitespace-nowrap">No. Telepon</th>
                            <th class="whitespace-nowrap">Tgl Lahir</th>
                            <th class="whitespace-nowrap">Jenis Kelamin</th>
                            <th class="whitespace-nowrap">Jabatan</th>
                            <th class="whitespace-nowrap">Marketing</th>
                            <th class="whitespace-nowrap">Kolektor</th>
                            <th class="whitespace-nowrap">Status Pegawai</th>
                            <th class="whitespace-nowrap">Foto</th>
                            <th class="text-center whitespace-nowrap">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!$pegawais->isNotEmpty())
                            <tr class="intro-x">
                                <td colspan="13" class="text-center font-bold">Belum ada data tersedia</td>
                            </tr>
                        @endif
                        @foreach ($pegawais as $pegawai)
                            <tr class="intro-x">
                                <td class="w-40">{{ $pegawai->nip }}</td>
                                <td class="">{{ $pegawai->nama_pegawai }}</td>
                                <td class="">{{ $pegawai->no_bpjs_tk }}</td>
                                <td class="">{{ $pegawai->alamat }}</td>
                                <td class="">{{ $pegawai->no_telepon }}</td>
                                <td class="">{{ $pegawai->tgl_lahir }}</td>
                                <td class="">{{ $pegawai->jenis_kelamin }}</td>
                                <td class="">{{ $pegawai->jabatan }}</td>
                                <td class="">{{ $pegawai->marketing == 'on' ? 'Iya' : 'Tidak' }}</td>
                                <td class="">{{ $pegawai->kolektor == 'on' ? 'Iya' : 'Tidak' }}</td>
                                <td class="">{{ $pegawai->status == 'on' ? 'Aktif' : 'Tidak Aktif' }}</td>
                                <td class=""><img src="{{ url('storage/foto/' . $pegawai->foto) }}"
                                        alt="Foto Pegawai">
                                </td>
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        @can('edit nama pegawai')
                                            <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal"
                                                data-tw-target="#edit-modal{{ $pegawai->id }}"> <i
                                                    data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                        @endcan
                                        @can('delete nama pegawai')
                                            <a class="flex items-center text-danger" href="javascript:;"
                                                data-tw-toggle="modal"
                                                data-tw-target="#delete-confirmation-modal{{ $pegawai->id }}"> <i
                                                    data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                        @endcan

                                        @include('components.modal.edit-pegawai', [
                                            'modal_id' => 'edit-modal',
                                            'id' => $pegawai->id,
                                            'route' => 'edit.pegawai',
                                        ])
                                        <!-- BEGIN: Delete Confirmation Modal -->
                                        @include('components.modal-delete', [
                                            'id_modal' => 'delete-confirmation-modal',
                                            'id' => $pegawai->id,
                                            'route' => 'delete.pegawai',
                                        ])
                                        <!-- END: Delete Confirmation Modal -->
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END: Data List -->
    </div>
@endsection
