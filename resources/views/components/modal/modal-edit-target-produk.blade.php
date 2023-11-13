@php
    use App\Models\TargetProduk;
@endphp
<div id="{{ $id_modal }}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="rounded-lg modal-dialog modal-xl">
        <form action="{{ route($route) }}" method="post">
            @csrf
            <div class="modal-content">
                <div class="p-10 modal-body">
                    <div class="preview">
                        <div class="flex w-full gap-3">
                            <div data-tw-merge class="items-center block mt-3 sm:flex">
                                <h1 class="text-lg font-bold">Edit Target Produk tahun {{ $targetProduk->tahun }} bulan
                                    {{ $targetProduk->bulan }}</h1>
                            </div>
                        </div>
                        <input type="hidden" value="{{ $targetProduk->tahun }}" name="tahun">
                        <input type="hidden" value="{{ $targetProduk->bulan }}" name="bulan">
                        <div class="overflow-auto">
                            <table class="table mt-3">
                                <thead class="font-bold">
                                    <tr>
                                        <td class="border border-slate-600">Kode</td>
                                        <td class="border border-slate-600">Nama Produk/Barang</td>
                                        <td class="border border-slate-600">Stok</td>
                                        <td class="border border-slate-600">Satuan Terkecil</td>
                                        <td class="border border-slate-600">Status Aktif</td>
                                        <td class="border border-slate-600">Tipe</td>
                                        <td class="border border-slate-600">Target</td>
                                        <td class="border border-slate-600">Penjualan (A)</td>
                                        <td class="border border-slate-600">Retur Penjualan (B)</td>
                                        <td class="border border-slate-600">(A-B)</td>
                                        <td class="border border-slate-600">%</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (TargetProduk::where('id_perusahaan', Auth::user()->id_perusahaan)->where('tahun', $targetProduk->tahun)->where('bulan', $targetProduk->bulan)->get() as $target)
                                        <tr>
                                            <td class="border border-slate-600">
                                                {{ $target->obatBarang->kode_obat_barang }}</td>
                                            <td class="border border-slate-600">
                                                {{ $target->obatBarang->nama_obat_barang }}</td>
                                            <td class="border border-slate-600">
                                                {{ $target->obatBarang->stok_minimal }}</td>
                                            <td class="border border-slate-600">
                                                {{ $target->obatBarang->satuan_jual_terkecil }}
                                            </td>
                                            <td class="border border-slate-600">{{ $target->obatBarang->status }}
                                            </td>
                                            <td class="border border-slate-600">{{ $target->obatBarang->tipe }}
                                            </td>
                                            <td class="border border-slate-600">
                                                <input data-tw-merge id="horizontal-form-1" type="number"
                                                    placeholder="" name="target[{{ $loop->index }}][target_produk]"
                                                    value="{{ $target->target }}" {{ $lihat ? 'readonly' : '' }}
                                                    class="w-32 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                                                <input type="hidden" name="target[{{ $loop->index }}][id_produk]"
                                                    value="{{ $target->obatBarang->id }}">
                                            </td>
                                            <td class="border border-slate-600">Contoh data</td>
                                            <td class="border border-slate-600">Contoh data</td>
                                            <td class="border border-slate-600">Contoh data</td>
                                            <td class="border border-slate-600">Contoh data</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- footer --}}
                @if (!$lihat)
                    <div class="modal-footer">
                        <button class="mt-5 btn btn-secondari" data-tw-dismiss="modal" type="button">Batal</button>
                        <button class="mt-5 btn btn-primary" type="submit" name="submit">Update</button>
                    </div>
                @endif
            </div>
        </form>
    </div>
</div>
