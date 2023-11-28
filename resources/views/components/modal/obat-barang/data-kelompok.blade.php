 @forelse ($kelompoks as $kelompok)
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
                 <div class="flex gap-3 ">
                     <label for="inputIsi{{ $key }}" class="mt-2 form-label">Isi</label>
                     <input type="number" class="form-control" id="isipertama{{ $id ?? 0 }}" readonly>
                 </div>
             @else
                 <div class="flex gap-3 ">
                     <label for="input-wizard-6" class="mt-2 form-label">Satuan
                         Dasar/Beli</label>
                     <select id="input{{ $key }}" class="w-40 form-select input{{ $key }}">
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
                 <div class="flex gap-3 ">
                     <label for="inputIsi{{ $key }}" class="mt-2 form-label">Isi</label>
                     <input type="number" class="form-control" id="inputIsi{{ $key }}">
                 </div>
             @endif
             <p class="mt-2 font-bold satuan-terkecil{{ $id ?? 0 }}">
             </p>
         </div>
     @endif
     @if ($key == 0)
         <input type="hidden" name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][satuan_dasar_beli]"
             id="satuanpertama{{ $id ?? 0 }}" class="satuan{{ $key }}">
         <input type="hidden" class="form-control" id="isihiddenpertama{{ $id ?? 0 }}"
             name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][isi]">
     @else
         <input type="hidden" name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][satuan_dasar_beli]"
             id="satuan{{ $key }}" class="satuan{{ $key }}">
         <input type="hidden" class="form-control" id="isi{{ $key }}"
             name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][isi]">
     @endif
     <script>
         $(document).ready(function() {
             $('#input{{ $key }}').on('change', function() {
                 var selectedValue = $(this).val();
                 $('.satuan{{ $key }}').val(selectedValue);
             });

             $('#inputIsi{{ $key }}').on('input', function() {
                 var selectedValue = $(this).val();
                 $('#isi{{ $key }}').val(selectedValue);
             });
         });
     </script>
     <tr>
         {{-- hidden information --}}
         <input type="hidden" name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][id_kelompok]"
             value="{{ $kelompok->id }}">
         <input type="hidden" name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][id_set_harga]"
             value="{{ $item->id }}">
         {{-- End hiddenn information --}}
         <td>{{ $kelompok->kelompok }}</td>
         <td>
             <input type="text" pattern="[0-9,.]*" inputmode="decimal" value="0" class="form-control"
                 name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][persentase]"
                 value="{{ $kelompok->persentase ?? '' }}">
         </td>
         <td>
             <input type="text" pattern="[0-9,.]*" inputmode="decimal" value="0" class="form-control"
                 name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][disc_1]"
                 value="{{ $kelompok->disc_1 ?? '' }}">
         </td>
         <td>
             <input type="text" pattern="[0-9,.]*" inputmode="decimal" value="0" class="form-control"
                 name="kelompoks[{{ $loop->index }}{{ $loop->parent->index }}][disc_2]"
                 value="{{ $kelompok->disc_2 ?? '' }}">
         </td>
     </tr>

 @empty
     <tr>
         <td colspan="4" class="font-bold text-center">Belum ada
             kelompok
             tersedia
         </td>
     </tr>
 @endforelse
