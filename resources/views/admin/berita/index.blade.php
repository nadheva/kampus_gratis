<x-app-layout>
    @section('title', 'Berita')
    @section('content')
        <div class="page-content-wrapper border js-choice">
            <div class="col-xl-12">
                <!-- Card START -->
                <div class="card border rounded-3">
                    <!-- Card header START -->
                    <div class="card-header border-bottom">
                        <h3 class="mb-0">Data Berita</h3>
                    </div>
                    <!-- Card header END -->

                    <!-- Card body START -->
                    <div class="card-body">

                        <!-- Search and select START -->
                        <div class="row g-3 align-items-center justify-content-between mb-4">
                            <!-- Search -->
                            <div class="col-md-8">
                                <form class="rounded position-relative" action="/admin/berita">
                                    <input id="search" name="search" class="form-control pe-5 bg-transparent" type="search"
                                        placeholder="Search" aria-label="Search" value="{{ request('search') }}">
                                    <button
                                        class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
                                        type="submit"><i class="fas fa-search fs-6 "></i></button>
                                </form>
                            </div>
                            <!-- Button -->
                            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                                <div class="nav-wrguester position-relative end-0">
                                    <div class="text-end ms-auto">
                                        <div class="mt-2 mt-sm-0">
                                            <a href="{{ route('data-berita.create') }}"
                                                class="btn btn-success mb-0">Tambah
                                                Berita</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Search and select END -->

                        <!-- Course list table START -->
                        <div class="table-responsive-lg border-0">
                            <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                                <!-- Table head -->
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-0 rounded-start">Judul Berita</th>
                                        <th scope="col" class="border-0">Isi</th>
                                        <th scope="col" class="border-0">Status</th>
                                        <th scope="col" class="border-0 rounded-end">Aksi</th>
                                    </tr>
                                </thead>

                                <!-- Table body START -->
                                <tbody id="tabelBerita">
                                    @foreach ($berita as $item)
                                        <!-- Table item -->
                                        <tr>
                                            <!-- Course item -->
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!-- Image -->
                                                    <div class="w-100px">
                                                        <img style="max-height: 300px" src={{ asset($item->gambar) }}
                                                            class="rounded" alt="prestasi">
                                                    </div>
                                                    <div class="mb-0 ms-2">
                                                        <!-- Title -->
                                                        <h6><a href="#">{{ $item->judul }}</a></h6>
                                                        <!-- Info -->
                                                        <div class="d-sm-flex">
                                                            <p class="h6 fw-light mb-0 small me-3"><i
                                                                    class="fas fa-user text-orange me-2"></i>{{ $item->penulis }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- Isi item -->
                                            <td class="text-center text-sm-start"><a href="/berita/{{ $item->id }}"
                                                    target="_blank">Lihat berita</a></td>
                                            <!-- Status item -->
                                            <td>
                                                <div class="badge bg-success bg-opacity-10 text-success">
                                                    {{ $item->status }}
                                                </div>
                                            </td>
                                            <!-- Action item -->
                                            <td>
                                                <a href="{{ route('data-berita.edit', $item->id) }}"
                                                    class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i
                                                        class="far fa-fw fa-edit"></i></a>
                                                <form id="form-delete"
                                                    action="{{ route('data-berita.destroy', $item->id) }}" method="POST"
                                                    style="display: inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger-soft btn-round mb-0"><i
                                                            class="fas fa-fw fa-times"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <!-- Table body END -->
                            </table>
                        </div>
                        <!-- Course list table END -->

                        <!-- Pagination START -->
                        <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
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
                    <!-- Card body START -->
                </div>
                <!-- Card END -->
            </div>
        </div>
    @stop
</x-app-layout>
