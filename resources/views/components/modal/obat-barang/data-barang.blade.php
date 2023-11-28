@php
    use App\Models\DiskonKelompok;
@endphp
@foreach (DiskonKelompok::where('id_obat_barang', $barang->id)->where('id_set_harga', $key + 1)->get() as $diskon)
    @if ($loop->first)
        <div class="flex gap-3 mt-3">
            @if ($key == 0)
                <div class="flex gap-3 ">
                    <label for="input-wizard-6" class="mt-2 form-label">Satuan
                        Dasar/Beli</label>
                    <select id="inputpertama{{ $id ?? 0 }}" class="w-40 form-select input{{ $key }}"
                        disabled>
                        @if ($satuans->isNotEmpty())
                            <option value="">- Pilih -</option>
                            @foreach ($satuans as $satuan)
                                <option value="{{ $satuan->satuan }}"
                                    {{ $barang ? ($barang->satuan_dasar_beli == $satuan->satuan ? 'selected' : '') : '' }}>
                                    {{ $satuan->satuan }}
                                </option>
                            @endforeach
                        @else
                            <option value="">Belum ada data</option>
                        @endif
                    </select>
                </div>
                <div class="flex gap-3">
                    <label for="inputIsi{{ $key }}" class="mt-2 form-label">Isi</label>
                    <input type="number" class="form-control" id="isipertama{{ $id ?? 0 }}" readonly
                        value="{{ $diskon->isi }}">
                </div>
            @else
                <div class="flex gap-3 ">
                    <label for="input-wizard-6" class="mt-2 form-label">Satuan
                        Dasar/Beli</label>
                    <select id="edit-input{{ $key }}" class="w-40 form-select edit-input{{ $key }}">
                        @if ($satuans->isNotEmpty())
                            <option value="">- Pilih -</option>
                            @foreach ($satuans as $satuan)
                                <option value="{{ $satuan->satuan }}"
                                    {{ $barang ? ($diskon->satuan_dasar_beli == $satuan->satuan ? 'selected' : '') : '' }}>
                                    {{ $satuan->satuan }}
                                </option>
                            @endforeach
                        @else
                            <option value="">Belum ada data</option>
                        @endif
                    </select>
                </div>
                <div class="flex gap-3 ">
                    <label for="inputIsi{{ $key }}" class="mt-2 form-label">Isi</label>
                    <input type="number" class="form-control" id="edit-inputIsi{{ $key }}"
                        value="{{ $diskon->isi }}">
                </div>
            @endif
            <p class="mt-2 font-bold satuan-terkecil{{ $id ?? 0 }}">
                {{ $barang->satuan_jual_terkecil }}
            </p>
        </div>
    @endif
    @if ($key == 0)
        <input type="hidden" name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][satuan_dasar_beli]"
            id="satuanpertama{{ $id ?? 0 }}" class="satuan{{ $key }}"
            value="{{ $diskon->satuan_dasar_beli }}">
        <input type="hidden" class="form-control" id="isihiddenpertama{{ $id ?? 0 }}"
            name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][isi]" value="{{ $diskon->isi }}">
    @else
        <input type="hidden" name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][satuan_dasar_beli]"
            id="satuan{{ $key }}" class="satuan{{ $key }}"
            value="{{ $diskon->satuan_dasar_beli }}">
        <input type="hidden" class="form-control" id="edit-isi{{ $key }}"value="{{ $diskon->isi }}"
            name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][isi]">
    @endif
    <script>
        $(document).ready(function() {
            $('#edit-input{{ $key }}').on('change', function() {
                var selectedValue = $(this).val();
                $('.satuan{{ $key }}').val(selectedValue);
            });

            $('#edit-inputIsi{{ $key }}').on('input', function() {
                var selectedValue = $(this).val();
                $('#edit-isi{{ $key }}').val(selectedValue);
            });
        });
    </script>
    <tr>
        {{-- hidden information --}}
        <input type="hidden" name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][id_kelompok]"
            value="{{ $diskon->id_kelompok }}">
        <input type="hidden" name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][id_set_harga]"
            value="{{ $item->id }}">
        {{-- End hidden information --}}
        <td>{{ $kelompoks->where('id', $diskon->id_kelompok)->first()->kelompok }}
        </td>
        <td>
            <input type="text" pattern="[0-9,.]*" inputmode="decimal" class="form-control" required
                name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][persentase]"
                value="{{ $diskon->persentase }}">
        </td>
        <td>
            <input type="text" pattern="[0-9,.]*" inputmode="decimal" class="form-control" required
                name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][disc_1]"
                value="{{ $diskon->disc_1 }}">
        </td>
        <td>
            <input type="text" pattern="[0-9,.]*" inputmode="decimal" class="form-control" required
                name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][disc_2]"
                value="{{ $diskon->disc_2 }}">
        </td>
    </tr>
@endforeach
