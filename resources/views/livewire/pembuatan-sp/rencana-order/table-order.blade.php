<div>
    @php
        use App\Models\RencanaOrder;
    @endphp
    <table class="table mt-2">
        <thead>
            <tr>
                <th class="text-center border border-slate-600">
                    <input data-tw-merge type="checkbox"
                        class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                        id="checkbox-switch-6" value="" />
                </th>
                <th class="border border-slate-600">Nama Obat/Barang</th>
                <th class="border border-slate-600">Golongan</th>
                <th class="border border-slate-600">Jumlah Order</th>
                <th class="border border-slate-600">Keterangan</th>
                <th class="border border-slate-600">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse (RencanaOrder::where('id_suplier', $sup->id)->where('id_perusahaan', Auth::user()->id_perusahaan)->get() as $order)
                <tr class="intro-x">
                    <td class="text-center border border-slate-600">
                        <input data-tw-merge type="checkbox"
                            class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                            id="checkbox-switch-6" value="" />
                    </td>
                    <td class="border border-slate-600">{{ $order->produk->nama_obat_barang }}</td>
                    <td class="border border-slate-600">{{ $order->produk->golongan }}</td>
                    <td class="border border-slate-600">{{ $order->jumlah_order }}</td>
                    <td class="border border-slate-600">{{ $order->keterangan }}</td>
                    <td class="border border-slate-600">
                        <button class="btn btn-danger" wire:loading.remove
                            wire:click="deleteProduk({{ $order->id }})"
                            @if ($loadingItemId == $order->id) disabled @endif>
                            Hapus
                        </button>
                        <button class="btn btn-danger" wire:loading wire:target="deleteProduk({{ $order->id }})"
                            @if ($loadingItemId != $order->id) hidden @endif>
                            Menghapus...
                        </button>
                    </td>
                </tr>
            @empty
                <tr class="intro-x">
                    <td class="text-center border border-slate-600" colspan="6">Belum ada data tersedia
                    </td>
                </tr>
            @endforelse
            <tr>
                <td colspan="6">Jumlah Item Terpilih : 2</td>
            </tr>
        </tbody>
    </table>
</div>
