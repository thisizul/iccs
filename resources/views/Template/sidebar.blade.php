<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light">AHITO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
            </div>
            <div class="info">
                <a href="#" class="d-block">Selamat Datang</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/index" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                @if(auth()->user()->type=="admin")
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-user"></i>
                        <p>
                            User Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/indexuser" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pengaturan role</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- ustad -->
                <li class="nav-item">
                    <!-- <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-user"></i>
                        <p>
                            Ustad Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a> -->
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/indexuser" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pengaturan role</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- end ustad -->
                <!-- santri -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-user"></i>
                        <p>
                            Santri Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/indexsantri" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pengaturan Santri</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- end santri -->
                <li class="nav-item">
                    <a href="#" class="nav-link  ">
                        <i class="nav-icon fa fa-mosque"></i>
                        <p>
                            Infaq Masjid
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview active">
                        <li class="nav-item">
                            <a href="/infaqmasuk" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Infaq Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/infaqkeluar" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Infaq Keluar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-brain"></i>
                        <p>
                            Data Master
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/jamaah" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Jamaah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/mustahik" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Penerima Zakat</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-scale-balanced"></i>
                        <p>
                            Zakat
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/zakatfitrahmasuk" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Zakat Fitrah Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/zakatmalmasuk" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Zakat Mal Masuk</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Rekapitulasi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="/rekapzakatfitrah" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rekapitulasi Zakat Fitrah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/rekapzakatmaal" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rekapitulasi Zakat Maal</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="rekapjamaah" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rekapitulasi Jamaah</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Sidebar Amil -->
                @endif
                @if(auth()->user()->type=="admin")
                @elseif(auth()->user()->type=="amil")
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-brain"></i>
                        <p>
                            Data Master
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/jamaah" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Jamaah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/mustahik" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Penerima Zakat</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-scale-balanced"></i>
                        <p>
                            Zakat
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/zakatfitrahmasuk" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Zakat Fitrah Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/zakatmalmasuk" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Zakat Mal Masuk</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Rekapitulasi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="/rekapzakatfitrah" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rekapitulasi Zakat Fitrah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/rekapzakatmaal" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rekapitulasi Zakat Maal</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="rekapjamaah" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rekapitulasi Jamaah</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                <!-- End Sidebar Amil -->
                <!-- Sidebar Bendahara -->
                @if(auth()->user()->type=="bendahara")
                <li class="nav-item">
                    <a href="#" class="nav-link  ">
                        <i class="nav-icon fa fa-mosque"></i>
                        <p>
                            Infaq Masjid
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview active">
                        <li class="nav-item">
                            <a href="/infaqmasuk" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Infaq Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/infaqkeluar" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Infaq Keluar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Rekapitulasi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/rekapinfaq" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rekapitulasi Infaq</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                <!-- End Sidebar Bendahara -->

                @if(auth()->user()->type=="admin")
                @elseif(auth()->user()->type=="ustad")
                <li class="nav-item">
                    <!-- <a href="#" class="nav-link  ">
                        <i class="nav-icon fa fa-mosque"></i>
                        <p>
                            Santri
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a> -->
                    <ul class="nav nav-treeview active">
                        <li class="nav-item">
                            <a href="/infaqmasuk" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Infaq Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/infaqkeluar" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Infaq Keluar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Ngaji
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/indexngaji" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Santri</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="/indexngaji" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Ngaji</p>
                            </a>
                        </li> -->
                    </ul>
                </li> @endif
                @if(auth()->user()->type=="admin")
                @elseif(auth()->user()->type=="santri")
                <h1>santri1</h1>
                @endif
                <!-- <li class="nav-item">
                    <a href="/indexsantringaji" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Santri</p>
                    </a>
                </li> -->
                <li class="nav-item">

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-right-from-bracket"></i>
                        {{ __('Logout') }}
                    </a>
                </li>
                <!-- 
                <li class="nav-header"></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                    <i class="far fa-circle nav-icon"></i>
                    {{ __('Logout') }}
                </a> -->

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>