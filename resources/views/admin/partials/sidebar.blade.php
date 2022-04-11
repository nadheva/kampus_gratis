<nav class="navbar sidebar navbar-expand-xl navbar-dark bg-dark">

    <!-- Navbar brand for xl START -->
    <div class="d-flex align-items-center justify-content-center">
        <a class="navbar-brand" href="/admin">
            <img class="navbar-brand-item" src="{{ asset('assets/images/logo.png') }}" alt="logo">
        </a>
    </div>
    <!-- Navbar brand for xl END -->

    <div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1"
        id="offcanvasSidebar">
        <div class="offcanvas-body sidebar-content d-flex flex-column bg-dark">

            <!-- Sidebar menu START -->
            <ul class="navbar-nav flex-column" id="navbar-sidebar">

                <!-- Menu item 1 -->
                <li class="nav-item"><a href="/admin" class="nav-link active"><i
                            class="bi bi-house fa-fw me-2"></i>Dashboard</a></li>

                <!-- Title -->
                <li class="nav-item ms-2 my-2">Pages</li>

                <!-- Banner -->
                <li class="nav-item"> <a class="nav-link" href="{{ route('banner.index') }}"><i
                            class="fas fa-book-reader fa-fw me-2"></i>Banner</a></li>

                <!-- Tentang Kampus Gratis -->
                <li class="nav-item"> <a class="nav-link" href="#"><i
                            class="fas fa-info fa-fw me-2"></i>Tentang
                        Kampus Gratis</a></li>

                <!-- Detail -->
                <li class="nav-item"> <a class="nav-link" href="#"><i
                            class="fas fa-list fa-fw me-2"></i>Detail</a></li>

                <!-- Penelitian -->
                <li class="nav-item"> <a class="nav-link" href="{{ route('data-penelitian.index') }}"><i
                            class="fas fa-school fa-fw me-2"></i>Penelitian</a></li>

                <!-- Berita -->
                <li class="nav-item"> <a class="nav-link" href="{{ route('berita.index') }}"><i
                            class="fas fa-newspaper fa-fw me-2"></i>Berita</a></li>

                <!-- Guru Besar -->
                <li class="nav-item"> <a class="nav-link" href="{{ route('guru-besar.index') }}"><i
                            class="fas fa-user-graduate fa-fw me-2"></i>Guru Besar</a></li>

                <!-- Agenda -->
                <li class="nav-item"> <a class="nav-link" href="{{ route('agenda.index') }}"><i
                            class="fas fa-address-book fa-fw me-2"></i>Agenda</a></li>
                <!-- Jurnal -->
                <li class="nav-item"> <a class="nav-link" href="{{ route('data-jurnal.index') }}"><i
                            class="fas fa-book fa-fw me-2"></i>Jurnal</a></li>
                <hr>
                <a class="list-group-item {{ request()->is('logout') ? 'active' : '' }} text-danger bg-danger-soft-hover"
                    href="{{ route('logout') }}"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Keluar</a>
            </ul>
            <!-- Sidebar menu end -->

            <!-- Sidebar footer START -->
            <div class="px-3 mt-auto pt-3">
                <div class="d-flex align-items-center justify-content-between text-primary-hover">
                    <a class="h5 mb-0 text-body" href="admin-setting.html" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Settings">
                        <i class="bi bi-gear-fill"></i>
                    </a>
                    <a class="h5 mb-0 text-body" href="/admin" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Home">
                        <i class="bi bi-globe"></i>
                    </a>
                    <a class="h5 mb-0 text-body" href="sign-in.html" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Sign out">
                        <i class="bi bi-power"></i>
                    </a>
                </div>
            </div>
            <!-- Sidebar footer END -->

        </div>
    </div>
</nav>
