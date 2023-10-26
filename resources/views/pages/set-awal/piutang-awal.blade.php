@extends('layout.main')

@section('main')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Piutang Awal
        </h2>
    </div>
    @if (session('success'))
        @include('components.alert')
    @endif
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal" data-tw-target="#tambah-piutang-awal">Tambah
                Piutang</button>
            <!-- BEGIN: Modal Content -->
            @include('components.modal.modal-piutang-awal', [
                'id_modal' => 'tambah-piutang-awal',
                'route' => 'tambah.piutang-awal',
                'id' => '',
                'piutangAwal' => '',
            ])
            <!-- END: Modal Content -->

            <div class="w-56 relative text-slate-500 ">
                <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
            </div>

            <div data-tw-merge class="block sm:flex items-center ml-5">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 font-bold mt-2 sm:w-20">
                    Jenis
                </label>
                <select data-tw-merge aria-label="Default select example" id="filterSelect" class="form-control"
                    onchange="selectOption()">
                    <option value="">- Pilih -</option>
                    <option value="Hutang Dagang">Hutang Dagang</option>
                    <option value="Hutang Kongsinyasi">Hutang Kongsinyasi</option>
                </select>
            </div>
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible mt-5">
        <table class="table table-report -mt-2" id="tableHutang">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">No.</th>
                    <th class="whitespace-nowrap">No. Reff</th>
                    <th class="whitespace-nowrap">No. Faktur</th>
                    <th class="whitespace-nowrap">Tgl. Faktur</th>
                    <th class="whitespace-nowrap">Pelanggan</th>
                    <th class="whitespace-nowrap">Jatuh Tempo</th>
                    <th class="whitespace-nowrap">Jumlah Piutang</th>
                    <th class="whitespace-nowrap">Jenis Piutang</th>
                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($piutangAwals as $piutangAwal)
                    <tr class="intro-x">
                        <td class="w-30">{{ $loop->iteration }}</td>
                        <td class="">{{ $piutangAwal->no_reff }}</td>
                        <td class="">{{ $piutangAwal->no_faktur }}</td>
                        <td class="">{{ $piutangAwal->tgl_faktur }}</td>
                        <td class="">{{ $piutangAwal->supplier }}</td>
                        <td class="">{{ $piutangAwal->tgl_jth_tempo }}</td>
                        <td class="">{{ 'Rp .' . number_format($piutangAwal->jmlh_piutang, 2, ',', '.') }}</td>
                        <td class="">{{ $piutangAwal->jns_piutang }}</td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal"
                                    data-tw-target="#edit-piutang-awal{{ $piutangAwal->id }}"> <i
                                        data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                    data-tw-target="#delete-confirmation-modal{{ $piutangAwal->id }}"> <i
                                        data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                <!-- BEGIN: Delete Confirmation Modal -->
                                @include('components.modal-delete', [
                                    'id_modal' => 'delete-confirmation-modal',
                                    'id' => $piutangAwal->id,
                                    'route' => 'delete.piutang-awal',
                                ])
                                <!-- END: Delete Confirmation Modal -->

                                {{-- edit modal --}}
                                @include('components.modal.modal-piutang-awal', [
                                    'id_modal' => 'edit-piutang-awal',
                                    'route' => 'edit.piutang-awal',
                                    'id' => $piutangAwal->id,
                                    'piutangAwal' => $piutangAwal,
                                ])
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr class="intro-x">
                        <td colspan="13" class="text-center font-bold">Belum ada data tersedia</td>
                    </tr>
                @endforelse
                <tr>
                    <td colspan="5" class="text-center font-bold border border-slate-600">Jumlah</td>
                    <td colspan="5" class=" font-bold border border-slate-600" id="totalHutang">Rp. 
                        {{ number_format($totalPiutang, 2, ',', '.') }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- END: Data List -->

    <script>
        function formatRupiah(angka) {
            let numberString = angka.toFixed(2).toString();
            let splitNumber = numberString.split('.');
            let rupiah = splitNumber[0].replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
            return "Rp. " + rupiah + "," + splitNumber[1];
        }

        function selectOption() {
            let filterSelect = document.getElementById("filterSelect").value;
            let tableHutang = document.getElementById("tableHutang");
            let tr = tableHutang.getElementsByTagName("tr");
            var i, txtValue, td, hutang;
            let totalHutang = document.getElementById("totalHutang");
            let total = 0; // Inisialisasi total hutang

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[7];
                hutang = tr[i].getElementsByTagName("td")[6];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase() === filterSelect.toUpperCase() || filterSelect === "") {
                        tr[i].style.display = "";

                        // Bersihkan nilai hutang dari karakter non-numerik dan ganti koma dengan titik
                        let hutangText = hutang.textContent.replace(/[^\d,]/g, '').replace(',', '.');
                        let hutangCleaned = parseFloat(hutangText);

                        total += hutangCleaned;
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }

            // Setel total hutang setelah menghitung nilai dalam format yang diinginkan
            totalHutang.textContent = formatRupiah(total);
        }
    </script>
@endsection
