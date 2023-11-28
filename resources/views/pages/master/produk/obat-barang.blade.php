@extends('layout.main')

@section('main')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            Produk
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="flex flex-wrap items-center col-span-12 mt-2 intro-y sm:flex-nowrap">
            <button class="mr-2 shadow-md btn btn-primary" id="tombol-tambah" data-tw-toggle="modal"
                data-tw-target="#modal-tambah">Tambah
                Produk Baru</button>
            <button class="mr-2 text-white shadow-md btn btn-success">Import Excell</button>
            {{-- modal begin --}}
            @include('components.modal.obat-barang.modal-obat-barang', [
                'id_modal' => 'modal-tambah',
                'route' => 'tambah.obat-barang',
                'id' => '',
                'barang' => '',
            ])
            {{-- end modal --}}
            @include('components.search', [
                'id_table' => 'myTable',
            ])
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="col-span-12 mt-5 overflow-auto intro-y lg:overflow-visible">
        <div class="overflow-auto">
            <table class="table -mt-2 table-report" id="myTable">
                <thead>
                    <tr>
                        <th class="">Kode obat</th>
                        <th class="">Barcode PBOm</th>
                        <th class="">Nama Produk</th>
                        <th class="">Golongan</th>
                        <th class="">Sub Golongan</th>
                        <th class="">Produsen</th>
                        <th class="">Tipe</th>
                        <th class="">No Ijin Edar</th>
                        <th class="">Komposisi</th>
                        <th class="w-34">Zat Aktif</th>
                        <th class="">Bentuk Kekuatan</th>
                        <th class="">Status</th>
                        <th class="text-center ">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($obat_barang as $barang)
                        <tr class="intro-x">
                            <td class="w-40">{{ $barang->kode_obat_barang }}</td>
                            <td class="">{{ $barang->kode_obat_bpom }}</td>
                            <td class="">{{ $barang->nama_obat_barang }}</td>
                            <td class="">{{ $barang->golongan }}</td>
                            <td class="">{{ $barang->sub_golongan }}</td>
                            <td class="">{{ $barang->produsen }}</td>
                            <td class="">{{ $barang->tipe }}</td>
                            <td class="">{{ $barang->no_ijin_edar }}</td>
                            <td class="">{{ $barang->komposisi }}</td>
                            <td class="">{{ $barang->zat_aktif }}</td>
                            <td class="">{{ $barang->bentuk_kekuatan }}</td>
                            <td class="">{{ $barang->status == 1 ? 'Aktif' : 'Tidak Aktif' }}</td>
                            <td class="w-56 table-report__action">
                                <div class="flex items-center justify-center">
                                    <a class="flex items-center mr-3" href="/set-harga-jual/{{ $barang->id }}"> <i
                                            data-feather="credit-card" class="w-4 h-4 mr-1"></i> Harga </a>
                                    <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal"
                                        data-tw-target="#modal-edit{{ $barang->id }}"> <i data-feather="check-square"
                                            class="w-4 h-4 mr-1"></i> Edit </a>
                                    <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                        data-tw-target="#delete-confirmation-modal{{ $barang->id }}"> <i
                                            data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                    <!-- BEGIN: Delete Confirmation Modal -->
                                    @include('components.modal-delete', [
                                        'id_modal' => 'delete-confirmation-modal',
                                        'id' => $barang->id,
                                        'route' => 'delete.obat-barang',
                                    ])
                                    <!-- END: Delete Confirmation Modal -->

                                    {{-- modal edit --}}
                                    @include('components.modal.obat-barang.modal-obat-barang', [
                                        'id_modal' => 'modal-edit',
                                        'route' => 'edit.obat-barang',
                                        'id' => $barang->id,
                                    ])
                                    {{-- end modal edit --}}
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="intro-x">
                            <td class="font-bold text-center" colspan="13">Belum ada data tersedia</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    @if (app('request')->input('nama_obat_barang'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var tombolTambah = document.getElementById("tombol-tambah");
                tombolTambah.click();
            });
        </script>
    @endif
@endsection
