    <!-- BEGIN: Mobile Menu -->
    <div class="mobile-menu md:hidden">
        <div class="mobile-menu-bar">
            <a href="" class="flex mr-auto">
                <img alt="Rubick Tailwind HTML Admin Template" class="w-6" src="dist/images/logo.svg">
            </a>
            <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2"
                    class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        </div>
        <ul class="border-t border-white/[0.08] py-5 hidden">
            <li>
                <a href="javascript:;.html" class="menu {{ $title == 'dashboard' ? 'menu--active' : '' }}">
                    <div class="menu__icon"> <i data-feather="home"></i> </div>
                    <div class="menu__title"> Dashboard <i data-feather="chevron-down" class="menu__sub-icon"></i>
                    </div>
                </a>
                <ul class="menu__sub-open">
                    <li>
                        <a href="/" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Dashboard Admin </div>
                        </a>
                    </li>
                    <li>
                        <a href="/" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Dasboard Sales </div>
                        </a>
                    </li>
                    <li>
                        <a href="/" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Dasboard Kasir </div>
                        </a>
                    </li>
                    <li>
                        <a href="/" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Dasboard Apoteker </div>
                        </a>
                    </li>
                    <li>
                        <a href="/" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Dasboard Keuangan </div>
                        </a>
                    </li>
                    <li>
                        <a href="/" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Dasboard Gudang </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu {{ $title == 'perusahaan' ? 'menu--active' : '' }}">
                    <div class="menu__icon"> <i data-feather="briefcase"></i> </div>
                    <div class="menu__title"> Perusahaan <i data-feather="chevron-down" class="menu__sub-icon"></i>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="/profil-perusahaan" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Profil Perusahaan </div>
                        </a>
                    </li>
                    <li>
                        <a href="/pajak-perusahaan" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Pajak Perusahaan </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Pegawai <i data-feather="chevron-down" class="menu__sub-icon"></i>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/jabatan" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Jabatan</div>
                                </a>
                            </li>
                            <li>
                                <a href="/nama-pegawai" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Nama Pegawai</div>
                                </a>
                            </li>
                            <li>
                                <a href="/set-akses" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Set Akses</div>
                                </a>
                            </li>
                            <li>
                                <a href="/set-user" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">User</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Marketing <i data-feather="chevron-down"
                                    class="menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/area-rayon" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Area Rayon</div>
                                </a>
                            </li>
                            <li>
                                <a href="/sub-rayon" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Sub Rayon</div>
                                </a>
                            </li>
                            <li>
                                <a href="/sales" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Sales</div>
                                </a>
                            </li>
                            <li>
                                <a href="/target-spv" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Target SPV</div>
                                </a>
                            </li>
                            <li>
                                <a href="/target-sales" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Target Sales</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu  {{ $title == 'master' ? 'menu--active' : '' }}">
                    <div class="menu__icon"> <i data-feather="layout"></i> </div>
                    <div class="menu__title"> Master <i data-feather="chevron-down" class="menu__sub-icon"></i>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Produk <i data-feather="chevron-down"
                                    class="menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/obat-dan-barang" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Obat/Barang</div>
                                </a>
                            </li>
                            <li>
                                <a href="/set-harga-jual" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Set Harga Jual</div>
                                </a>
                            </li>
                            <li>
                                <a href="/satuan" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Satuan</div>
                                </a>
                            </li>
                            <li>
                                <a href="/golongan" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Golongan</div>
                                </a>
                            </li>
                            <li>
                                <a href="/sub-golongan" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Sub Golongan</div>
                                </a>
                            </li>
                            <li>
                                <a href="/jenis-obat-barang" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Jenis Obat/Barang</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Gudang <i data-feather="chevron-down"
                                    class="menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/nama-gudang" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Nama Gudang</div>
                                </a>
                            </li>
                            <li>
                                <a href="/rak" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Rak</div>
                                </a>
                            </li>
                            <li>
                                <a href="/sub-rak" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Sub Rak</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Customer <i data-feather="chevron-down"
                                    class="menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/kelompok" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Kelompok</div>
                                </a>
                            </li>
                            <li>
                                <a href="/pelanggan" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Pelanggan</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Produsen & Suplier <i data-feather="chevron-down"
                                    class="menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/produsen" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Produsen</div>
                                </a>
                            </li>
                            <li>
                                <a href="/suplier" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Suplier</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Akuntansi <i data-feather="chevron-down"
                                    class="menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/akun-akuntansi" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Akun Akuntansi</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu {{ $title == 'setting awal' ? 'menu--active' : '' }}">
                    <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                    <div class="menu__title"> Set Awal <i data-feather="chevron-down" class="menu__sub-icon"></i>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="/hutang-awal" class="menu">
                            <div class="menu__icon"> <i data-feather="zap"></i> </div>
                            <div class="menu__title">Hutang Awal</div>
                        </a>
                    </li>
                    <li>
                        <a href="/piutang-awal" class="menu">
                            <div class="menu__icon"> <i data-feather="zap"></i> </div>
                            <div class="menu__title">Piutang Awal</div>
                        </a>
                    </li>
                    <li>
                        <a href="/stok-awal" class="menu">
                            <div class="menu__icon"> <i data-feather="zap"></i> </div>
                            <div class="menu__title">Stok Awal</div>
                        </a>
                    </li>
                    <li>
                        <a href="/saldo-awal" class="menu">
                            <div class="menu__icon"> <i data-feather="zap"></i> </div>
                            <div class="menu__title">Saldo Awal</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu  {{ $title == 'persediaan' ? 'menu--active' : '' }}">
                    <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                    <div class="menu__title"> Persediaan <i data-feather="chevron-down" class="menu__sub-icon"></i>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="/histori-stok" class="menu">
                            <div class="menu__icon"> <i data-feather="zap"></i> </div>
                            <div class="menu__title">Histori Stok</div>
                        </a>
                    </li>
                    <li>
                        <a href="/stok-opname" class="menu">
                            <div class="menu__icon"> <i data-feather="zap"></i> </div>
                            <div class="menu__title">Stok Opname</div>
                        </a>
                    </li>
                    <li>
                        <a href="/mutasi-stok" class="menu">
                            <div class="menu__icon"> <i data-feather="zap"></i> </div>
                            <div class="menu__title">Mutasi Stok</div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- END: Mobile Menu -->
