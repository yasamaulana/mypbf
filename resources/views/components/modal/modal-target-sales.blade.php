 <!-- BEGIN: Modal Content -->
 <div id="{{ $id_modal . $id }}" class="modal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-xl">
         <div class="modal-content">
             <div class="modal-body p-10">
                 <div class="preview">
                     <form action="{{ route($route, ['id' => $id]) }}" method="POST">
                         @csrf
                         <table>
                             <tr>
                                 <td>
                                     <label for="input-wizard-6" class="mt-2 mr-3 form-label font-bold">Sales</label>
                                 </td>
                                 <td class="w-full">
                                     <div class="intro-y col-span-12 sm:col-span-6 mt-3 flex">
                                         <select id="input-wizard-6" class="form-select" name="sales">
                                             @foreach ($pegawais as $pegawai)
                                                 <option
                                                     {{ $target ? ($target->sales == $pegawai->nama_pegawai ? 'selected' : '') : '' }}>
                                                     {{ $pegawai->nama_pegawai }}
                                                 </option>
                                             @endforeach
                                         </select>
                                     </div>
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     <label for="input-wizard-6"
                                         class="mt-2 mr-3 form-label font-bold">Supervisor</label>
                                 </td>
                                 <td class="w-full">
                                     <div class="intro-y col-span-12 sm:col-span-6 mt-3 flex">
                                         <select id="input-wizard-6" class="form-select" name="supervisor">
                                             @foreach ($pegawais as $pegawai)
                                                 <option
                                                     {{ $target ? ($target->supervisor == $pegawai->nama_pegawai ? 'selected' : '') : '' }}>
                                                     {{ $pegawai->nama_pegawai }}</option>
                                             @endforeach
                                         </select>
                                     </div>
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     <label for="input-wizard-6" class="mt-2 mr-3 form-label font-bold">Area
                                         Rayon</label>
                                 </td>
                                 <td class="w-full">
                                     <div class="intro-y col-span-12 sm:col-span-6 mt-3 flex">
                                         <select id="input-wizard-6" class="form-select" name="area_rayon">
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
                                     <label for="input-wizard-6" class="mt-2 mr-3 form-label font-bold">Sub
                                         Rayon</label>
                                 </td>
                                 <td class="w-full">
                                     <div class="intro-y col-span-12 sm:col-span-6 mt-3 flex">
                                         <select id="input-wizard-6" class="form-select" name="sub_rayon">
                                             @foreach ($sub_rayon as $rayon)
                                                 <option
                                                     {{ $target ? ($target->sub_rayon == $rayon->sub_rayon ? 'selected' : '') : '' }}>
                                                     {{ $rayon->sub_rayon }}</option>
                                             @endforeach
                                         </select>
                                     </div>
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     <label for="input-wizard-6" class="mt-2 mr-3 form-label font-bold">Tahun</label>
                                 </td>
                                 <td class="w-full">
                                     <div class="intro-y col-span-12 sm:col-span-6 mt-3 flex">
                                         <input class="form-control" type="number" id="tahun" name="tahun"
                                             min="1900" max="2099" step="1" required
                                             value="{{ $target ? $target->tahun : '' }}">
                                     </div>
                                 </td>
                             </tr>
                         </table>

                         <table class="table border border-slate-400 mt-5">
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
                                 <tr>
                                     <td>Januari</td>
                                     <td>
                                         <input type="number" name="target_januari" class="form-control" id=""
                                             value="{{ $target ? $target->target_januari : '' }}">
                                     </td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>Februari</td>
                                     <td><input type="number" name="target_februari" class="form-control"
                                             id="" value="{{ $target ? $target->target_februari : '' }}">
                                     </td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>Maret</td>
                                     <td><input type="number" name="target_maret" class="form-control" id=""
                                             value="{{ $target ? $target->target_maret : '' }}">
                                     </td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>April</td>
                                     <td>
                                         <input type="number" name="target_april" class="form-control" id=""
                                             value="{{ $target ? $target->target_april : '' }}">
                                     </td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>Mei</td>
                                     <td><input type="number" name="target_mei" class="form-control" id=""
                                             value="{{ $target ? $target->target_mei : '' }}">
                                     </td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>Juni</td>
                                     <td><input type="number" name="target_juni" class="form-control" id=""
                                             value="{{ $target ? $target->target_juni : '' }}">
                                     </td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>Juli</td>
                                     <td><input type="number" name="target_juli" class="form-control" id=""
                                             value="{{ $target ? $target->target_juli : '' }}">
                                     </td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>Agustus</td>
                                     <td><input type="number" name="target_agustus" class="form-control"
                                             value="{{ $target ? $target->target_agustus : '' }}" id="">
                                     </td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>September</td>
                                     <td><input type="number" name="target_september" class="form-control"
                                             id=""value="{{ $target ? $target->target_september : '' }}">
                                     </td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>Oktober</td>
                                     <td><input type="number" name="target_oktober" class="form-control"
                                             id=""value="{{ $target ? $target->target_oktober : '' }}">
                                     </td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>November</td>
                                     <td><input type="number" name="target_november" class="form-control"
                                             id=""value="{{ $target ? $target->target_november : '' }}">
                                     </td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>Desember</td>
                                     <td><input type="number" name="target_desember" class="form-control"
                                             id=""value="{{ $target ? $target->target_desember : '' }}">
                                     </td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td class="font-bold">Total</td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                 </tr>
                             </tbody>
                         </table>
                         @if (!$lihat)
                             <div class="modal-footer">
                                 <button class="btn btn-secondary mt-5" data-tw-dismiss="modal">Batal</button>
                                 <button type="submit" class="btn btn-primary mt-5">Simpan</button>
                             </div>
                         @endif
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- END: Modal Content -->