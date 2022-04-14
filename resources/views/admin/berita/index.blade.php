<x-app-layout>
    @section('title', 'Berita')
    @section('content')
        <div class="page-content-wrapper border js-choice">
            <div class="col-xl-12">
                <!-- Card START -->
                <div class="card border rounded-3">
                    <!-- Card header START -->
                    <div class="card-header border-bottom">
                        <div class="row g-3 align-items-center mb-4">
                            <h3 class="mb-0">Data Berita</h3>
                            @if (session()->has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <!-- Card header END -->

                    <!-- Card body START -->
                    <div class="card-body">

                        <!-- Search and select START -->
                        <div class="row g-3 align-items-center justify-content-between mb-4">
                            <!-- Search -->
                            <div class="col-md-8">
                                <form class="rounded position-relative">
                                    <input class="form-control pe-5 bg-transparent" id="search" type="search"
                                        placeholder="Search" aria-label="Search">
                                    <button
                                        class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
                                        type="submit"><i class="fas fa-search fs-6 "></i></button>
                                </form>
                            </div>
                            <div class="col-md-3">
                                <!-- Short by filter -->
                                <form>
                                    <select id="sorting" class="form-select js-choice border-0 z-index-9"
                                        aria-label=".form-select-sm">
                                        <option value="">Sort by</option>
                                        <option>Newest</option>
                                        <option>Oldest</option>
                                    </select>
                                </form>
                            </div>
                            <!-- Button -->
                            <div class="col-lg-4 cola-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                                <div class="nav-wrguester position-relative end-0">
                                    <div class="text-end ms-auto">
                                        <div class="mt-2 mt-sm-0">
                                            <a href="{{ route('data-berita.create') }}"
                                                class="btn btn-success mb-0">Tambah
                                                Berita</a>
                                        </div>
                                        <div class="mt-2 mt-sm-0">
                                            <a href="{{ route('berita-category.create') }}"
                                                class="btn btn-success mb-0">Tambah
                                                Kategori</a>
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
                                <tbody>
                                    @foreach ($berita as $item)
                                        <!-- Table item -->
                                        <tr>
                                            <!-- Course item -->
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!-- Image -->
                                                    <div class="w-100px">
                                                        <img style="max-height: 300px" src="{{ asset($item->gambar) }}"
                                                            class="rounded" alt="{{ $item->judul }}">
                                                    </div>
                                                    <div class="mb-0 ms-2">
                                                        <!-- Title -->
                                                        <h6><a
                                                                href="{{ route('data-berita.edit', $item->id) }}">{{ $item->judul }}</a>
                                                        </h6>
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
                                            <td class="text-center text-sm-start"><a href="/berita/{{ $item->slug }}"
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
                                    {{ $berita->onEachSide(1)->links() }}
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
        <script>
            $('.show_confirm').click(function(event) {
                var form = $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                swal({
                        title: `Hapus Data?`,
                        text: "Jika data terhapus, data akan hilang selamanya!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        }
                    });
            });
        </script>
        <script>
            const dataBerita = [];
            @foreach ($berita as $item)
                dataBerita.push({
                id: '{{ $item->id }}',
                judul: '{{ $item->judul }}',
                penulis: '{{ $item->penulis }}',
                status: '{{ $item->status }}',
                gambar: '{{ $item->gambar }}',
                slug: '{{ $item->slug }}',
                update_at: '{{ $item->updated_at }}',
                });
            @endforeach

            document.querySelector('#sorting').addEventListener('change', function() {
                let sorting = this.value;
                dataBerita.sort(function(a, b) {
                    if (sorting == 'Newest') {
                        return new Date(b.update_at) - new Date(a.update_at);
                    } else if (sorting == 'Oldest') {
                        return new Date(a.update_at) - new Date(b.update_at);
                    }
                });
                renderRowTable(dataBerita);
            });

            document.querySelector('#search').addEventListener('keydown', e => {
                const filteredBerita = dataBerita.filter(berita => {
                    return berita.judul.toLowerCase().includes(e.target.value.toLowerCase()) ||
                        berita.penulis.toLowerCase().includes(e.target.value.toLowerCase());
                });

                renderRowTable(filteredBerita);
            })

            const renderRowTable = (data) => {
                document.querySelector('tbody').innerHTML = data.map((berita) => `
                <tr>
                    <!-- Course item -->
                    <td>
                        <div class="d-flex align-items-center">
                            <!-- Image -->
                            <div class="w-100px">
                                <img style="max-height: 300px" src="{{ url('/') }}/${berita.gambar}"
                                    class="rounded" alt="${berita.judul}">
                            </div>
                            <div class="mb-0 ms-2">
                                <!-- Title -->
                                <h6><a href="/data-berita/${berita.id}/edit">${berita.judul}</a></h6>
                                <!-- Info -->
                                <div class="d-sm-flex">
                                    <p class="h6 fw-light mb-0 small me-3"><i
                                            class="fas fa-user text-orange me-2"></i>${berita.penulis}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </td>
                    <!-- Isi item -->
                    <td class="text-center text-sm-start"><a href="/berita/${berita.slug}"
                            target="_blank">Lihat berita</a></td>
                    <!-- Status item -->
                    <td>
                        <div class="badge bg-success bg-opacity-10 text-success">
                            ${berita.status}
                        </div>
                    </td>
                    <!-- Action item -->
                    <td>
                        <a href="#"
                            class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i
                                class="far fa-fw fa-edit"></i></a>
                        <form id="form-delete"
                            action="/admin/data-berita/${berita.id}/edit" method="POST"
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
</x-app-layout>
