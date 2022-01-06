<x-app-layout>
    <div class="col-xl-9 mb-4">
        <!-- Card START -->
        <div class="card border rounded-3">
            <!-- Card header START -->
            <div class="card-header d-sm-flex justify-content-sm-between align-items-center border-bottom">
                <h3 class="mb-2 mb-sm-0">Frequently Asked Question</h3>
                <a href="{{ route('data-faq.create') }}" class="btn btn-sm btn-primary-soft mb-0">Tambah FAQ</a>
            </div>
            <!-- Card header END -->

            <!-- Card body START -->
            <div class="card-body">
                @foreach ($faq as $item)
                    <div class="bg-body border border-1 p-3 rounded-3 d-sm-flex justify-content-sm-between align-items-center mb-4">
                        <div class="col-12">
                            <div class="row g-xl-0 align-items-center">
                                <i class="fas fa-book-reader text-primary"></i>
                                <div class="col-lg-10">
                                    <div class="form-check">
                                        <label class="form-check-label mb-2 h5" for="address2">{{ $item->ask }}</label>
                                        <p class="mb-0 text-justify">{{ $item->answer }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <a href="{{ route('data-faq.edit', $item->id) }}" class="btn btn-sm btn-success mb-0">Edit</a>
                                    <form id="form-delete" action="{{route('data-faq.destroy',$item->id)}}" method="POST"  style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger mb-0">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                
                <!-- Pagination START -->
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
                    <!-- Content -->
                    <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                    <!-- Pagination -->
                    <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                        <ul class="pagination pagination-sm pagination-primary-soft mb-0 pb-0">
                            <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                            <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Pagination END -->
            </div>
            <!-- Card body START -->
        </div>
        <!-- Card END -->
    </div>
    
    <div class="col-xl-12">
        <!-- Card START -->
        <div class="card border rounded-3">
            <!-- Card header START -->
            <div class="card-header d-sm-flex justify-content-sm-between align-items-center border-bottom">
                <h3 class="mb-2 mb-sm-0">Pertanyaan dari pengguna</h3>
            </div>
            <!-- Card header END -->

            <!-- Card body START -->
            <div class="card-body">
                <div class="table-responsive border-0">
                    <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                        <!-- Table head -->
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 rounded-start">Pertanyaan</th>
                                <th scope="col-4" class="border-0">Tanggal kirim</th>
                                <th scope="col-2" class="border-0 rounded-end">Aksi</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>
                            <!-- Table item -->
                            <tr>
                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <!-- Image -->
                                        <div class="avatar avatar-md mb-2 mb-md-0">
                                            <img src="assets/images/avatar/01.jpg" class="rounded" alt="">
                                        </div>
                                        <div class="mb-0 ms-2">
                                            <!-- Title -->
                                            <h6 class="mb-0"><a href="#" class="stretched-link">Pengguna baru</a></h6>
                                            <!-- Address -->
                                            <span class="text-body small" style="word-break: break-word">
                                            Mumbai    
                                            </span>
                                        </div>
                                    </div>
                                </td>

                                <!-- Table data -->
                                <td>4/9/2021</td>

                                <!-- Table data -->
                                <td>
                                    <a href="#" class="btn btn-success-soft btn-round me-1 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="far fa-envelope"></i></a>
                                    <button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Block"><i class="fas fa-ban"></i></button>
                                </td>
                            </tr>

                            <!-- Table item -->
                            <tr>
                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <!-- Image -->
                                        <div class="avatar avatar-md mb-2 mb-md-0">
                                            <img src="assets/images/avatar/06.jpg" class="rounded" alt="">
                                        </div>
                                        <div class="mb-0 ms-2">
                                            <!-- Title -->
                                            <h6 class="mb-0"><a href="#" class="stretched-link">Frances Guerrero</a></h6>
                                            <!-- Address -->
                                            <span class="text-body small"><i class="fas fa-fw fa-map-marker-alt me-1 mt-1"></i>Pune</span>
                                        </div>
                                    </div>
                                </td>

                                <!-- Table data -->
                                <td>8/8/2021</td>

                                <!-- Table data -->
                                <td>
                                    <a href="#" class="btn btn-success-soft btn-round me-1 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="far fa-envelope"></i></a>
                                    <button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Block"><i class="fas fa-ban"></i></button>
                                </td>
                            </tr>
                        </tbody>
                        <!-- Table body END -->
                    </table>
                </div>
                
                <!-- Pagination START -->
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
                    <!-- Content -->
                    <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                    <!-- Pagination -->
                    <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                        <ul class="pagination pagination-sm pagination-primary-soft mb-0 pb-0">
                            <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                            <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Pagination END -->
            </div>
            <!-- Card body START -->
        </div>
        <!-- Card END -->
    </div>
</x-app-layout>