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
                <div class="row g-3 align-items-center justify-content-between mb-4">
                    <!-- Search -->
                    <div class="col-md-8">
                        <form class="rounded position-relative">
                            <input class="form-control pe-5" id="search" type="search" placeholder="Search"
                                aria-label="Search">
                            <button
                                class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
                                type="submit"><i class="fas fa-search fs-6 "></i></button>
                        </form>
                    </div>
                    <!-- Search bar -->
                    {{-- <div class="col-md-8">
                        <form class="rounded position-relative">
                            <input class="form-control bg-body" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
                                type="submit"><i class="fas fa-search fs-6 "></i></button>
                        </form>
                    </div> --}}

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
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
                    <!-- Content -->
                    <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                    <!-- Pagination -->
                    <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                        <ul class="pagination pagination-sm pagination-primary-soft mb-0 pb-0">
                            {{ $agenda->onEachSide(1)->links() }}
                        </ul>
                    </nav>
                </div>
                <!-- Pagination END -->
            </div>
            <!-- Card footer END -->
        </div>
    </div>
    <script>
        const dataAgenda = [];
        @foreach ($agenda as $item)
            dataAgenda.push({
                id: '{{ $item->id }}',
                judul: '{{ $item->judul }}',
                jenis_agenda: '{{ $item->jenis_agenda }}',
                tanggal: '{{ $item->tanggal }}',
                status: '{{ $item->status }}',
                gambar: '{{ $item->gambar }}',
                slug: '{{ $item->slug }}',
            });
        @endforeach
        
        document.querySelector('#search').addEventListener('keydown', e => {
            const filteredAgenda = dataAgenda.filter(agenda => {
                return agenda.judul.toLowerCase().includes(e.target.value.toLowerCase()) ||
                    agenda.jenis_agenda.toLowerCase().includes(e.target.value.toLowerCase());
            });
            
            const html = filteredAgenda.map( (agenda) => `
            <tr>
                <!-- Course item -->
                <td>
                    <div class="d-flex align-items-center">
                        <!-- Image -->
                        <div class="w-100px">
                            <img style="max-height: 300px" src=${agenda.gambar}
                                class="rounded" alt="prestasi">
                        </div>
                        <div class="mb-0 ms-2">
                            <!-- Title -->
                            <h6><a href="/data-berita/${agenda.id}/edit">${agenda.judul}</a></h6>
                            <!-- Info -->
                            <div class="d-sm-flex">
                                <p class="h6 fw-light mb-0 small me-3"><i
                                        class="fas fa-user text-orange me-2"></i>${agenda.jenis_agenda}
                                </p>
                            </div>
                        </div>
                    </div>
                </td>
                <!-- Isi item -->
                <td class="text-center text-sm-start"><a href="/berita/${agenda.slug}"
                        target="_blank">Lihat berita</a></td>
                <!-- Status item -->
                <td>
                    <div class="badge bg-success bg-opacity-10 text-success">
                        ${agenda.status}
                    </div>
                </td>
                <!-- Action item -->
                <td>
                    <a href="#"
                        class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i
                            class="far fa-fw fa-edit"></i></a>
                    <form id="form-delete"
                        action="/admin/data-berita/${agenda.id}/edit" method="POST"
                        style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger-soft btn-round mb-0"><i
                                class="fas fa-fw fa-times"></i></button>
                    </form>
                </td>
            </tr>
            `).join('')

            document.querySelector('tbody').innerHTML = html;
        })
    </script>
@stop
