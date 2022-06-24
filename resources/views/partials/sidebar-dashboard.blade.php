<div class="row">

    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">

            <h6 class="sidebar-heading d-flex px-3 mt-3 mb-1 text-muted border-bottom">
                <span data-feather="check-square"></span>
                Halo, {{ auth()->user()->name }}
            </h6>

            <br>

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('home') ? 'active' : '' }} " aria-current="page" href="/">
                        <span data-feather="home"></span>
                        Beranda
                    </a>
                </li>
            </ul>

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('blog') ? 'active' : '' }} " aria-current="page"
                        href="/dashboard/data-berita">
                        <span data-feather="monitor"></span>
                        Berita
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('setting') ? 'active' : '' }} " href="{{route('setting')}}">
                        <span data-feather="airplay"></span>
                        Banner
                    </a>
                </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Laporan</span>
            </h6>

            <ul class="nav flex-column mb-2">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('jadwal') ? 'active' : '' }} " aria-current="page"
                        href="/jadwal">
                        <span data-feather="calendar"></span>
                        Pelatihan
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('data-peserta') ? 'active' : '' }} " href="/data-peserta">
                        <span data-feather="users"></span>
                        Akun
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('data') ? 'active' : '' }} " href="/data">
                        <span data-feather="user-check"></span>
                        Pendaftaran Peserta Pelatihan
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('data-sertifikat') ? 'active' : '' }} " href="/data-sertifikat">
                        <span data-feather="file-text"></span>
                        Sertifikat Pelatihan
                    </a>
                </li>

                
            </ul>

            <ul class="nav flex-column mb-2">
                <li class="nav-item justify-content-center mx-auto">
                    <form action="/" method="post">
                        @csrf
                        <button type="submit" class="nav-link px-4 border-0 bg-light"><span
                                data-feather="log-out"></span> Keluar</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</div>
