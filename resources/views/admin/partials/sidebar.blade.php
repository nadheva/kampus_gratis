<div class="list-group list-group-dark list-group-borderless">

    @if (Auth::user()->role == 'admin')
        <a class="list-group-item {{ request()->is('') ? 'active' : '' }} " href="{{ route('dashboard') }}"><i class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
        <a class="list-group-item {{ request()->is('banner') ? 'active' : '' }}" href="{{ route('banner.index') }}"><i class="bi bi-card-checklist fa-fw me-2"></i>Banner (Front
            Page)</a>
        <a class="list-group-item {{ request()->is('hehe') ? 'active' : '' }}" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Tentang
            Kampus Gratis</a>
        <a class="list-group-item {{ request()->is('detail*') ? 'active' : '' }}" href="{{ route('detail.index') }}"><i class="bi bi-cart-check fa-fw me-2"></i>Detail</a>
        <a class="list-group-item {{ request()->is('data-penelitian*') ? 'active' : '' }}" href="{{ route('data-penelitian.index') }}"><i class="bi bi-cart-check fa-fw me-2"></i>Penelitian</a>
        <a class="list-group-item {{ request()->is('guru-besar*') ? 'active' : '' }}" href="{{ route('guru-besar.index') }}"><i class="bi bi-cart-check fa-fw me-2"></i>Guru Besar</a>
        <a class="list-group-item {{ request()->is('agenda*') ? 'active' : '' }}" href="{{ route('agenda.index') }}"><i class="bi bi-cart-check fa-fw me-2"></i>Agenda</a>
        <a class="list-group-item {{ request()->is('data-jurnal*') ? 'active' : '' }}" href="{{ route('data-jurnal.index') }}"><i class="bi bi-cart-check fa-fw me-2"></i>Jurnal</a>
        <a class="list-group-item {{ request()->is('setting') ? 'active' : '' }}" href="#"><i class="bi bi-gear fa-fw me-2"></i>Pengaturan</a>
        <a class="list-group-item {{ request()->is('logout') ? 'active' : '' }} text-danger bg-danger-soft-hover" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Keluar</a>
    @else
        <a class="list-group-item {{ request()->is('') ? 'active' : '' }} " href="{{ route('dashboard') }}"><i class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
        <a class="list-group-item {{ request()->is('detail*') ? 'active' : '' }}" href="{{ route('administrasiPengguna') }}"><i class="bi bi-cart-check fa-fw me-2"></i>Administrasi</a>
        <a class="list-group-item {{ request()->is('detail*') ? 'active' : '' }}" href="{{ route('administrasiPengguna') }}"><i class="bi bi-cart-check fa-fw me-2"></i>Data Keluarga</a>
        <a class="list-group-item {{ request()->is('setting') ? 'active' : '' }}" href="#"><i class="bi bi-gear fa-fw me-2"></i>Pengaturan Akun</a>
        <a class="list-group-item {{ request()->is('logout') ? 'active' : '' }} text-danger bg-danger-soft-hover" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Keluar</a>
    @endif
    

</div>
