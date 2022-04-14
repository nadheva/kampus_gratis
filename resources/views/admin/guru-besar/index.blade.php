<x-app-layout>
@section('title', 'Guru besar')
@section('content')
    <div class="page-content-wrapper border js-choice">

        <!-- Title -->
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">@yield('title')</h1>
                <a href="{{ route('guru-besar.create') }}" class="btn btn-sm btn-primary mb-0">Tambah guru besar</a>
            </div>
        </div>
        <!-- Card START -->
        <div class="card bg-transparent border">

            <!-- Card header START -->
            <div class="card-header bg-light border-bottom">
                <!-- Search and select START -->
                <div class="row g-3 align-items-center justify-content-between mb-4">
                    <!-- Search bar -->
                    <div class="col-md-8">
                        <form class="rounded position-relative">
                            <input class="form-control pe-5 bg-tranparent" id="search" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
                                type="submit"><i class="fas fa-search fs-6 "></i></button>
                        </form>
                    </div> 
                    
                    <!-- Select option -->
                    <div class="col-md-3">
                        <!-- Short by filter -->
                        <form>
                            <select id="sorting" class="form-select js-choice border-0 z-index-9" aria-label=".form-select-sm">
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
                                <th scope="col" class="border-0 rounded-start">Nama</th>
                                <th scope="col" class="border-0">Lulusan</th>
                                <th scope="col" class="border-0">Pekerjaan</th>
                                <th scope="col" colspan="2" class="border-0 rounded-end">Aksi</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>
                            @foreach ($gurubesar as $item)
                                <tr>
                                    <td>
                                        <h6 class="mb-0 ms-2">
                                            <a href="#">{{ $item->nama }}</a>
                                        </h6>
                                    </td>
                                    <td>{{ $item->lulusan }}</td>
                                    <td>{{ $item->pekerjaan }}</td>
                                    
                                    <td>
                                        <a href="{{ route('guru-besar.show', $item->id) }}"
                                            class="btn btn-sm btn-success-soft me-1 mb-1 mb-md-0">Lihat</a>
                                        <a href="{{ route('guru-besar.edit', $item->id) }}"
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
    <script>
            const dataGuru = [];
            @foreach ($gurubesar as $item)
                dataGuru.push({
                    id: '{{ $item->id }}',
                    nama: '{{ $item->nama }}',
                    lulusan: '{{ $item->lulusan }}',
                    pekerjaan: '{{ $item->pekerjaan }}',
                    status: '{{ $item->status }}',
                    foto: '{{ $item->foto }}',
                    slug: '{{ $item->slug }}',
                    update_at: '{{ $item->updated_at }}',
                });
            @endforeach

            document.querySelector('#sorting').addEventListener('change', function(){
                let sorting = this.value;
                dataGuru.sort(function(a, b){
                    if(sorting == 'Newest'){
                        return new Date(b.update_at) - new Date(a.update_at);
                    }else if(sorting == 'Oldest'){
                        return new Date(a.update_at) - new Date(b.update_at);
                    }
                });
                renderRowTable(dataGuru);
            });
            
            document.querySelector('#search').addEventListener('keydown', e => {
                const filteredGuru = dataGuru.filter(guru => {
                    return guru.nama.toLowerCase().includes(e.target.value.toLowerCase()) ||
                        guru.pekerjaan.toLowerCase().includes(e.target.value.toLowerCase());
                });
                
                renderRowTable(filteredGuru);
            })

            const renderRowTable = (data) => {
                document.querySelector('tbody').innerHTML = data.map( (guru) => `
                <tr>
                    <!-- Course item -->
                    <td>
                        <div class="d-flex align-items-center">
                            <!-- Image -->
                            <div class="w-100px">
                                <img style="max-height: 300px" src="${guru.foto}"
                                    class="rounded" alt="${guru.nama}">
                            </div>
                            <div class="mb-0 ms-2">
                                <!-- Title -->
                                <h6><a href="/data-guru/${guru.id}/edit">${guru.nama}</a></h6>
                                <!-- Info -->
                                <div class="d-sm-flex">
                                    <p class="h6 fw-light mb-0 small me-3"><i
                                            class="fas fa-user text-orange me-2"></i>${guru.pekerjaan}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </td>
                    <!-- Isi item -->
                    <td class="text-center text-sm-start">${guru.lulusan}"</td>
                    <!-- pekerjaan item -->
                    <td>
                        <div class="">
                            ${guru.pekerjaan}
                        </div>
                    </td>
                    <!-- Action item -->
                    <td>
                        <a href="#"
                            class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i
                                class="far fa-fw fa-edit"></i></a>
                        <form id="form-delete"
                            action="/admin/data-guru/${guru.id}/edit" method="POST"
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