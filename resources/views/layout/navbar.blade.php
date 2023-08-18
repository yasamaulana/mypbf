    <!-- BEGIN: Top Menu -->
    <nav class="top-nav">
        <ul>
            <li>
                <a href="javascript:;.html" class="top-menu {{ $title == 'dashboard' ? 'top-menu--active' : '' }}">
                    <div class="top-menu__icon"> <i data-feather="home"></i> </div>
                    <div class="top-menu__title"> Dashboard <i data-feather="chevron-down" class="top-menu__sub-icon"></i>
                    </div>
                </a>
                <ul class="top-menu__sub-open">
                    <li>
                        <a href="/" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Dashboard Admin </div>
                        </a>
                    </li>
                    <li>
                        <a href="/" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Dasboard Sales </div>
                        </a>
                    </li>
                    <li>
                        <a href="/" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Dasboard Kasir </div>
                        </a>
                    </li>
                    <li>
                        <a href="/" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Dasboard Apoteker </div>
                        </a>
                    </li>
                    <li>
                        <a href="/" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Dasboard Keuangan </div>
                        </a>
                    </li>
                    <li>
                        <a href="/" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Dasboard Gudang </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="top-menu {{ $title == 'perusahaan' ? 'top-menu--active' : '' }}">
                    <div class="top-menu__icon"> <i data-feather="briefcase"></i> </div>
                    <div class="top-menu__title"> Perusahaan <i data-feather="chevron-down"
                            class="top-menu__sub-icon"></i>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="/profil-perusahaan" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Profil Perusahaan </div>
                        </a>
                    </li>
                    <li>
                        <a href="/pajak-perusahaan" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Pajak Perusahaan </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Pegawai <i data-feather="chevron-down"
                                    class="top-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/jabatan" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Jabatan</div>
                                </a>
                            </li>
                            <li>
                                <a href="/nama-pegawai" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Nama Pegawai</div>
                                </a>
                            </li>
                            <li>
                                <a href="/set-akses" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Set Akses</div>
                                </a>
                            </li>
                            <li>
                                <a href="/set-user" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">User</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Marketing <i data-feather="chevron-down"
                                    class="top-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/area-rayon" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Area Rayon</div>
                                </a>
                            </li>
                            <li>
                                <a href="/sub-rayon" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Sub Rayon</div>
                                </a>
                            </li>
                            <li>
                                <a href="/sales" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Sales</div>
                                </a>
                            </li>
                            <li>
                                <a href="/target-spv" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Target SPV</div>
                                </a>
                            </li>
                            <li>
                                <a href="/target-sales" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Target Sales</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="top-menu  {{ $title == 'master' ? 'top-menu--active' : '' }}">
                    <div class="top-menu__icon"> <i data-feather="layout"></i> </div>
                    <div class="top-menu__title"> Master <i data-feather="chevron-down"
                            class="top-menu__sub-icon"></i>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="javascript:;" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Produk <i data-feather="chevron-down"
                                    class="top-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/obat-dan-barang" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Obat/Barang</div>
                                </a>
                            </li>
                            <li>
                                <a href="/set-harga-jual" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Set Harga Jual</div>
                                </a>
                            </li>
                            <li>
                                <a href="/satuan" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Satuan</div>
                                </a>
                            </li>
                            <li>
                                <a href="/golongan" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Golongan</div>
                                </a>
                            </li>
                            <li>
                                <a href="/sub-golongan" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Sub Golongan</div>
                                </a>
                            </li>
                            <li>
                                <a href="/jenis-obat-barang" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Jenis Obat/Barang</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Gudang <i data-feather="chevron-down"
                                    class="top-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/nama-gudang" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Nama Gudang</div>
                                </a>
                            </li>
                            <li>
                                <a href="/rak" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Rak</div>
                                </a>
                            </li>
                            <li>
                                <a href="/sub-rak" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Sub Rak</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Customer <i data-feather="chevron-down"
                                    class="top-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/kelompok" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Kelompok</div>
                                </a>
                            </li>
                            <li>
                                <a href="/pelanggan" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Pelanggan</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Produsen & Suplier <i data-feather="chevron-down"
                                    class="top-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/produsen" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Produsen</div>
                                </a>
                            </li>
                            <li>
                                <a href="/suplier" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Suplier</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Akuntansi <i data-feather="chevron-down"
                                    class="top-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/akun-akuntansi" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Akun Akuntansi</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="top-menu {{ $title == 'setting awal' ? 'top-menu--active' : '' }}">
                    <div class="top-menu__icon"> <i data-feather="inbox"></i> </div>
                    <div class="top-menu__title"> Set Awal <i data-feather="chevron-down"
                            class="top-menu__sub-icon"></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="/hutang-awal" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                            <div class="top-menu__title">Hutang Awal</div>
                        </a>
                    </li>
                    <li>
                        <a href="/piutang-awal" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                            <div class="top-menu__title">Piutang Awal</div>
                        </a>
                    </li>
                    <li>
                        <a href="/stok-awal" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                            <div class="top-menu__title">Stok Awal</div>
                        </a>
                    </li>
                    <li>
                        <a href="/saldo-awal" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                            <div class="top-menu__title">Saldo Awal</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="top-menu  {{ $title == 'persediaan' ? 'top-menu--active' : '' }}">
                    <div class="top-menu__icon"> <i data-feather="inbox"></i> </div>
                    <div class="top-menu__title"> Persediaan <i data-feather="chevron-down"
                            class="top-menu__sub-icon"></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="/histori-stok" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                            <div class="top-menu__title">Histori Stok</div>
                        </a>
                    </li>
                    <li>
                        <a href="/stok-opname" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                            <div class="top-menu__title">Stok Opname</div>
                        </a>
                    </li>
                    <li>
                        <a href="/mutasi-stok" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                            <div class="top-menu__title">Mutasi Stok</div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- END: Top Menu -->
