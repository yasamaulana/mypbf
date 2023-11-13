 <!-- BEGIN: Modal Content -->
 <div id="{{ $id_modal . $id }}" class="modal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-xl">
         <div class="modal-content">
             <div class="p-10 modal-body">
                 <div class="preview">
                     <form action="{{ route($route, ['id' => $id]) }}" method="POST">
                         @csrf
                         <table>
                             <tr>
                                 <td>
                                     <label for="input-wizard-6"
                                         class="mt-2 mr-3 font-bold form-label">Supervisor</label>
                                 </td>
                                 <td class="w-full">
                                     <div class="flex col-span-12 mt-3 intro-y sm:col-span-6">
                                         <select id="input-wizard-6" class="form-select" required name="supervisor"
                                             {{ $lihat ? 'disabled' : '' }}>
                                             @foreach ($pegawais as $pegawai)
                                                 <option
                                                     {{ $target ? ($target->supervisor == $pegawai->nama_pegawai ? 'selected' : '') : '' }}>
                                                     {{ $pegawai->nama_pegawai }} - {{ $pegawai->jabatan }}
                                                 </option>
                                             @endforeach
                                         </select>
                                     </div>
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     <label for="input-wizard-6" class="mt-2 mr-3 font-bold form-label">Area
                                         Rayon</label>
                                 </td>
                                 <td class="w-full">
                                     <div class="flex col-span-12 mt-3 intro-y sm:col-span-6">
                                         <select id="input-wizard-6" class="form-select" required name="area_rayon"
                                             {{ $lihat ? 'disabled' : '' }}>
                                             @foreach ($rayons as $rayon)
                                                 <option
                                                     {{ $target ? ($target->area_rayon == $rayon->area_rayon ? 'selected' : '') : '' }}>
                                                     {{ $rayon->area_rayon }}</option>
                                             @endforeach
                                         </select>
                                     </div>
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     <label for="input-wizard-6" class="mt-2 mr-3 font-bold form-label">Tahun</label>
                                 </td>
                                 <td class="w-full">
                                     <div class="flex col-span-12 mt-3 intro-y sm:col-span-6">
                                         <input class="form-control" type="number" id="tahun" name="tahun"
                                             min="1900" max="2099" step="1" required
                                             {{ $lihat ? 'readonly' : '' }}
                                             value="{{ $target ? $target->tahun : '' }}">
                                     </div>
                                 </td>
                             </tr>
                         </table>
                         <table class="table mt-5 border border-slate-400">
                             <thead>
                                 <tr>
                                     <td>Bulan</td>
                                     <td>Target Penjualan</td>
                                     <td>Penjualan (A)</td>
                                     <td>Retur Penjualan (B)</td>
                                     <td>(A - B)</td>
                                     <td>%</td>
                                 </tr>
                             </thead>
                             <tbody>
                                 @php
                                     $months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                                 @endphp
                                 @foreach ($months as $month)
                                     <tr>
                                         <td>{{ $month }}</td>
                                         <td>
                                             <input type="text" name="target_{{ strtolower($month) }}"
                                                 class="form-control target-input{{ $id }}"
                                                 value="{{ $target ? $target->{'target_' . strtolower($month)} : '' }}"
                                                 {{ $lihat ? 'readonly' : '' }}>
                                         </td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                     </tr>
                                 @endforeach
                                 <tr>
                                     <td class="font-bold">Total</td>
                                     <td class="total-target{{ $id }}"></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                 </tr>
                             </tbody>
                         </table>

                         <script>
                             $(document).ready(function() {
                                 $('.target-input{{ $id }}').on('input', function() {
                                     var formattedValue = $(this).val().replace(/\D/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                                     $(this).val(formattedValue);
                                     updateTotal();
                                 });

                                 function updateTotal() {
                                     var total = 0;
                                     $('.target-input{{ $id }}').each(function() {
                                         var value = parseInt($(this).val().replace(/\D/g, ''), 10) || 0;
                                         total += value;
                                     });
                                     $('.total-target{{ $id }}').text(numberFormat(total));
                                 }

                                 function numberFormat(value) {
                                     return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                                 }

                                 updateTotal();
                             });
                         </script>
                         @if (!$lihat)
                             <div class="modal-footer">
                                 <button class="mt-5 btn btn-secondary" data-tw-dismiss="modal">Batal</button>
                                 <button type="submit" class="mt-5 btn btn-primary">Simpan</button>
                             </div>
                         @endif
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- END: Modal Content -->
