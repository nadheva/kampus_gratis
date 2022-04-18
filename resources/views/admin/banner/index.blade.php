@extends('../../layouts/app')
@section('title', 'Banner')
@section('content')
    <div class="page-content-wrapper border">

        <!-- Title -->
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">@yield('title')</h1>
                <a href="{{ route('banner.create') }}" class="btn btn-sm btn-primary mb-0">Tambah banner</a>
            </div>
        </div>
        <!-- Card START -->
        <div class="card bg-transparent border">

            <!-- Card header START -->
            <div class="card-header bg-light border-bottom">
                <!-- Search and select START -->
                <div class="row g-3 align-items-center justify-content-between">
                    <!-- Search bar -->
                    <div class="col-md-8">
                        <form class="rounded position-relative">
                            <input class="form-control pe-5 bg-transparent" id="search" type="search" placeholder="Search"
                                aria-label="Search">
                            <button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
                                type="submit"><i class="fas fa-search fs-6 "></i></button>
                        </form>
                    </div>

                    <!-- Select option -->
                    <div class="col-md-3">
                        <!-- Short by filter -->
                        <form>
                            <select class="form-select js-choice border-0 z-index-9" aria-label=".form-select-sm">
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
                                <th scope="col" class="border-0">Gambar</th>
                                <th scope="col" class="border-0">Diupload</th>
                                <th scope="col" colspan="2" class="border-0 rounded-end">Action</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>
                            @foreach ($banner as $b)
                                <tr>
                                    <td>
                                        <h6 class="mb-0 ms-2">
                                            <a href="#">{{ $b->heading }}</a>
                                        </h6>
                                    </td>
                                    <td>
                                        <div class="w-100px">
                                            <img src="{{ url($b->gambar) }}" class="rounded" alt="">
                                        </div>
                                    </td>
                                    <td>{{ $b->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ route('banner.show', $b->id) }}"
                                            class="btn btn-sm btn-success-soft me-1 mb-1 mb-md-0">Lihat</a>
                                        <a href="{{ route('banner.edit', $b->id) }}"
                                            class="btn btn-sm btn-secondary-soft mb-0">Edit</a>
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
                            {{ $banner->onEachSide(1)->links() }}
                        </ul>
                    </nav>
                </div>
                <!-- Pagination END -->
            </div>
            <!-- Card footer END -->
        </div>
        <script>
            const dataBanner = [];
            @foreach ($banner as $b)
                dataBanner.push({
                id: '{{ $b->id }}',
                heading: '{{ $b->heading }}',
                gambar: '{{ $b->gambar }}',
                created_at: '{{ $b->created_at->diffForHumans() }}',
                });
            @endforeach

            document.querySelector('#search').addEventListener('keydown', e => {
                const filteredBanner = dataBanner.filter(banner => {
                    return banner.heading.toLowerCase().includes(e.target.value.toLowerCase())
                });

                renderRowTable(filteredBanner);
            })

            const renderRowTable = (data) => {
                document.querySelector('tbody').innerHTML = data.map((banner) => `
                <tr>
                    <!-- Course item -->
                    <td>
                        <div class="mb-0 ms-2">
                                <!-- Title -->
                                <h6><a href="/data-banner/${banner.id}/edit">${banner.heading}</a></h6>
                        </div>
                    </td>
                    <td>
                    <div class="d-flex align-items-center">
                            <!-- Image -->
                            <div class="w-100px">
                                <img style="max-height: 300px" src="${banner.gambar}"
                                    class="rounded" alt="${banner.heading}">
                            </div>
                    </div>
                    </td>
                    <td>
                    <div class="d-flex align-items-center">
                                <!-- Title -->
                                <h6><a href="/data-banner/${banner.created_at}/edit">${banner.created_at}</a></h6>
                        </div>
                    </td>
                    <!-- Action item -->
                    <td>
                        <a href="#"
                            class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i
                                class="far fa-fw fa-edit"></i></a>
                        <form id="form-delete"
                            action="/admin/data-banner/${banner.id}/edit" method="POST"
                            style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger-soft btn-round mb-0"><i
                                    class="fas fa-fw fa-times"></i></button>
                        </form>
                    </td>
                </tr>
                `).join('')
            }
        </script>
    @stop
