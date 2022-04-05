@extends('../../layouts/app')
@section('title', 'Agenda')
@section('content')
    <div class="page-content-wrapper border js-choice">

        <!-- Title -->
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">@yield('title')</h1>
                <a href="{{ route('agenda.create') }}" class="btn btn-sm btn-primary mb-0">Tambah agenda</a>
            </div>
        </div>

        <!-- Course boxes START -->
        <div class="row g-4 mb-4">
            <!-- Course item -->
            <div class="col-sm-6 col-lg-4">
                <div class="text-center p-4 bg-primary bg-opacity-10 border border-primary rounded-3">
                    <h6>Total Agenda</h6>
                    <h2 class="mb-0 fs-1 text-primary">{{ count($agenda) }}</h2>
                </div>
            </div>

            <!-- Course item -->
            <div class="col-sm-6 col-lg-4">
                <div class="text-center p-4 bg-success bg-opacity-10 border border-success rounded-3">
                    <h6>Sedang berjalan</h6>
                    <h2 class="mb-0 fs-1 text-success">{{ count($running) }}</h2>
                </div>
            </div>

            <!-- Course item -->
            <div class="col-sm-6 col-lg-4">
                <div class="text-center p-4  bg-warning bg-opacity-15 border border-warning rounded-3">
                    <h6>Akan datang</h6>
                    <h2 class="mb-0 fs-1 text-warning">{{ count($upcoming) }}</h2>
                </div>
            </div>
        </div>
        <!-- Course boxes END -->

        <!-- Card START -->
        <div class="card bg-transparent border">

            <!-- Card header START -->
            <div class="card-header bg-light border-bottom">
                <!-- Search and select START -->
                <div class="row g-3 align-items-center justify-content-between">
                    <!-- Search bar -->
                    <div class="col-md-8">
                        <form class="rounded position-relative">
                            <input class="form-control bg-body" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
                                type="submit"><i class="fas fa-search fs-6 "></i></button>
                        </form>
                    </div>

                    <!-- Select option -->
                    <div class="col-md-3">
                        <!-- Short by filter -->
                        <form>
                            <select class="form-select border-0 z-index-9" aria-label=".form-select-sm">
                                <option value="">Sort by</option>
                                <option>Newest</option>
                                <option>Oldest</option>
                                <option>Accepted</option>
                                <option>Rejected</option>
                            </select>
                        </form>
                    </div>
                </div>
                <!-- Search and select END -->
            </div>
            <!-- Card header END -->

            <!-- Card body START -->
            <div class="card-body">
                <!-- Course table START -->
                <div class="table-responsive border-0 rounded-3">
                    <!-- Table START -->
                    <table class="table table-dark-gray align-middle p-4 mb-0 table-hover text-center">
                        <!-- Table head -->
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 rounded-start">Judul</th>
                                <th scope="col" class="border-0">Jenis Agenda</th>
                                <th scope="col" class="border-0">Tanggal</th>
                                <th scope="col" colspan="2" class="border-0 rounded-end">Action</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>
							@foreach($agenda as $a)
							<tr>
                                <td>
									<h6 class="mb-0 ms-2">
										<a href="#">{{ $a->judul }}</a>
									</h6>
                                </td>

                                <!-- Table data -->
                                <td>{{ $a->jenis }}</td>
                                <td>{{ $a->tanggal }}</td>
                                <td>
                                    <a href="{{route('agenda.show', $a->id)}}" class="btn btn-sm btn-success-soft me-1 mb-1 mb-md-0">Lihat</a>
                                    <a href="{{route('agenda.edit', $a->id)}}" class="btn btn-sm btn-secondary-soft mb-0">Edit</a>
                                </td>
                            </tr>
							@endforeach

                        </tbody>
                        <!-- Table body END -->
                    </table>
                    <!-- Table END -->
                </div>
                <!-- Course table END -->
            </div>
            <!-- Card body END -->

            <!-- Card footer START -->
            <div class="card-footer bg-transparent pt-0">
                <!-- Pagination START -->
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                    <!-- Content -->
                    <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                    <!-- Pagination -->
                    <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                        <ul class="pagination pagination-sm pagination-primary-soft mb-0 pb-0">
                            <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i
                                        class="fas fa-angle-left"></i></a></li>
                            <li class="page-item mb-0 active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">2</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#"><i
                                        class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Pagination END -->
            </div>
            <!-- Card footer END -->
        </div>
    </div>
@stop
