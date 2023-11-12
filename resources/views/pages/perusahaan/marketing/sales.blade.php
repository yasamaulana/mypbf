@php
    use App\Models\Pegawai;
    use App\Models\AreaRayon;
    use App\Models\SubRayon;
@endphp

@extends('layout.main')

@section('main')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            Sales
        </h2>
    </div>
    @if (session('success'))
        @include('components.alert')
    @endif
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="flex flex-wrap items-center col-span-12 mt-2 intro-y sm:flex-nowrap">
            <button class="mr-2 shadow-md btn btn-primary" data-tw-toggle="modal" data-tw-target="#basic-modal-preview">Tambah
                +</button>
            <!-- BEGIN: Modal Content -->
            <div id="basic-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="p-10 modal-body">
                            <div class="preview">
                                <form action="{{ route('tambah.sales') }}" method="POST">
                                    @csrf
                                    <div>
                                        <div class="col-span-12 mt-3 intro-y sm:col-span-6">
                                            <label for="input-wizard-6" class="font-bold form-label">Supervisor</label>
                                            <select id="input-wizard-6" class="form-select" required name="supervisor">
                                                @foreach ($pegawais as $pegawai)
                                                    <option value="{{ $pegawai->nama_pegawai }}">
                                                        {{ $pegawai->nama_pegawai }} - {{ $pegawai->jabatan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-span-12 mt-3 intro-y sm:col-span-6">
                                            <label for="input-wizard-6" class="font-bold form-label">Area Rayon</label>
                                            <select id="input-wizard-6" class="form-select" required name="area_rayon">
                                                @foreach (AreaRayon::where('id_perusahaan', Auth::user()->id_perusahaan)->get() as $pegawai)
                                                    <option>{{ $pegawai->area_rayon }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-span-12 mt-3 intro-y sm:col-span-6">
                                            <label for="input-wizard-6" class="font-bold form-label">Sales</label>
                                            <select id="input-wizard-6" class="form-select" required name="sales">
                                                @foreach ($pegawais as $pegawai)
                                                    <option value="{{ $pegawai->nama_pegawai }}">
                                                        {{ $pegawai->nama_pegawai }} - {{ $pegawai->jabatan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-span-12 mt-3 intro-y sm:col-span-6">
                                            <label for="input-wizard-6" class="font-bold form-label">Sub Rayon</label>
                                            <select id="input-wizard-6" required name="sub_rayon" class="form-select">
                                                @foreach (SubRayon::where('id_perusahaan', Auth::user()->id_perusahaan)->get() as $pegawai)
                                                    <option>{{ $pegawai->sub_rayon }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="mt-5 btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                        <th class="whitespace-nowrap">Nomor</th>
                        <th class="whitespace-nowrap">Nama Supervisor</th>
                        <th class="whitespace-nowrap">Sales</th>
                        <th class="whitespace-nowrap">Area Rayon</th>
                        <th class="whitespace-nowrap">Sub Rayon</th>
                        <th class="text-center whitespace-nowrap">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!$sales->isNotEmpty())
                        <tr class="intro-x">
                            <td class="font-bold text-center" colspan="6">Belum ada data tersedia</td>
                        </tr>
                    @endif
                    @foreach ($sales as $item)
                        <tr class="intro-x">
                            <td class="w-40">{{ $loop->iteration }}</td>
                            <td class="">{{ $item->supervisor }}</td>
                            <td class="">{{ $item->sales }}</td>
                            <td class="">{{ $item->area_rayon }}</td>
                            <td class="">{{ $item->sub_rayon }}</td>
                            <td class="w-56 table-report__action">
                                <div class="flex items-center justify-center">
                                    <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal"
                                        data-tw-target="#edit-sales{{ $item->id }}"> <i data-feather="check-square"
                                            class="w-4 h-4 mr-1"></i> Edit </a>
                                    <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                        data-tw-target="#delete-confirmation-modal{{ $item->id }}"> <i
                                            data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                    <!-- BEGIN: Delete Confirmation Modal -->
                                    @include('components.modal-delete', [
                                        'id_modal' => 'delete-confirmation-modal',
                                        'id' => $item->id,
                                        'route' => 'delete.sales',
                                    ])
                                    <!-- END: Delete Confirmation Modal -->
                                    <!-- BEGIN: Modal Content -->
                                    <div id="edit-sales{{ $item->id }}" class="modal" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="p-10 modal-body">
                                                    <div class="preview">
                                                        <form action="{{ route('edit.sales', ['id' => $item->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            <div>
                                                                <div class="col-span-12 mt-3 intro-y sm:col-span-6">
                                                                    <label for="input-wizard-6"
                                                                        class="font-bold form-label">Supervisor</label>
                                                                    <select id="input-wizard-6" class="form-select" required
                                                                        name="supervisor">
                                                                        @foreach ($pegawais as $pegawai)
                                                                            <option
                                                                                {{ $item->supervisor == $pegawai->nama_pegawai ? 'selected' : '' }}
                                                                                value="{{ $pegawai->nama_pegawai }}">
                                                                                {{ $pegawai->nama_pegawai }} -
                                                                                {{ $pegawai->jabatan }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="col-span-12 mt-3 intro-y sm:col-span-6">
                                                                    <label for="input-wizard-6"
                                                                        class="font-bold form-label">Area Rayon</label>
                                                                    <select id="input-wizard-6" class="form-select" required
                                                                        name="area_rayon">
                                                                        @foreach (AreaRayon::where('id_perusahaan', Auth::user()->id_perusahaan)->get() as $rayon)
                                                                            <option
                                                                                {{ $item->area_rayon == $rayon->area_rayon ? 'selected' : '' }}>
                                                                                {{ $rayon->area_rayon }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="col-span-12 mt-3 intro-y sm:col-span-6">
                                                                    <label for="input-wizard-6"
                                                                        class="font-bold form-label">Sales</label>
                                                                    <select id="input-wizard-6" class="form-select"
                                                                        required name="sales">
                                                                        @foreach ($pegawais as $pegawai)
                                                                            <option value="{{ $pegawai->nama_pegawai }}"
                                                                                {{ $item->sales == $pegawai->nama_pegawai ? 'selected' : '' }}>
                                                                                {{ $pegawai->nama_pegawai }} -
                                                                                {{ $pegawai->jabatan }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="col-span-12 mt-3 intro-y sm:col-span-6">
                                                                    <label for="input-wizard-6"
                                                                        class="font-bold form-label">Sub Rayon</label>
                                                                    <select id="input-wizard-6" required name="sub_rayon"
                                                                        class="form-select">
                                                                        @foreach (SubRayon::where('id_perusahaan', Auth::user()->id_perusahaan)->get() as $subrayon)
                                                                            <option
                                                                                {{ $item->sub_rayon == $subrayon->area_rayon ? 'selected' : '' }}>
                                                                                {{ $subrayon->sub_rayon }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <button type="submit"
                                                                class="mt-5 btn btn-primary">Simpan</button>
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
