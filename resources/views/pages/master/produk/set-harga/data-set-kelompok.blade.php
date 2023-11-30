@php
    use App\Models\DiskonKelompok;
@endphp
@forelse ($kelompoks as $kelompok)
    <div class="col-span-12 intro-y lg:col-span-6 mt-5">
        <div class="intro-y box">
            <div
                class="flex flex-col items-center p-5 text-white border-b sm:flex-row bg-primary border-slate-200/60 dark:border-darkmode-400">
                <h2 class="mr-auto text-base font-medium">
                    Harga Jual {{ $kelompok->kelompok }}
                </h2>
            </div>
            @forelse (DiskonKelompok::where('id_kelompok', $loop->iteration)->where('satuan_dasar_beli','!=',null)->get() as $disc)
                <div class="intro-y box">
                    <div class="flex gap-4 p-5">
                        <div class="col-span-12 intro-y sm:col-span-6">
                            <label for="input-wizard-6" class="form-label">Satuan Jual
                                {{ $loop->iteration }}</label>
                            <input id="input-wizard-3" type="text" class="form-control" placeholder=""
                                value="{{ $kelompok->diskon($kelompok->id, $loop->iteration)->satuan_dasar_beli }}"
                                placeholder="Untuk satuan" readonly>
                        </div>
                        <div class="col-span-12 intro-y sm:col-span-6">
                            <label for="input-wizard-3" class="form-label">Isi</label>
                            <div class="flex gap-2">
                                <input id="input-wizard-3" type="text" class="form-control" readonly placeholder=""
                                    value="{{ $kelompok->diskon($kelompok->id, $loop->iteration)->isi }}">
                                <p class="mt-2 font-bold text-primary">{{ $stok->produk->satuan_jual_terkecil }}</p>
                            </div>
                        </div>
                        @php
                            $id_hpp_final = $kelompok->id . $kelompok->diskon($kelompok->id, $loop->iteration)->id_set_harga;
                        @endphp
                        <div class="col-span-12 intro-y ">
                            <label for="input-wizard-3"
                                class="form-label">Modal/{{ $kelompok->diskon($kelompok->id, $loop->iteration)->satuan_dasar_beli }}</label>
                            <input id="hpp_final{{ $id_hpp_final }}" type="text" class="form-control" readonly
                                placeholder=""
                                value="{{ $stok ? number_format((str_replace('.', '', $stok->hpp) / $stok->produk->isi) * $kelompok->diskon($kelompok->id, $loop->iteration)->isi, 0, ',', '.') : '' }}">
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="overflow-auto w-full">
                        @for ($i = 1; $i <= 4; $i++)
                            @php
                                $id_item = $kelompok->id . $kelompok->diskon($kelompok->id, $loop->iteration)->id_set_harga . $i;
                            @endphp
                            <div class="flex flex-nowrap w-full items-center">
                                <div class="flex items-center mb-4 mr-4">
                                    <label for="jumlah" class="mr-2 w-32">Jumlah 1</label>
                                    <input pattern="[0-9,.]*" inputmode="decimal" id="jumlah" type="text"
                                        name="jumlah"
                                        class="w-full number py-1 px-2 text-sm rounded-md border border-gray-300 focus:border-blue-500 focus:outline-none">
                                </div>
                                <div class="flex items-center mb-4 mr-4">
                                    <label for="sampai" class="mr-2 w-32">Sampai</label>
                                    <input pattern="[0-9,.]*" inputmode="decimal" id="sampai" type="text"
                                        name="sampai"
                                        class="w-full number py-1 px-2 text-sm rounded-md border border-gray-300 focus:border-blue-500 focus:outline-none">
                                </div>
                                <div class="flex items-center mb-4 mr-4">
                                    <label for="laba" class="mr-2 w-32">Laba</label>
                                    <input pattern="[0-9,.]*" inputmode="decimal" id="laba{{ $id_item }}"
                                        type="text" name="laba"
                                        oninput="labapersen({{ $id_hpp_final }},{{ $id_item }})"
                                        value="{{ $kelompok->diskon($kelompok->id, $loop->iteration)->persentase }}"
                                        class="w-full number py-1 px-2 text-sm rounded-md border border-gray-300 focus:border-blue-500 focus:outline-none">
                                    <input pattern="[0-9,.]*" inputmode="decimal" type="text"
                                        id="hasil-laba{{ $id_item }}"
                                        oninput="labapersen({{ $id_hpp_final }},{{ $id_item }})"
                                        class="w-full number ml-2 py-1 px-2 text-sm rounded-md border border-gray-300 focus:border-blue-500 focus:outline-none">
                                </div>
                                <script>
                                    function initialize() {
                                        labapersen({{ $id_hpp_final }}, {{ $id_item }});
                                    }
                                </script>
                                <div class="flex items-center mb-4 mr-4">
                                    <label for="disc_1" class="mr-2 w-32">Disc 1</label>
                                    <input pattern="[0-9,.]*" inputmode="decimal" id="disc_1{{ $id_item }}"
                                        type="text" name="disc_1"
                                        oninput="labapersen({{ $id_hpp_final }},{{ $id_item }})"
                                        value="{{ $kelompok->diskon($kelompok->id, $loop->iteration)->disc_1 }}"
                                        class="w-full number py-1 px-2 text-sm rounded-md border border-gray-300 focus:border-blue-500 focus:outline-none">
                                </div>
                                <div class="flex items-center mb-4 mr-4">
                                    <label for="disc_2" class="mr-2 w-32">Disc 2</label>
                                    <input pattern="[0-9,.]*" inputmode="decimal" id="disc_2{{ $id_item }}"
                                        type="text" name="disc_2"
                                        oninput="labapersen({{ $id_hpp_final }},{{ $id_item }})"
                                        value="{{ $kelompok->diskon($kelompok->id, $loop->iteration)->disc_2 }}"
                                        class="w-full number py-1 px-2 text-sm rounded-md border border-gray-300 focus:border-blue-500 focus:outline-none">
                                </div>
                                <div class="flex items-center mb-4">
                                    <label for="harga-jual" class="mr-2 w-32">Harga Jual</label>
                                    <input pattern="[0-9,.]*" inputmode="decimal" id="harga-jual{{ $id_item }}"
                                        type="text" readonly
                                        class="w-full number py-1 px-2 text-sm rounded-md border border-gray-300 focus:border-blue-500 focus:outline-none">
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            @empty
                kosong
            @endforelse
        </div>
    </div>
@empty
    <div class="card">
        <div class="font-bold text-center card-body">
            <h2>Belum ada data kelompok tersedia</h2>
        </div>
    </div>
@endforelse
