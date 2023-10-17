<div id="{{ $id_modal }}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="text-center align-center text-lg">Tambahkan Akses User</h1>
            </div>
            <div class="modal-body px-5">
                <form action="{{ route($route, $role ? ['id' => $role->id] : '') }}" method="POST">
                    @csrf
                    <div class="flex gap-3 mb-3">
                        <label for="vertical-form-1" class="form-label w-32 mt-2">Nama Akses</label>
                        <input required name="role" id="vertical-form-1" type="text" class="form-control"
                            placeholder="Isikan nama role akses" value="{{ $role ? $role->name : '' }}">
                    </div>
                    <div class="overflow-auto">
                        <table class="table border">
                            <thead>
                                <tr>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <div data-tw-merge class="flex items-center mt-2 mt-2">
                                            <input data-tw-merge type="checkbox"
                                                class="transition-all duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                                id="checkbox-switch-akses" value="" onchange="checkAkses(this)" />
                                            <label data-tw-merge for="checkbox-switch-akses"
                                                class="cursor-pointer ml-2">Akses</label>
                                        </div>
                                    </td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        Menu</td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <div data-tw-merge class="flex items-center mt-2 mt-2">
                                            <input data-tw-merge type="checkbox"
                                                class="transition-all duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                                id="checkbox-switch-1" value="" onchange="checkTambah(this)" />
                                            <label data-tw-merge for="checkbox-switch-1"
                                                class="cursor-pointer ml-2">Tambah</label>
                                        </div>
                                    </td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <div data-tw-merge class="flex items-center mt-2 mt-2">
                                            <input data-tw-merge type="checkbox"
                                                class="transition-all duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                                id="checkbox-switch-1" value="" onchange="checkEdit(this)" />
                                            <label data-tw-merge for="checkbox-switch-1"
                                                class="cursor-pointer ml-2">Edit</label>
                                        </div>
                                    </td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <div data-tw-merge class="flex items-center mt-2 mt-2">
                                            <input data-tw-merge type="checkbox"
                                                class="transition-all duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                                id="checkbox-switch-1" value="" onchange="checkDelete(this)" />
                                            <label data-tw-merge for="checkbox-switch-1"
                                                class="cursor-pointer ml-2">Hapus</label>
                                        </div>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="akses_profil"
                                            class="transition-all group-akses duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="akses profil perusahaan"
                                            {{ $role ? ($role->hasPermissionTo('akses profil perusahaan') ? 'checked' : '') : '' }} />
                                    </td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        Profil Perusahan</td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                    </td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="edit_profil"
                                            class="transition-all group-edit duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="edit profil perusahaan"
                                            {{ $role ? ($role->hasPermissionTo('edit profil perusahaan') ? 'checked' : '') : '' }} />
                                    </td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="akses_pajak"
                                            class="transition-all group-akses duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="akses pajak"
                                            {{ $role ? ($role->hasPermissionTo('akses pajak') ? 'checked' : '') : '' }} />
                                    </td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        Pajak Perusahan</td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="tambah_pajak"
                                            class="transition-all group-tambah duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="tambah pajak"
                                            {{ $role ? ($role->hasPermissionTo('tambah pajak') ? 'checked' : '') : '' }} />
                                    </td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="edit_pajak"
                                            class="transition-all group-edit duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="edit pajak"
                                            {{ $role ? ($role->hasPermissionTo('edit pajak') ? 'checked' : '') : '' }} />
                                    </td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="delete_pajak"
                                            class="transition-all group-delete duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="delete pajak"
                                            {{ $role ? ($role->hasPermissionTo('delete pajak') ? 'checked' : '') : '' }} />
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="akses_pegawai"
                                            class="transition-all group-akses duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="akses pegawai"
                                            {{ $role ? ($role->hasPermissionTo('akses pegawai') ? 'checked' : '') : '' }} />
                                    </td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        Pegawai</td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="tambah_pegawai"
                                            class="transition-all group-tambah duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="tambah pegawai"
                                            {{ $role ? ($role->hasPermissionTo('tambah pegawai') ? 'checked' : '') : '' }} />
                                    </td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="edit_pegawai"
                                            class="transition-all group-edit duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="edit pegawai"
                                            {{ $role ? ($role->hasPermissionTo('edit pegawai') ? 'checked' : '') : '' }} />
                                    </td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="delete_pegawai"
                                            class="transition-all group-delete duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="delete pegawai"
                                            {{ $role ? ($role->hasPermissionTo('delete pegawai') ? 'checked' : '') : '' }} />
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="akses_jawabatan"
                                            class="transition-all group-akses duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="akses jabatan"
                                            {{ $role ? ($role->hasPermissionTo('akses jabatan') ? 'checked' : '') : '' }} />
                                    </td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        Jabatan</td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="tambah_jabatan"
                                            class="transition-all group-tambah duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="tambah jabatan"
                                            {{ $role ? ($role->hasPermissionTo('tambah jabatan') ? 'checked' : '') : '' }} />
                                    </td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="edit_jabatan"
                                            class="transition-all group-edit duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="edit jabatan"
                                            {{ $role ? ($role->hasPermissionTo('edit jabatan') ? 'checked' : '') : '' }} />
                                    </td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="delete_jabatan"
                                            class="transition-all group-delete duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="delete jabatan"
                                            {{ $role ? ($role->hasPermissionTo('delete jabatan') ? 'checked' : '') : '' }} />
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="akses_nama_pegawai"
                                            class="transition-all group-akses duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="akses nama pegawai"
                                            {{ $role ? ($role->hasPermissionTo('akses nama pegawai') ? 'checked' : '') : '' }} />
                                    </td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        Nama Pegawai</td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="tambah_nama_pegawai"
                                            class="transition-all group-tambah duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="tambah nama pegawai"
                                            {{ $role ? ($role->hasPermissionTo('tambah nama pegawai') ? 'checked' : '') : '' }} />
                                    </td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="edit_nama_pegawai"
                                            class="transition-all group-edit duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="edit nama pegawai"
                                            {{ $role ? ($role->hasPermissionTo('edit nama pegawai') ? 'checked' : '') : '' }} />
                                    </td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="delete_nama_pegawai"
                                            class="transition-all group-delete duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="delete nama pegawai"
                                            {{ $role ? ($role->hasPermissionTo('delete nama pegawai') ? 'checked' : '') : '' }} />
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="akses_set_akses"
                                            class="transition-all group-akses duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="akses set akses"
                                            {{ $role ? ($role->hasPermissionTo('akses set akses') ? 'checked' : '') : '' }} />
                                    </td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        Set Akses</td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="tambah_set_akses"
                                            class="transition-all group-tambah duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="tambah set akses"
                                            {{ $role ? ($role->hasPermissionTo('tambah set akses') ? 'checked' : '') : '' }} />
                                    </td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="edit_set_akses"
                                            class="transition-all group-edit duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="edit set akses"
                                            {{ $role ? ($role->hasPermissionTo('edit set akses') ? 'checked' : '') : '' }} />
                                    </td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="delete_set_akses"
                                            class="transition-all group-delete duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="delete set akses"
                                            {{ $role ? ($role->hasPermissionTo('delete set akses') ? 'checked' : '') : '' }} />
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="akses_set_user"
                                            class="transition-all group-akses duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="akses set user"
                                            {{ $role ? ($role->hasPermissionTo('akses set user') ? 'checked' : '') : '' }} />
                                    </td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        Set User</td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="tambah_set_user"
                                            class="transition-all group-tambah duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="tambah set user"
                                            {{ $role ? ($role->hasPermissionTo('tambah set user') ? 'checked' : '') : '' }} />
                                    </td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="edit_set_user"
                                            class="transition-all group-edit duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="edit set user"
                                            {{ $role ? ($role->hasPermissionTo('edit set user') ? 'checked' : '') : '' }} />
                                    </td>
                                    <td
                                        class="border-b-2 dark:border-darkmode-300 border-l border-r border-t whitespace-nowrap">
                                        <input data-tw-merge type="checkbox" name="delete_set_user"
                                            class="transition-all group-delete duration-100 ease-in-out shadow border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type=&#039;radio&#039;]]:checked:bg-primary [&amp;[type=&#039;radio&#039;]]:checked:border-primary [&amp;[type=&#039;radio&#039;]]:checked:border-opacity-10 [&amp;[type=&#039;checkbox&#039;]]:checked:bg-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-primary [&amp;[type=&#039;checkbox&#039;]]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                            id="checkbox-switch-1" value="delete set user"
                                            {{ $role ? ($role->hasPermissionTo('delete set user') ? 'checked' : '') : '' }} />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary mt-5"><i data-feather="save"
                                class="w-4 h-4 mr-1"></i>
                            Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function checkAkses(box) {
        let checkboxes = document.querySelectorAll('input.group-akses');
        if (box.checked) {
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = true;
            });
        } else {
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = false;
            });
        }
    }

    function checkTambah(box) {
        let checkboxes = document.querySelectorAll('input.group-tambah');
        if (box.checked) {
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = true;
            });
        } else {
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = false;
            });
        }
    }

    function checkEdit(box) {
        let checkboxes = document.querySelectorAll('input.group-edit');
        if (box.checked) {
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = true;
            });
        } else {
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = false;
            });
        }
    }

    function checkDelete(box) {
        let checkboxes = document.querySelectorAll('input.group-delete');
        if (box.checked) {
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = true;
            });
        } else {
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = false;
            });
        }
    }
</script>
