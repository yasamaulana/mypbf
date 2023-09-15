@php
    use App\Models\Jabatan;
@endphp
<!-- BEGIN: Modal Content -->
<div id="{{ $modal_id . $id }}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form action="{{ route($route, ['id' => $id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-10">
                    <div class="preview">
                        <div class="sm:flex gap-5 w-full">
                            <div class="w-full">
                                <div>
                                    <label for="vertical-form-1" class="form-label">NIP</label>
                                    <input required name="nip" id="vertical-form-1" type="text"
                                        class="form-control" placeholder="" value="{{ $pegawai->nip }}">
                                </div>
                                <div>
                                    <label for="vertical-form-1" class="form-label mt-3">Nama Pegawai</label>
                                    <input required name="nama_pegawai" id="vertical-form-1" type="text"
                                        class="form-control" placeholder="" value="{{ $pegawai->nama_pegawai }}">
                                </div>
                                <div>
                                    <label for="vertical-form-1" class="form-label mt-3">No. BPJS TK</label>
                                    <input required name="no_bpjs_tk" id="vertical-form-1" type="text"
                                        class="form-control" placeholder="" value="{{ $pegawai->no_bpjs_tk }}">
                                </div>
                                <div>
                                    <label for="vertical-form-1" class="form-label mt-3">Alamat</label>
                                    <input required name="alamat" id="vertical-form-1" type="text"
                                        class="form-control" placeholder="" value="{{ $pegawai->alamat }}">
                                </div>
                                <div>
                                    <label for="vertical-form-1" class="form-label mt-3">Nomor Telepon</label>
                                    <input required name="no_telepon" id="vertical-form-1" type="text"
                                        class="form-control" placeholder="" value="{{ $pegawai->no_telepon }}">
                                </div>
                                <div>
                                    <label for="vertical-form-1" class="form-label mt-3">Tanggal Lahir</label>
                                    <input required name="tgl_lahir" id="vertical-form-1" type="date"
                                        class="form-control" placeholder="" value="{{ $pegawai->tgl_lahir }}">
                                </div>
                            </div>
                            <div class="w-full">
                                <div>
                                    <label for="vertical-form-1" class="form-label mt-3 sm:mt-0">Jenis
                                        Kelamin</label>
                                    <select required name="jenis_kelamin" id="jenis_kelamin"
                                        data-placeholder="jenis_kelamin" class="form-control w-full">
                                        <option {{ $pegawai->jenis_kelamin == 'Laki laki' ? 'selected' : '' }}
                                            value="Laki-laki">Laki laki</option>
                                        <option {{ $pegawai->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}
                                            value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="vertical-form-1" class="form-label mt-3">Jabatan</label>
                                    <select required name="jabatan" id="jabatan" data-placeholder="Jabatan"
                                        class="form-control w-full">
                                        @foreach (Jabatan::where('id_perusahaan', Auth::user()->id_perusahaan)->get() as $jabatan)
                                            <option {{ $pegawai->jabatan == $jabatan->jabatan ? 'selected' : '' }}
                                                value="{{ $jabatan->jabatan }}">
                                                {{ $jabatan->jabatan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="flex gap-3">
                                    <div class="form-check form-switch mt-3">
                                        <label class="form-check-label" for="checkbox-switch-7">Marketing</label>
                                        <input name="marketing" id="checkbox-switch-7" class="form-check-input mx-3"
                                            type="checkbox" {{ $pegawai->marketing == 'on' ? 'checked' : '' }}>
                                    </div>
                                    <div class="form-check form-switch mt-3">
                                        <label class="form-check-label" for="checkbox-switch-7">Kolektor</label>
                                        <input name="kolektor" id="checkbox-switch-7" class="form-check-input mx-3"
                                            type="checkbox" {{ $pegawai->kolektor == 'on' ? 'checked' : '' }}>
                                    </div>
                                </div>
                                <div class="form-check form-switch mt-5">
                                    <label class="form-check-label" for="checkbox-switch-7">Status
                                        Pegawai</label>
                                    <input name="status" id="checkbox-switch-7" class="form-check-input mx-3"
                                        type="checkbox" {{ $pegawai->status == 'on' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="checkbox-switch-7">Aktif/Tidak
                                        Aktif</label>
                                </div>
                                <div class="mt-3">
                                    <label for="vertical-form-1" class="form-label">Foto</label>
                                    <input class="form-control border border-slate-600" name="foto"
                                        type="file" />
                                </div>
                                <img class="mt-2" width="200" src="{{ url('storage/foto/' . $pegawai->foto) }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
