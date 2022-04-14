<x-app-layout>
    @section('title', 'Jurnal')
    @section('content')
        <div class="page-content-wrapper border js-choice">
            <div class="col-xl-12">

                <div class="card border rounded-3">
                    <!-- Card header START -->
                    <div class="card-header border-bottom">
                        <h3 class="mb-0">Data Jurnal Kampus Gratis</h3>
                    </div>
                    <!-- Card header END -->

                    <!-- Card body START -->
                    <div class="card-body">

                        <!-- Search and select START -->
                        <div class="row g-3 align-items-center justify-content-between mb-4">
                            <!-- Search -->
                            <div class="col-md-8">
                                <form class="rounded position-relative">
                                    <input class="form-control pe-5 bg-transparent" id="search" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <button
                                        class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
                                        type="submit"><i class="fas fa-search fs-6 "></i></button>
                                </form>
                            </div>
                             <!-- Title -->
                             <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                                <div class="nav-wrguester position-relative end-0">
                                    <div class="text-end ms-auto">
                                        <div class="mt-2 mt-sm-0">
                                            <a href="{{ route('data-jurnal.create') }}"
                                                class="btn btn-success mb-0">Tambah Jurnal</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        <!-- Search and select END -->

                        <!-- Course list table START -->
                        <div class="table-responsive border-0">
                            <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                                <!-- Table head -->
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-0 rounded-start">No</th>
                                        <th scope="col" class="border-0">Judul</th>
                                        <th scope="col" class="border-0">Abstrak</th>
                                        <th scope="col" class="border-0">Isi</th>
                                        <th scope="col" class="border-0">Penulis</th>
                                        <th scope="col" class="border-0">Gambar</th>
                                        <th scope="col" class="border-0">Berkas</th>
                                        <th scope="col" class="border-0 rounded-end">Aksi</th>

                                    </tr>
                                </thead>

                                <!-- Table body START -->
                                <tbody>
                                    @foreach ($jurnal as $b)
                                        <!-- Table item -->
                                        <tr>
                                            <td>{{ $b->id }}</td>
                                            <td>{{ $b->judul }}</td>
                                            <td>{{ $b->abstrak }}</td>
                                            <td>{{ $b->isi }}</td>
                                            <td>{{ $b->penulis }}</td>
                                            <td>
                                                <div class="w-100px">
                                                    <img src="{{ asset($b->gambar) }}" class="rounded"
                                                        alt="guru-besar" style="max-height: 300px">
                                                </div>
                                            </td>
                                            <td>{{ $b->file }}</td>
                                            <td>
                                                <a href="{{ route('data-jurnal.edit', $b->id) }}"
                                                    class="btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"><i
                                                        class="bi bi-play-circle me-1"></i>Edit</a>
                                                <form id="form-delete" action="{{ route('data-jurnal.destroy', $b->id) }}"
                                                    method="POST" style="display: inline">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button type="submit"
                                                        class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0 show_confirm"
                                                        data-toggle="tooltip" title='Delete'><i
                                                            class="bi bi-arrow-repeat me-1"></i>Hapus</button>
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
                                    {{ $jurnal->onEachSide(1)->links() }}
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination END -->
                    </div>
                    <!-- Card body START -->
                </div>
            </div>
        </div>
        <script>
            const dataJurnal = [];
            @foreach ($jurnal as $b)
                dataJurnal.push({
                    id: '{{ $b->id }}',
                    judul: '{{ $b->judul }}',
                    abstrak: '{{ $b->abstrak }}',
                    isi: '{{ $b->isi }}',
                    penulis: '{{ $b->penulis }}',
                    gambar: '{{ $b->gambar }}',
                    file: '{{ $b->file }}',
                });
            @endforeach
            console.log(dataJurnal);
                 
            document.querySelector('#search').addEventListener('keydown', e => {
                const filteredJurnal = dataJurnal.filter(jurnal => {
                    return jurnal.judul.toLowerCase().includes(e.target.value.toLowerCase()) ||
                        jurnal.penulis.toLowerCase().includes(e.target.value.toLowerCase());
                });
                
                const html = filteredJurnal.map( (jurnal) => `
                <tr>
                    <td>${jurnal.id}</td>
                    <td>${jurnal.judul}</td>
                    <td>${jurnal.abstrak}</td>
                    <td>${jurnal.isi}</td>
                    <td>${jurnal.penulis}</td>
                    <td>
                        <div class="w-100px">
                            <img src="${jurnal.gambar}" class="rounded"
                            alt="guru-besar" style="max-height: 300px">
                        </div>
                    </td>
                    <td>${jurnal.file}</td>
                    <td>
                        <a href="{{ route('data-jurnal.edit', $b->id)}}"
                        class="btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"><i
                        class="bi bi-play-circle me-1"></i>Edit</a>
                        <form id="form-delete" action="{{ route('data-jurnal.destroy', $b->id)}}"
                        method="POST" style="display: inline">
                            @csrf
                            @method("DELETE")
                    <button type="submit"
                    class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0 show_confirm"
                    data-toggle="tooltip" title='Delete'><i
                    class="bi bi-arrow-repeat me-1"></i>Hapus</button>
                        </form>
                    </td>
                </tr>
                `).join('')

                document.querySelector('tbody').innerHTML = html;
            })
        </script>
        @push('scripts')
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
        @endpush
    @stop
</x-app-layout>
