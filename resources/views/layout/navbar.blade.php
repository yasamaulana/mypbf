    <!-- BEGIN: Top Menu -->
    <nav class="top-nav">
        <ul class="">
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
                    @can('akses profil perusahaan')
                        <li>
                            <a href="/profil-perusahaan" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> Profil Perusahaan </div>
                            </a>
                        </li>
                    @endcan
                    @can('akses pajak')
                        <li>
                            <a href="/pajak-perusahaan" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> Pajak Perusahaan </div>
                            </a>
                        </li>
                    @endcan
                    @can('akses pegawai')
                        <li>
                            <a href="javascript:;" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> Pegawai <i data-feather="chevron-down"
                                        class="top-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                @can('akses jabatan')
                                    <li>
                                        <a href="/jabatan" class="top-menu">
                                            <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="top-menu__title">Jabatan</div>
                                        </a>
                                    </li>
                                @endcan
                                @can('akses nama pegawai')
                                    <li>
                                        <a href="/nama-pegawai" class="top-menu">
                                            <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="top-menu__title">Nama Pegawai</div>
                                        </a>
                                    </li>
                                @endcan
                                @can('akses set akses')
                                    <li>
                                        <a href="/set-akses" class="top-menu">
                                            <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="top-menu__title">Set Akses</div>
                                        </a>
                                    </li>
                                @endcan
                                @can('akses set user')
                                    <li>
                                        <a href="/set-user" class="top-menu">
                                            <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="top-menu__title">User</div>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
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
                            <li>
                                <a href="/target-produk" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Target Produk</div>
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
                                    <div class="top-menu__title">Produk</div>
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
                                    <div class="top-menu__title">Kategori</div>
                                </a>
                            </li>
                            <li>
                                <a href="/sub-golongan" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Golongan</div>
                                </a>
                            </li>
                            <li>
                                <a href="/jenis-obat-barang" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Jenis Produk</div>
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
                            <li>
                                <a href="/setting-akuntansi" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Setting Akuntansi</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Barcode <i data-feather="chevron-down"
                                    class="top-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/produk" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Produk</div>
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
            <li>
                <a href="javascript:;" class="top-menu  {{ $title == 'transaksi' ? 'top-menu--active' : '' }}">
                    <div class="top-menu__icon"> <i data-feather="layout"></i> </div>
                    <div class="top-menu__title"> Transaksi <i data-feather="chevron-down"
                            class="top-menu__sub-icon"></i>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="javascript:;" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Rencana Pengadaan <i data-feather="chevron-down"
                                    class="top-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/analisis-pareto-abc" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Analisis Pareto ABC</div>
                                </a>
                            </li>
                            <li>
                                <a href="/analisis-order" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Set Analisis Order</div>
                                </a>
                            </li>
                            <li>
                                <a href="/defecta" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Defecta</div>
                                </a>
                            </li>
                            <li>
                                <a href="/pembuatan-sp" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Pembuatan SP</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Pembelian <i data-feather="chevron-down"
                                    class="top-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/pembelian " class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Pembelian</div>
                                </a>
                            </li>
                            <li>
                                <a href="/terima-barang" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Terima Barang</div>
                                </a>
                            </li>
                            <li>
                                <a href="/retur-pembelian" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Retur Pembelian</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Penjualan <i data-feather="chevron-down"
                                    class="top-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/sp-penjualan " class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">SP Penjualan</div>
                                </a>
                            </li>
                            <li>
                                <a href="/cek-sp-penjualan" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Cek SP Penjualan</div>
                                </a>
                            </li>
                            <li>
                                <a href="/penjualan" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Penjualan</div>
                                </a>
                            </li>
                            <li>
                                <a href="/retur-penjualan" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Retur Penjualan</div>
                                </a>
                            </li>
                            <li>
                                <a href="/surat-jalan" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Surat Jalan</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"
                    class="top-menu  {{ $title == 'keuangan & akuntansi' ? 'top-menu--active' : '' }}">
                    <div class="top-menu__icon"> <i data-feather="layout"></i> </div>
                    <div class="top-menu__title"> Keuangan & Akuntansi <i data-feather="chevron-down"
                            class="top-menu__sub-icon"></i>
                    </div>
                </a>
                <ul class="">
                    <li class="">
                        <a href="javascript:;" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Keuangan <i data-feather="chevron-down"
                                    class="top-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="left-side">
                            <li>
                                <a href="/kontrabon" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Kontrabon</div>
                                </a>
                            </li>
                            <li>
                                <a href="/tagihan-pelanggan" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Tagihan Pelanggan</div>
                                </a>
                            </li>
                            <li>
                                <a href="/pembayaran-hutang" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Pembayaran Hutang</div>
                                </a>
                            </li>
                            <li>
                                <a href="/pembayaran-piutang" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Pembayaran Piutang</div>
                                </a>
                            </li>
                            <li>
                                <a href="/mutasi-saldo" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Mutasi Saldo</div>
                                </a>
                            </li>
                            <li>
                                <a href="/jurnal-akun" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Jurnal Akun</div>
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
                        <ul class="left-side">
                            <li>
                                <a href="/jurnal-umum " class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Jurnal Umum</div>
                                </a>
                            </li>
                            <li>
                                <a href="/buku-besar" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Buku Besar</div>
                                </a>
                            </li>
                            <li>
                                <a href="/neraca-lajur" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Neraca Lajur</div>
                                </a>
                            </li>
                            <li>
                                <a href="/neraca" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Neraca</div>
                                </a>
                            </li>
                            <li>
                                <a href="/laba-rugi" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Laba/Rugi</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="top-menu  {{ $title == 'utilities' ? 'top-menu--active' : '' }}">
                    <div class="top-menu__icon"> <i data-feather="layout"></i> </div>
                    <div class="top-menu__title"> Utilities <i data-feather="chevron-down"
                            class="top-menu__sub-icon"></i>
                    </div>
                </a>
                <ul class="left-side">
                    <li>
                        <a href="javascript:;" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Pajak <i data-feather="chevron-down"
                                    class="top-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="left-side">
                            <li>
                                <a href="/pajak-masukan" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Pajak Masukan</div>
                                </a>
                            </li>
                            <li>
                                <a href="/retur-pajak-masukan" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Retur Pajak Masukan</div>
                                </a>
                            </li>
                            <li>
                                <a href="/pajak-keluaran" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Pajak Keluaran</div>
                                </a>
                            </li>
                            <li>
                                <a href="/retur-pajak-keluaran" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title"> Retur Pajak Keluaran</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Database <i data-feather="chevron-down"
                                    class="top-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="left-side">
                            <li>
                                <a href="/backup " class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Backup</div>
                                </a>
                            </li>
                            <li>
                                <a href="/restore" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Restore</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="top-menu">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Laporan <i data-feather="chevron-down"
                                    class="top-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="left-side">
                            <li>
                                <a href="/lap-list-produk " class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Lap List Produk</div>
                                </a>
                            </li>
                            <li>
                                <a href="/lap-pricelist-produk" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="top-menu__title">Lap Pricelist Produk</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- END: Top Menu -->
