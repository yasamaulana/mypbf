<div>
    @php
        use App\Models\AkunAkutansi;
    @endphp
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Data List -->
        <div class="col-span-12 overflow-auto intro-y lg:overflow-visible">
            <div class="justify-between gap-3 sm:flex">
                <div class="">
                    <div class="flex gap-2 mb-2 mr-auto overflow-auto sm:mb-0">
                        <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 sm:w-20">
                            Tanggal
                        </label>
                        <input data-tw-merge id="horizontal-form-1" type="date" placeholder="Stok dari master"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        <p class="mt-3">s/d</p>
                        <input data-tw-merge id="horizontal-form-1" type="date" placeholder="Stok dari master"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                    </div>
                </div>
                <div class="relative w-56 text-slate-500 ">
                    <input type="text" class="w-56 pr-10 form-control cari box" placeholder="Search..."
                        wire:model.live="search">
                    <i class="absolute inset-y-0 right-0 w-4 h-4 my-auto mr-3" data-feather="search"></i>
                </div>
                <div data-tw-merge class="flex items-center block gap-2">
                    <label data-tw-merge for="horizontal-form-1" class="inline-block mt-2 mb-2 sm:w-28">
                        Tampilkan
                    </label>
                    <select data-tw-merge aria-label="Default select example" class="form-control"
                        wire:model.live="perPage">
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                    </select>
                    <p class="mt-2 mb-2">Halaman</p>
                </div>
                <div class="flex gap-2 mt-3 sm:mt-0">
                    <button class="text-white btn btn-success">Tampilkan</button>
                </div>
            </div>

            {{-- start Box --}}
            @forelse ($akuns as $akun)
                <div class="p-5 mt-5 box">
                    <div class="flex justify-between gap-3 mt-5 mb-3">
                        <p class="mr-auto ">Akun : <span class="font-bold">{{ $akun->kode }} -
                                {{ $akun->nama_akun }}</span>
                        </p>
                        <div class="relative w-56 text-slate-500">
                            <input type="text" class="w-56 pr-10 form-control" placeholder="Search...">
                            <i class="absolute inset-y-0 right-0 w-4 h-4 my-auto mr-3" data-feather="search"></i>
                        </div>
                    </div>
                    <div class="overflow-auto">
                        <table class="table">
                            <thead class="font-bold text-center">
                                <tr>
                                    <th class="border border-slate-600">No. Reff</th>
                                    <th class="border border-slate-600">Tanggal</th>
                                    <th class="border border-slate-600">Keterangan</th>
                                    <th class="border border-slate-600">Debet</th>
                                    <th class="border border-slate-600">Kredit</th>
                                    <th class="border border-slate-600">Saldo Akhir</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($akun->nama_akun == 'Piutang Dagang')
                                    @forelse ($piutangDagang as $piutang)
                                        <tr class="text-center">
                                            <td class="border border-slate-600">{{ $piutang->no_reff }}</td>
                                            <td class="border border-slate-600">
                                                {{ $piutang->created_at->format('d-m-Y') }}</td>
                                            <td class="border border-slate-600">Piutang Dagang</td>
                                            <td class="border border-slate-600">
                                                {{ 'Rp. ' . number_format($piutang->jmlh_piutang, 2, ',', '.') }}</td>
                                            <td class="border border-slate-600">-</td>
                                            <td class="border border-slate-600">Contoh Data</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="font-bold text-center" colspan="6">Bel`um ada data tersedia
                                            </td>
                                        </tr>
                                    @endforelse
                                @else
                                    <tr>
                                        <td class="border border-slate-600">Contoh Data</td>
                                        <td class="border border-slate-600">Contoh Data</td>
                                        <td class="border border-slate-600">Contoh Data</td>
                                        <td class="border border-slate-600">Contoh Data</td>
                                        <td class="border border-slate-600">Contoh Data</td>
                                        <td class="border border-slate-600">Contoh Data</td>
                                    </tr>
                                @endif
                                <tr>
                                    <td class="font-bold text-center border border-slate-600" colspan="3">Total</td>
                                    <td class="border border-slate-600"></td>
                                    <td class="border border-slate-600"></td>
                                    <td class="border border-slate-600"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @empty
                <div class="p-5 box">
                    <h1 class="font-bold text-center">Belum ada data tersedia</h1>
                </div>
            @endforelse
            <div class="flex justify-center mt-4">
                {{ $akuns->links() }}
            </div>
        </div>
    </div>
</div>
