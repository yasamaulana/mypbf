    <!-- BEGIN: Mobile Menu -->
    <div class="mobile-menu md:hidden">
        <div class="mobile-menu-bar">
            <a href="" class="flex mr-auto">
                <img alt="Rubick Tailwind HTML Admin Template" class="w-20" src="dist/pbflogo.png">
            </a>
            <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2"
                    class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        </div>
        <ul class="border-t border-white/[0.08] py-5 hidden">
            <li>
                <a href="javascript:;.html" class="menu">
                    <div class="menu__icon"> <i data-feather="home"></i> </div>
                    <div class="menu__title"> Dashboard <i data-feather="chevron-down" class="menu__sub-icon"></i>
                    </div>
                </a>
                <ul class="{{ $title == 'dashboard' ? 'menu__sub-open' : '' }}">
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
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-feather="briefcase"></i> </div>
                    <div class="menu__title"> Perusahaan <i data-feather="chevron-down" class="menu__sub-icon"></i>
                    </div>
                </a>
                <ul class="{{ $title == 'perusahaan' ? 'menu__sub-open' : '' }}">
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
                            <li>
                                <a href="/target-produk" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Target Produk</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-feather="layout"></i> </div>
                    <div class="menu__title"> Master <i data-feather="chevron-down" class="menu__sub-icon"></i>
                    </div>
                </a>
                <ul class="{{ $title == 'master' ? 'menu__sub-open' : '' }}">
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
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                    <div class="menu__title"> Set Awal <i data-feather="chevron-down" class="menu__sub-icon"></i>
                    </div>
                </a>
                <ul class="{{ $title == 'setting awal' ? 'menu__sub-open' : '' }}">
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
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                    <div class="menu__title"> Persediaan <i data-feather="chevron-down" class="menu__sub-icon"></i>
                    </div>
                </a>
                <ul class="{{ $title == 'persediaan' ? 'menu__sub-open' : '' }}">
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
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-feather="layout"></i> </div>
                    <div class="menu__title"> Transaksi <i data-feather="chevron-down" class="menu__sub-icon"></i>
                    </div>
                </a>
                <ul class="{{ $title == 'transaksi' ? 'menu__sub-open' : '' }}">
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Rencana Pengadaan <i data-feather="chevron-down"
                                    class="menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/analisis-pareto-abc" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Analisis Pareto ABC</div>
                                </a>
                            </li>
                            <li>
                                <a href="/analisis-order" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Set Analisis Order</div>
                                </a>
                            </li>
                            <li>
                                <a href="/defecta" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Defecta</div>
                                </a>
                            </li>
                            <li>
                                <a href="/pembuatan-sp" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Pembuatan SP</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Pembelian <i data-feather="chevron-down"
                                    class="menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/pembelian " class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Pembelian</div>
                                </a>
                            </li>
                            <li>
                                <a href="/terima-barang" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Terima Barang</div>
                                </a>
                            </li>
                            <li>
                                <a href="/retur-pembelian" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Retur Pembelian</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Penjualan <i data-feather="chevron-down"
                                    class="menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/sp-penjualan " class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">SP Penjualan</div>
                                </a>
                            </li>
                            <li>
                                <a href="/cek-sp-penjualan" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Cek SP Penjualan</div>
                                </a>
                            </li>
                            <li>
                                <a href="/penjualan" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Penjualan</div>
                                </a>
                            </li>
                            <li>
                                <a href="/retur-penjualan" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Retur Penjualan</div>
                                </a>
                            </li>
                            <li>
                                <a href="/surat-jalan" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Surat Jalan</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu ">
                    <div class="menu__icon"> <i data-feather="layout"></i> </div>
                    <div class="menu__title"> Keuangan & Akuntansi <i data-feather="chevron-down"
                            class="menu__sub-icon"></i>
                    </div>
                </a>
                <ul class="{{ $title == 'keuangan & akuntansi' ? 'menu__sub-open' : '' }}">
                    <li class="">
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Keuangan <i data-feather="chevron-down"
                                    class="menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/kontrabon" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Kontrabon</div>
                                </a>
                            </li>
                            <li>
                                <a href="/tagihan-pelanggan" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Tagihan Pelanggan</div>
                                </a>
                            </li>
                            <li>
                                <a href="/pembayaran-hutang" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Pembayaran Hutang</div>
                                </a>
                            </li>
                            <li>
                                <a href="/pembayaran-piutang" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Pembayaran Piutang</div>
                                </a>
                            </li>
                            <li>
                                <a href="/mutasi-saldo" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Mutasi Saldo</div>
                                </a>
                            </li>
                            <li>
                                <a href="/jurnal-akun" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Jurnal Akun</div>
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
                                <a href="/jurnal-umum " class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Jurnal Umum</div>
                                </a>
                            </li>
                            <li>
                                <a href="/buku-besar" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Buku Besar</div>
                                </a>
                            </li>
                            <li>
                                <a href="/neraca-lajur" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Neraca Lajur</div>
                                </a>
                            </li>
                            <li>
                                <a href="/neraca" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Neraca</div>
                                </a>
                            </li>
                            <li>
                                <a href="/laba-rugi" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Laba/Rugi</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-feather="layout"></i> </div>
                    <div class="menu__title"> Utilities <i data-feather="chevron-down" class="menu__sub-icon"></i>
                    </div>
                </a>
                <ul class="{{ $title == 'utilities' ? 'menu__sub-open' : '' }}">
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Pajak <i data-feather="chevron-down"
                                    class="menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/pajak-masukan" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Pajak Masukan</div>
                                </a>
                            </li>
                            <li>
                                <a href="/retur-pajak-masukan" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Retur Pajak Masukan</div>
                                </a>
                            </li>
                            <li>
                                <a href="/pajak-keluaran" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Pajak Keluaran</div>
                                </a>
                            </li>
                            <li>
                                <a href="/retur-pajak-keluaran" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title"> Retur Pajak Keluaran</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Database <i data-feather="chevron-down"
                                    class="menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/backup " class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Backup</div>
                                </a>
                            </li>
                            <li>
                                <a href="/restore" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Restore</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Laporan <i data-feather="chevron-down"
                                    class="menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/lap-list-produk " class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Lap List Produk</div>
                                </a>
                            </li>
                            <li>
                                <a href="/lap-pricelist-produk" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Lap Pricelist Produk</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- END: Mobile Menu -->
