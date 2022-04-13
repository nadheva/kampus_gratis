<nav class="navbar bg-primary navbar-expand-xl">
    <div class="container-fluid px-3 px-xl-5">
        <!-- Main navbar START -->
        <div class="navbar-collapse w-100 collapse" id="navbarCollapse">
            <div class="mx-auto" style="width: 200px;">
            </div>
            <!-- Nav Main menu END -->

            <!-- Nav Search START -->
            <div class="nav px-4 ml-4 flex-nowrap align-items-center">
                <div class="nav-item w-100">
                    <ul class="navbar-nav mx-auto order-0">
                        <li class="nav-item menu {{ request()->is('berita*') ? 'active' : '' }}"><a
                                class="nav-link putih" href="/berita">Berita</a></li>
                        <li class="nav-item menu {{ request()->is('alumni*') ? 'active' : '' }}"><a
                                class="nav-link putih" href="/alumni">Alumni</a></li>
                        <li class="nav-item menu {{ request()->is('penelitian*') ? 'active' : '' }}"><a
                                class="nav-link putih" href="{{ route('penelitian') }}">Penelitian</a></li>
                        <li class="nav-item menu {{ request()->is('pengabdian*') ? 'active' : '' }}"><a
                                class="nav-link putih" href="{{ url('pengabdian') }}">Pengabdian</a></li>
                        <li class="nav-item menu {{ request()->is('pengumuman*') ? 'active' : '' }}"><a
                                class="nav-link putih" href="/pengumuman">Pengumuman</a></li>
                        <li class="nav-item menu {{ request()->is('faq*') ? 'active' : '' }}"><a
                                class="nav-link putih" href="/faq">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <!-- Nav Search END -->
        </div>
        <!-- Main navbar END -->
    </div>
</nav>

<nav class="navbar navbar-expand-xl">
    <div class="container-fluid px-3 px-xl-5">
        <!-- Logo START -->
        <a class="navbar-brand" href="/">
            <img class="light-mode-item navbar-brand-item" src="{{ asset('assets/images/logo.png') }}" alt="logo"
                style="max-width: 200%">
            <img class="dark-mode-item navbar-brand-item" src="{{ asset('assets/images/logo.png') }}" alt="logo"
                style="max-width: 200%">
        </a>
        <!-- Logo END -->

        <!-- Responsive navbar toggler -->
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-animation">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>

        <!-- Main navbar START -->
        <div class="navbar-collapse w-100 collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto order-0">

                <li class="nav-item menu "><a class="nav-link {{ request()->is('tentang*') ? 'active' : '' }}"
                        href="{{ route('tentang') }}">Tentang Kampus Gratis</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('pendidikan*', 'diploma*', 'sarjana*') ? 'active' : '' }}"
                        href="#" id="demoMenu" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Pendidikan</a>
                    <ul class="dropdown-menu" aria-labelledby="demoMenu">
                        <li> <a class="dropdown-item" href="{{ url('diploma') }}">Diploma 1</a></li>
                        <li> <a class="dropdown-item" href="{{ url('sarjana') }}">Sarjana</a></li>
                        <li> <a class="dropdown-item" href="{{ url('kursus') }}">Kursus</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li> <a class="dropdown-item  {{ request()->is('pendidikan*') ? 'active' : '' }}"
                                href="{{ url('pendidikan') }}">Tentang Pendidikan</a></li>
                    </ul>
                </li>


                <li class="nav-item menu"><a class="nav-link {{ request()->is('mahasiswa*') ? 'active' : '' }}"
                        href="{{ route('mahasiswa') }}">Mahasiswa</a></li>
                <li class="nav-item menu"><a class="nav-link {{ request()->is('job*') ? 'active' : '' }}"
                        href="{{ url('job-channel') }}">Karir</a></li>
                <li class="nav-item menu"><a class="nav-link {{ request()->is('magang*') ? 'active' : '' }}"
                        href="{{ url('magang') }}">Program Magang Kampus Gratis II</a></li>
                <li class="nav-item menu"><a class="nav-link {{ request()->is('odcp*') ? 'active' : '' }}"
                        href="{{ url('odp') }}">Program ODP</a></li>
                <li class="nav-item menu " id="navButtonMasuk">
                    <a class="btn btn-success btn-md mt-2" href="{{ route('login') }}"
                        style="margin-right: 5px">Masuk</a>
                    <a class="btn btn-warning btn-md mt-2" href="{{ route('register') }}">Daftar</a>
                </li>
            </ul>
            <!-- Nav Main menu END -->

            <!-- Nav Search START -->
            <!-- <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                <div class="nav-item w-100">
                    <form class="position-relative">
                        <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
                            type="submit"><i class="fas fa-search fs-6 "></i></button>
                    </form>
                </div>
            </div> -->
            <!-- Nav Search END -->
        </div>
        <!-- Main navbar END -->
        @if (Auth::check() == true)
            <!-- Profile START -->
            <div class="dropdown ms-1 ms-lg-0">
                <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside"
                    data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/01.jpg') }}"
                        alt="avatar">
                </a>
                <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                    aria-labelledby="profileDropdown">
                    <!-- Profile info -->
                    <li class="px-3">
                        <div class="d-flex align-items-center">
                            <!-- Avatar -->
                            <div class="avatar me-3">
                                <img class="avatar-img rounded-circle shadow" src="assets/images/avatar/01.jpg"
                                    alt="avatar">
                            </div>
                            <div>
                                <a class="h6"
                                    href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a>
                                <p class="small m-0">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                        <hr>
                    </li>
                    <!-- Links -->
                    <li>
                        <a class="dropdown-item" href="{{ route('dashboard') }}"><i
                                class="bi bi-person fa-fw me-2"></i>Dashboard</a>
                    </li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Pengaturan Akun</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Panduan</a></li>
                    <li><a class="dropdown-item bg-danger-soft-hover" href="{{ route('logout') }}"><i
                                class="bi bi-power fa-fw me-2"></i>Keluar</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <!-- Dark mode switch START -->
                    <li>
                        <div class="modeswitch-wrap" id="darkModeSwitch">
                            <div class="modeswitch-item">
                                <div class="modeswitch-icon"></div>
                            </div>
                            <span>Dark mode</span>
                        </div>
                    </li>
                    <!-- Dark mode switch END -->
                </ul>
            </div>
        @else
            <div id="navButton">
                <ul class="navbar-nav mx-auto order-0">
                    <li class="nav-item menu ">
                        <a class="btn btn-success btn-md mt-2" href="{{ route('login') }}"
                            style="margin-right: 5px">Masuk</a>
                    </li>

                    <li class="nav-item menu " id="navButtonDaftar">
                        <a class="btn btn-warning btn-md mt-2" href="{{ route('register') }}">Daftar</a>
                    </li>
                </ul>
            </div>
        @endif
        <!-- Profile START -->
    </div>
</nav>
