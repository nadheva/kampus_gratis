<div class="list-group list-group-dark list-group-borderless">
    <a class="list-group-item {{ request()->is('') ? 'active' : '' }} " href="#"><i
            class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
    <a class="list-group-item {{ request()->is('banner') ? 'active' : '' }}" href="{{ url('banner') }}"><i class="bi bi-card-checklist fa-fw me-2"></i>Banner (Front
        Page)</a>
    <a class="list-group-item {{ request()->is('hehe') ? 'active' : '' }}" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Tentang
        Kampus Gratis</a>
    <a class="list-group-item {{ request()->is('detail*') ? 'active' : '' }}" href="{{ route('detail.index') }}"><i
            class="bi bi-cart-check fa-fw me-2"></i>Detail</a>
    <a class="list-group-item {{ request()->is('data-penelitian*') ? 'active' : '' }}" href="{{ route('data-penelitian.index') }}"><i
            class="bi bi-cart-check fa-fw me-2"></i>Penelitian</a>
    <a class="list-group-item {{ request()->is('guru-besar*') ? 'active' : '' }}" href="{{ url('guru-besar') }}"><i
            class="bi bi-cart-check fa-fw me-2"></i>Guru Besar</a>
    <a class="list-group-item {{ request()->is('agenda*') ? 'active' : '' }}" href="{{ url('agenda') }}"><i
            class="bi bi-cart-check fa-fw me-2"></i>Agenda</a>
    <a class="list-group-item {{ request()->is('data-jurnal*') ? 'active' : '' }}" href="{{ route('data-jurnal.index') }}"><i
            class="bi bi-cart-check fa-fw me-2"></i>Jurnal

    <a class="list-group-item {{ request()->is('setting') ? 'active' : '' }}" href="#"><i class="bi bi-gear fa-fw me-2"></i>Pengaturan</a>
    <a class="list-group-item {{ request()->is('logout') ? 'active' : '' }} text-danger bg-danger-soft-hover" href="#"><i
            class="fas fa-sign-out-alt fa-fw me-2"></i>Keluar</a>

    {{-- Mahasiswa --}}
    {{-- <a class="list-group-item active" href="student-dashboard.html"><i class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
    <a class="list-group-item" href="student-subscription.html"><i class="bi bi-card-checklist fa-fw me-2"></i>Status Pendaftaran</a>
    <a class="list-group-item" href="instructor-edit-profile.html"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit Profil</a>
    <a class="list-group-item" href="instructor-setting.html"><i class="bi bi-gear fa-fw me-2"></i>Pengaturan</a>
    <a class="list-group-item" href="instructor-delete-account.html"><i class="bi bi-trash fa-fw me-2"></i>Hapus Profil</a>
    <a class="list-group-item text-danger bg-danger-soft-hover" href="#"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Keluar</a> --}}

</div>
