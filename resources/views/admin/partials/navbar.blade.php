<nav class="top-bar navbar-light border-bottom py-0 py-xl-3">
    <div class="container-fluid p-0">
        <div class="d-flex align-items-center w-100">

            <!-- Logo START -->
            <div class="d-flex align-items-center d-xl-none">
                <a class="navbar-brand" href="index.html">
                    <img class="light-mode-item navbar-brand-item h-30px" src="assets/images/logo-mobile.svg" alt="">
                    <img class="dark-mode-item navbar-brand-item h-30px" src="assets/images/logo-mobile-light.svg"
                        alt="">
                </a>
            </div>
            <!-- Logo END -->

            <!-- Toggler for sidebar START -->
            <div class="navbar-expand-xl sidebar-offcanvas-menu">
                <button class="navbar-toggler me-auto" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" aria-expanded="false"
                    aria-label="Toggle navigation" data-bs-auto-close="outside">
                    <i class="bi bi-text-right fa-fw h2 lh-0 mb-0 rtl-flip" data-bs-target="#offcanvasMenu"> </i>
                </button>
            </div>
            <!-- Toggler for sidebar END -->

            <!-- Top bar left -->
            <div class="navbar-expand-lg ms-auto ms-xl-0">

                <!-- Toggler for menubar START -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTopContent" aria-controls="navbarTopContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-animation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
                <!-- Toggler for menubar END -->

                <!-- Topbar menu START -->
                <div class="collapse navbar-collapse w-100" id="navbarTopContent">
                    <!-- Top search START -->
                    <div class="nav my-3 my-xl-0 flex-nowrap align-items-center">
                        <div class="nav-item w-100">
                            <form class="position-relative">
                                <input class="form-control pe-5 bg-secondary bg-opacity-10 border-0" type="search"
                                    placeholder="Search" aria-label="Search">
                                <button
                                    class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
                                    type="submit"><i class="fas fa-search fs-6 text-primary"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Top search END -->
                </div>
                <!-- Topbar menu END -->
            </div>
            <!-- Top bar left END -->

            <!-- Top bar right START -->
            <div class="ms-xl-auto">
                <ul class="navbar-nav flex-row align-items-center">

                    <!-- Notification dropdown START -->
                    <li class="nav-item ms-2 ms-md-3 dropdown">
                        <!-- Notification button -->
                        <a class="btn btn-light btn-round mb-0" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" data-bs-auto-close="outside">
                            <i class="bi bi-bell fa-fw"></i>
                        </a>
                        <!-- Notification dote -->
                        <span class="notif-badge animation-blink"></span>

                        <!-- Notification dropdown menu START -->
                        <div
                            class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0">
                            <div class="card bg-transparent">
                                <div
                                    class="card-header bg-transparent border-bottom py-4 d-flex justify-content-between align-items-center">
                                    <h6 class="m-0">Notifications <span
                                            class="badge bg-danger bg-opacity-10 text-danger ms-2">2 new</span></h6>
                                    <a class="small" href="#">Clear all</a>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group list-unstyled list-group-flush">
                                        <!-- Notif item -->
                                        <li>
                                            <a href="#"
                                                class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                <div class="me-3">
                                                    <div class="avatar avatar-md">
                                                        <img class="avatar-img rounded-circle"
                                                            src="assets/images/avatar/08.jpg" alt="avatar">
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="text-body small m-0">Congratulate <b>Joan Wallace</b> for
                                                        graduating from <b>Microverse university</b></p>
                                                    <u class="small">Say congrats</u>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Profile dropdown START -->
                                        <li class="nav-item ms-2 ms-md-3 dropdown">
                                            <!-- Avatar -->
                                            <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button"
                                                data-bs-auto-close="outside" data-bs-display="static"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <img class="avatar-img rounded-circle"
                                                    src="{{ asset('assets/images/avatar/01.jpg') }}" alt="avatar">
                                            </a>
                                            <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                                                aria-labelledby="profileDropdown">
                                                <!-- Profile info -->
                                                <li class="px-3">
                                                    <div class="d-flex align-items-center">
                                                        <!-- Avatar -->
                                                        <div class="avatar me-3">
                                                            <img class="avatar-img rounded-circle shadow"
                                                                src="{{ asset('assets/images/avatar/01.jpg') }}"
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
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-gear fa-fw me-2"></i>Pengaturan Akun</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-info-circle fa-fw me-2"></i>Panduan</a></li>
                                                <li><a class="dropdown-item bg-danger-soft-hover"
                                                        href="{{ route('logout') }}"><i
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
                                            <!-- Profile dropdown END -->
                                        </li>
                                        <!-- Profile dropdown END -->
                                    </ul>
                                </div>
                                <!-- Top bar right END -->
                            </div>
                        </div>
</nav>
