@extends('../layouts/app')
@section('content')
    <div class="page-content-wrapper border">
        <!-- Title -->
        <div class="row">
            <div class="col-12 mb-3">
                <h1 class="h3 mb-2 mb-sm-0">Dashboard</h1>
            </div>
        </div>

        <!-- Counter boxes START -->
        <div class="row g-4 mb-4 ">

            <!-- Counter item -->
            <div class="col-md-6 col-xxl-3">
                <li class="nav-item" style="list-style-type: none">
                    <a href="{{ route('banner.index') }}" class="nav-link" target="_blank">
                        <div class="card card-body bg-warning bg-opacity-15 p-4 h-100">
                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Digit -->
                                <div>
                                    <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                        data-purecounter-end="{{ $banner }}" data-purecounter-delay="200">0</h2>
                                    <span class="mb-0 h6 fw-light">Banner</span>
                                </div>
                                <!-- Icon -->
                                <div class="icon-lg rounded-circle bg-warning text-white mb-0"><i
                                        class="fas fa-book-reader fa-fw"></i></div>
                            </div>
                        </div>
                    </a>
                </li>
            </div>

            <!-- Counter item -->
            <div class="col-md-6 col-xxl-3">
                <li class="nav-item" style="list-style-type: none">
                    <a href="{{ route('data-penelitian.index') }}" class="nav-link" target="_blank">
                        <div class="card card-body bg-purple bg-opacity-15 p-4 h-100">
                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Digit -->
                                <div>
                                    <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                        data-purecounter-end="{{ $penelitian }}" data-purecounter-delay="200">0</h2>
                                    <span class="mb-0 h6 fw-light">Penelitian</span>
                                </div>
                                <!-- Icon -->
                                <div class="icon-lg rounded-circle bg-purple text-white mb-0"><i
                                        class="fas fa-school fa-fw"></i></div>
                            </div>
                        </div>
                    </a>
                </li>
            </div>

            <!-- Counter item -->
            <div class="col-md-6 col-xxl-3">
                <li class="nav-item" style="list-style-type: none">
                    <a href="{{ route('berita.index') }}" class="nav-link" target="_blank">
                        <div class="card card-body bg-info bg-opacity-15 p-4 h-100">
                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Digit -->
                                <div>
                                    <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                        data-purecounter-end="{{ $berita }}" data-purecounter-delay="200">0</h2>
                                    <span class="mb-0 h6 fw-light">Berita</span>
                                </div>
                                <!-- Icon -->
                                <div class="icon-lg rounded-circle bg-info text-white mb-0"><i
                                        class="fas fa-newspaper fa-fw"></i></div>
                            </div>
                        </div>
                    </a>
                </li>
            </div>

            <!-- Counter item -->
            <div class="col-md-6 col-xxl-3">
                <li class="nav-item" style="list-style-type: none">
                    <a href="{{ route('guru-besar.index') }}" class="nav-link" target="_blank">
                        <div class="card card-body bg-danger bg-opacity-15 p-4 h-100">
                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Digit -->
                                <div>
                                    <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                        data-purecounter-end="{{ $guruBesar }}" data-purecounter-delay="200">0</h2>
                                    <span class="mb-0 h6 fw-light">Guru Besar</span>
                                </div>
                                <!-- Icon -->
                                <div class="icon-lg rounded-circle bg-danger text-white mb-0"><i
                                        class="fas fa-user-graduate fa-fw"></i></div>
                            </div>
                        </div>
                    </a>
                </li>
            </div>

            <!-- Counter item -->
            <div class="col-md-6 col-xxl-3">
                <li class="nav-item" style="list-style-type: none">
                    <a href="{{ route('agenda.index') }}" class="nav-link" target="_blank">
                        <div class="card card-body bg-primary bg-opacity-15 p-4 h-100">
                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Digit -->
                                <div>
                                    <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                        data-purecounter-end="{{ $agenda }}" data-purecounter-delay="200">0</h2>
                                    <span class="mb-0 h6 fw-light">Agenda</span>
                                </div>
                                <!-- Icon -->
                                <div class="icon-lg rounded-circle bg-primary text-white mb-0"><i
                                        class="fas fa-address-book fa-fw"></i></div>
                            </div>
                        </div>
                    </a>
                </li>
            </div>

            <!-- Counter item -->
            <div class="col-md-6 col-xxl-3">
                <li class="nav-item" style="list-style-type: none">
                    <a href="{{ route('data-jurnal.index') }}" class="nav-link" target="_blank">
                        <div class="card card-body bg-success bg-opacity-15 p-4 h-100">
                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Digit -->
                                <div>
                                    <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                        data-purecounter-end="{{ $jurnal }}" data-purecounter-delay="200">0</h2>
                                    <span class="mb-0 h6 fw-light">Jurnal</span>
                                </div>
                                <!-- Icon -->
                                <div class="icon-lg rounded-circle bg-success text-white mb-0"><i
                                        class="fas fa-book fa-fw"></i></div>
                            </div>
                        </div>
                    </a>
                </li>
            </div>



        </div>
        <!-- Counter boxes END -->

    </div>

@stop
