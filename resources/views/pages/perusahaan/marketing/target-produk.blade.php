@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Target Produk
        </h2>
    </div>
    @if (session('success'))
        @include('components.alert')
    @endif
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal" data-tw-target="#tambah-data">Tambah
                +</button>
            <!-- BEGIN: Modal Content -->
            @include('components.modal.modal-target-produk', [
                'id_modal' => 'tambah-data',
                'route' => 'tambah.target_produk',
                'id' => '',
                'obatBarangs' => $obatBarangs,
            ])
            <!-- END: Modal Content -->

            <div data-tw-merge class="block sm:flex items-center">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 mt-2 sm:w-20">
                    Tahun
                </label>
                <select data-tw-merge aria-label="Default select example" class="form-control" id="filterSelect"
                    onchange="selectOption()">
                    <option value="">Pilih</option>
                    <option value="2030">2030</option>
                    <option value="2029">2029</option>
                    <option value="2028">2028</option>
                    <option value="2027">2027</option>
                    <option value="2026">2026</option>
                    <option value="2025">2025</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                </select>
            </div>
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible mt-5">
        <div class="overflow-x-auto">
            <table class="table table-report -mt-2" id="tableTargetProduk">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">No.</th>
                        <th class="whitespace-nowrap">Nama Produk</th>
                        <th class="whitespace-nowrap">Bulan</th>
                        <th class="whitespace-nowrap">Tahun</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($targetProduks as $targetProduk)
                        <tr class="intro-x">
                            <td class="w-40">{{ $loop->iteration }}</td>
                            <td class="">{{ $targetProduk->obatBarang->nama_obat_barang }}</td>
                            <td class="">{{ $targetProduk->bulan_target }}</td>
                            <td class="">{{ $targetProduk->tahun_target }}</td>
                            <td class="table-report__action w-72">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal"
                                    data-tw-target="#edit-target-produk{{ $targetProduk->id }}"> <i data-feather="check-square"
                                            class="w-4 h-4 mr-1" ></i> Edit </a>
                                    <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                        data-tw-target="#delete-target-produk{{ $targetProduk->id }}"> <i
                                            data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                    <a class="flex items-center mr-3 text-warning mx-3" href="javascript:;"
                                        data-tw-toggle="modal" data-tw-target="#modal-lihat"> <i data-feather="eye"
                                            class="w-4 h-4 mr-1"></i> Lihat </a>
                                    <!-- BEGIN: Delete Confirmation Modal -->
                                    @include('components.modal-delete', [
                                        'id_modal' => 'delete-target-produk',
                                        'id' => $targetProduk->id,
                                        'route' => 'delete.target_produk',
                                    ])
                                    <!-- END: Delete Confirmation Modal -->

                                    {{-- edit modal --}}
                                    @include('components.modal.modal-edit-target-produk', [
                                        'id_modal' => 'edit-target-produk',
                                        'route' => 'edit.target_produk',
                                        'id' => $targetProduk->id,
                                        'targetProduk' => $targetProduk
                                    ])
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="intro-x">
                            <td colspan="13" class="text-center font-bold">Belum ada data tersedia</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <!-- END: Data List -->
    </div>

    <script>
        function selectOption() {
            let filterSelect = document.getElementById("filterSelect").value;
            let tableTargetProduk = document.getElementById("tableTargetProduk");
            let tr = tableTargetProduk.getElementsByTagName("tr");
            var i, txtValue, td;
            let displayedRowCount = 0;

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[3];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase() === filterSelect.toUpperCase() || filterSelect === "") {
                        tr[i].style.display = "";
                        displayedRowCount++;
                        tr[i].getElementsByTagName("td")[0].textContent = displayedRowCount;
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
@endsection
