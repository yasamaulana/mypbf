<div id="{{ $id_modal . $id }}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route($route, ['id' => $id]) }}" method="POST">
                @csrf
                <div class="flex justify-center text-white modal-header bg-primary align-center">
                    <h2 class="text-lg font-bold">Akun Akuntansi</h2>
                </div>
                <div class="p-10 modal-body">
                    <div class="preview">
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                Jenis Akun
                            </label>
                            <select data-tw-merge aria-label="Default select example" name="jenis_akun" required
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 mt-2 sm:mr-2 mt-2 sm:mr-2">
                                <option {{ $akun ? ($akun->jenis_akun == 'Aktiva' ? 'selected' : '') : '' }}>Aktiva
                                </option>
                                <option {{ $akun ? ($akun->jenis_akun == 'Kewajiban' ? 'selected' : '') : '' }}>
                                    Kewajiban</option>
                                <option {{ $akun ? ($akun->jenis_akun == 'Modal' ? 'selected' : '') : '' }}>Modal
                                </option>
                                <option {{ $akun ? ($akun->jenis_akun == 'Pendapatan' ? 'selected' : '') : '' }}>
                                    Pendapatan</option>
                                <option {{ $akun ? ($akun->jenis_akun == 'HPP' ? 'selected' : '') : '' }}>HPP</option>
                                <option {{ $akun ? ($akun->jenis_akun == 'Biaya' ? 'selected' : '') : '' }}>Biaya
                                </option>
                                <option {{ $akun ? ($akun->jenis_akun == 'Pendapatan Lain' ? 'selected' : '') : '' }}>
                                    Pendapatan Lain</option>
                                <option {{ $akun ? ($akun->jenis_akun == 'Biaya Lain' ? 'selected' : '') : '' }}>Biaya
                                    Lain</option>
                            </select>
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                Kode Akun
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="text" name="kode" required
                                value="{{ $akun ? $akun->kode : '' }}"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <label data-tw-merge for="horizontal-form-1" class="inline-block mb-2 sm:w-32">
                                Nama Akun
                            </label>
                            <input data-tw-merge id="horizontal-form-1" type="text" name="nama_akun" required
                                value="{{ $akun ? $akun->nama_akun : '' }}"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80" />
                        </div>
                        <div data-tw-merge class="items-center block mt-3 sm:flex">
                            <div class="form-check form-switch">
                                <input id="checkbox-switch-7" class="form-check-input" checked type="checkbox"
                                    name="kas_bank" {{ $akun ? ($akun->kas_bank == '1' ? 'checked' : '') : '' }}>
                            </div>
                            <label class="ml-3 font-bold">Kas/Bank</label>
                        </div>
                    </div>
                </div>
                {{-- footer --}}
                <div class="modal-footer">
                    <button type="submit" class="mt-5 btn btn-primary">Simpan Akun</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    // Get references to the dropdowns and input elements
    const jenisAkunDropdowns = document.querySelectorAll('select[name="jenis_akun"]');
    const kodeAkunInputs = document.querySelectorAll('input[name="kode"]');

    // Define a mapping of jenis_akun values to prefixes
    const kodeMapping = {
        'Aktiva': '1-',
        'Kewajiban': '2-',
        'Modal': '3-',
        'Pendapatan': '4-',
        'HPP': '5-',
        'Biaya': '6-',
        'Pendapatan Lain': '7-',
        'Biaya Lain': '8-'
    };

    // Initialize the input fields with the default values
    for (let i = 0; i < jenisAkunDropdowns.length; i++) {
        const selectedOption = jenisAkunDropdowns[i].value;
        kodeAkunInputs[i].value = kodeMapping[selectedOption] || '';
    }

    // Add event listeners to the dropdowns to handle changes
    for (let i = 0; i < jenisAkunDropdowns.length; i++) {
        jenisAkunDropdowns[i].addEventListener('change', function() {
            const selectedOption = jenisAkunDropdowns[i].value;

            // Update the value of the Kode Akun input fields based on the selected option
            kodeAkunInputs[i].value = kodeMapping[selectedOption] || '';
        });
    }

    // Add event listeners to the input fields to prevent changes
    for (let i = 0; i < kodeAkunInputs.length; i++) {
        kodeAkunInputs[i].addEventListener('input', function(event) {
            const selectedOption = jenisAkunDropdowns[i].value;
            const prefix = kodeMapping[selectedOption];

            if (!kodeAkunInputs[i].value.startsWith(prefix)) {
                kodeAkunInputs[i].value = prefix + kodeAkunInputs[i].value.substring(prefix.length);
            }
        });
    }
</script>
