<div id="{{ $id_modal . $id }}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-10">
                <div class="preview">
                    <form action="{{ route($route, ['id' => $id]) }}" method="POST">
                        @csrf
                        <div>
                            <label for="vertical-form-1" class="form-label">Nama Golongan</label>
                            <input id="vertical-form-1" name="golongan" type="text" class="form-control"
                                placeholder="" value="{{ $golongan ? $golongan->golongan : '' }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-5">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
