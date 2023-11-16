@extends('layout.main')

@section('main')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            Piutang Awal
        </h2>
    </div>
    @if (session('success'))
        @include('components.alert')
    @endif
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="flex flex-wrap items-center col-span-12 mt-2 intro-y sm:flex-nowrap">
            <button class="mr-2 shadow-md btn btn-primary" data-tw-toggle="modal" data-tw-target="#tambah-piutang-awal">Tambah
                Piutang</button>
            <!-- BEGIN: Modal Content -->
            @include('components.modal.modal-piutang-awal', [
                'id_modal' => 'tambah-piutang-awal',
                'route' => 'tambah.piutang-awal',
                'id' => '',
                'piutangAwal' => '',
            ])
            <!-- END: Modal Content -->

            <div class="relative w-56 text-slate-500 ">
                <input type="text" class="w-56 pr-10 form-control box" placeholder="Search...">
                <i class="absolute inset-y-0 right-0 w-4 h-4 my-auto mr-3" data-feather="search"></i>
            </div>

            <div data-tw-merge class="items-center block ml-5 sm:flex">
                <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 font-bold sm:w-20">
                    Jenis
                </label>
                <select data-tw-merge aria-label="Default select example" id="filterSelect" class="form-control"
                    onchange="selectOption()">
                    <option value="">- Pilih -</option>
                    <option value="Piutang Dagang">Piutang Dagang</option>
                    <option value="Piutang Konsinyasi">Piutang Konsinyasi</option>
                </select>
            </div>
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="col-span-12 mt-5 overflow-auto intro-y lg:overflow-visible">
        <table class="table -mt-2 table-report" id="tableHutang">
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
                        <td class="">{{ date('d-m-Y', strtotime($piutangAwal->tgl_faktur)) }}</td>
                        <td class="">{{ $piutangAwal->pelanggan }}</td>
                        <td class="">{{ date('d-m-Y', strtotime($piutangAwal->tgl_jth_tempo)) }}</td>
                        <td class="">{{ 'Rp .' . number_format($piutangAwal->jmlh_piutang, 2, ',', '.') }}</td>
                        <td class="">{{ $piutangAwal->jns_piutang }}</td>
                        <td class="w-56 table-report__action">
                            <div class="flex items-center justify-center">
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
                        <td colspan="13" class="font-bold text-center">Belum ada data tersedia</td>
                    </tr>
                @endforelse
                <tr>
                    <td colspan="5" class="font-bold text-center border border-slate-600">Jumlah</td>
                    <td colspan="5" class="font-bold border  border-slate-600" id="totalHutang">Rp.
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
