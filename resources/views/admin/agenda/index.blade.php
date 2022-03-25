@extends('../../layouts/app')
@section('title', 'Agenda')
@section('content')
    <div class="page-content-wrapper border">

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
                    <h2 class="mb-0 fs-1 text-primary">1200</h2>
                </div>
            </div>

            <!-- Course item -->
            <div class="col-sm-6 col-lg-4">
                <div class="text-center p-4 bg-success bg-opacity-10 border border-success rounded-3">
                    <h6>Sedang berjalan</h6>
                    <h2 class="mb-0 fs-1 text-success">996</h2>
                </div>
            </div>

            <!-- Course item -->
            <div class="col-sm-6 col-lg-4">
                <div class="text-center p-4  bg-warning bg-opacity-15 border border-warning rounded-3">
                    <h6>Akan datang</h6>
                    <h2 class="mb-0 fs-1 text-warning">200</h2>
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
                    <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                        <!-- Table head -->
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 rounded-start">Course Name</th>
                                <th scope="col" class="border-0">Instructor</th>
                                <th scope="col" class="border-0">Added Date</th>
                                <th scope="col" class="border-0">Type</th>
                                <th scope="col" class="border-0">Price</th>
                                <th scope="col" class="border-0">Status</th>
                                <th scope="col" class="border-0 rounded-end">Action</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>

                            <!-- Table row -->
                            <tr>
                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <!-- Image -->
                                        <div class="w-60px">
                                            <img src="assets/images/courses/4by3/08.jpg" class="rounded" alt="">
                                        </div>
                                        <!-- Title -->
                                        <h6 class="mb-0 ms-2">
                                            <a href="#" class="stretched-link">Building Scalable APIs with GraphQL</a>
                                        </h6>
                                    </div>
                                </td>

                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center mb-3">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs flex-shrink-0">
                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg"
                                                alt="avatar">
                                        </div>
                                        <!-- Info -->
                                        <div class="ms-2">
                                            <h6 class="mb-0 fw-light">Lori Stevens</h6>
                                        </div>
                                    </div>
                                </td>

                                <!-- Table data -->
                                <td>28 Oct 2021</td>

                                <!-- Table data -->
                                <td> <span class="badge bg-primary text-white">Beginner</span> </td>

                                <!-- Table data -->
                                <td>$350</td>

                                <!-- Table data -->
                                <td> <span class="badge bg-warning bg-opacity-15 text-warning">Pending</span> </td>

                                <!-- Table data -->
                                <td>
                                    <a href="#" class="btn btn-sm btn-success-soft me-1 mb-1 mb-md-0">Approve</a>
                                    <button class="btn btn-sm btn-secondary-soft mb-0">Reject</button>
                                </td>
                            </tr>

                            <!-- Table row -->
                            <tr>
                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <!-- Image -->
                                        <div class="w-60px">
                                            <img src="assets/images/courses/4by3/10.jpg" class="rounded" alt="">
                                        </div>
                                        <!-- Title -->
                                        <h6 class="mb-0 ms-2">
                                            <a href="#" class="stretched-link">Bootstrap 5 From Scratch</a>
                                        </h6>
                                    </div>
                                </td>

                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center mb-3">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs flex-shrink-0">
                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg"
                                                alt="avatar">
                                        </div>
                                        <!-- Info -->
                                        <div class="ms-2">
                                            <h6 class="mb-0 fw-light">Billy Vasquez</h6>
                                        </div>
                                    </div>
                                </td>

                                <!-- Table data -->
                                <td>16 Oct 2021</td>

                                <!-- Table data -->
                                <td> <span class="badge bg-purple text-white">Intermediate</span> </td>

                                <!-- Table data -->
                                <td>$256</td>

                                <!-- Table data -->
                                <td>
                                    <span class="badge bg-warning bg-opacity-15 text-warning">Pending</span>
                                </td>

                                <!-- Table data -->
                                <td>
                                    <a href="#" class="btn btn-sm btn-success-soft me-1 mb-1 mb-md-0">Approve</a>
                                    <button class="btn btn-sm btn-secondary-soft mb-0">Reject</button>
                                </td>
                            </tr>

                            <!-- Table row -->
                            <tr>
                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <!-- Image -->
                                        <div class="w-60px">
                                            <img src="assets/images/courses/4by3/02.jpg" class="rounded" alt="">
                                        </div>
                                        <!-- Title -->
                                        <h6 class="mb-0 ms-2">
                                            <a href="#" class="stretched-link">Graphic Design Masterclass</a>
                                        </h6>
                                    </div>
                                </td>

                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center mb-3">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs flex-shrink-0">
                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg"
                                                alt="avatar">
                                        </div>
                                        <!-- Info -->
                                        <div class="ms-2">
                                            <h6 class="mb-0 fw-light">Carolyn Ortiz</h6>
                                        </div>
                                    </div>
                                </td>

                                <!-- Table data -->
                                <td>28 Aug 2021</td>

                                <!-- Table data -->
                                <td> <span class="badge bg-orange text-white">All level</span> </td>

                                <!-- Table data -->
                                <td>$347</td>

                                <!-- Table data -->
                                <td>
                                    <span class="badge bg-success bg-opacity-15 text-success">Live</span>
                                </td>

                                <!-- Table data -->
                                <td>
                                    <a href="#" class="btn btn-sm btn-dark me-1 mb-1 mb-md-0">Edit</a>
                                </td>
                            </tr>

                            <!-- Table row -->
                            <tr>
                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <!-- Image -->
                                        <div class="w-60px">
                                            <img src="assets/images/courses/4by3/04.jpg" class="rounded" alt="">
                                        </div>
                                        <!-- Title -->
                                        <h6 class="mb-0 ms-2">
                                            <a href="#" class="stretched-link">Learn Invision</a>
                                        </h6>
                                    </div>
                                </td>

                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center mb-3">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs flex-shrink-0">
                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg"
                                                alt="avatar">
                                        </div>
                                        <!-- Info -->
                                        <div class="ms-2">
                                            <h6 class="mb-0 fw-light">Frances Guerrero</h6>
                                        </div>
                                    </div>
                                </td>

                                <!-- Table data -->
                                <td>15 June 2021</td>

                                <!-- Table data -->
                                <td> <span class="badge bg-orange text-white">All level</span> </td>

                                <!-- Table data -->
                                <td>$445</td>

                                <!-- Table data -->
                                <td>
                                    <span class="badge bg-success bg-opacity-15 text-success">Live</span>
                                </td>

                                <!-- Table data -->
                                <td>
                                    <a href="#" class="btn btn-sm btn-dark me-1 mb-1 mb-md-0">Edit</a>
                                </td>
                            </tr>

                            <!-- Table row -->
                            <tr>
                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <!-- Image -->
                                        <div class="w-60px">
                                            <img src="assets/images/courses/4by3/06.jpg" class="rounded" alt="">
                                        </div>
                                        <!-- Title -->
                                        <h6 class="mb-0 ms-2">
                                            <a href="#" class="stretched-link">Angular – The Complete Guider</a>
                                        </h6>
                                    </div>
                                </td>

                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center mb-3">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs flex-shrink-0">
                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg"
                                                alt="avatar">
                                        </div>
                                        <!-- Info -->
                                        <div class="ms-2">
                                            <h6 class="mb-0 fw-light">Louis Ferguson</h6>
                                        </div>
                                    </div>
                                </td>

                                <!-- Table data -->
                                <td>10 Dec 2020</td>

                                <!-- Table data -->
                                <td> <span class="badge bg-purple text-white">Intermediate</span> </td>

                                <!-- Table data -->
                                <td>$165</td>

                                <!-- Table data -->
                                <td>
                                    <span class="badge bg-success bg-opacity-15 text-success">Live</span>
                                </td>

                                <!-- Table data -->
                                <td>
                                    <a href="#" class="btn btn-sm btn-dark me-1 mb-1 mb-md-0">Edit</a>
                                </td>
                            </tr>

                            <!-- Table row -->
                            <tr>
                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <!-- Image -->
                                        <div class="w-60px">
                                            <img src="assets/images/courses/4by3/09.jpg" class="rounded" alt="">
                                        </div>
                                        <!-- Title -->
                                        <h6 class="mb-0 ms-2">
                                            <a href="#" class="stretched-link">JavaScript: Full Understanding</a>
                                        </h6>
                                    </div>
                                </td>

                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center mb-3">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs flex-shrink-0">
                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/08.jpg"
                                                alt="avatar">
                                        </div>
                                        <!-- Info -->
                                        <div class="ms-2">
                                            <h6 class="mb-0 fw-light">Samuel Bishop</h6>
                                        </div>
                                    </div>
                                </td>

                                <!-- Table data -->
                                <td>09 Nov 2020</td>

                                <!-- Table data -->
                                <td> <span class="badge bg-primary text-white">Beginner</span> </td>

                                <!-- Table data -->
                                <td>$575</td>

                                <!-- Table data -->
                                <td>
                                    <span class="badge bg-success bg-opacity-15 text-success">Live</span>
                                </td>

                                <!-- Table data -->
                                <td>
                                    <a href="#" class="btn btn-sm btn-dark me-1 mb-1 mb-md-0">Edit</a>
                                </td>
                            </tr>

                            <!-- Table row -->
                            <tr>
                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <!-- Image -->
                                        <div class="w-60px">
                                            <img src="assets/images/courses/4by3/11.jpg" class="rounded" alt="">
                                        </div>
                                        <!-- Title -->
                                        <h6 class="mb-0 ms-2">
                                            <a href="#" class="stretched-link">Build Responsive Websites with HTML</a>
                                        </h6>
                                    </div>
                                </td>

                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center mb-3">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs flex-shrink-0">
                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg"
                                                alt="avatar">
                                        </div>
                                        <!-- Info -->
                                        <div class="ms-2">
                                            <h6 class="mb-0 fw-light">Dennis Barrett</h6>
                                        </div>
                                    </div>
                                </td>

                                <!-- Table data -->
                                <td>21 Aug 2020</td>

                                <!-- Table data -->
                                <td> <span class="badge bg-primary text-white">Beginner</span> </td>

                                <!-- Table data -->
                                <td>$268</td>

                                <!-- Table data -->
                                <td>
                                    <span class="badge bg-success bg-opacity-15 text-success">Live</span>
                                </td>

                                <!-- Table data -->
                                <td>
                                    <a href="#" class="btn btn-sm btn-dark me-1 mb-1 mb-md-0">Edit</a>
                                </td>
                            </tr>

                            <!-- Table row -->
                            <tr>
                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <!-- Image -->
                                        <div class="w-60px">
                                            <img src="assets/images/courses/4by3/12.jpg" class="rounded" alt="">
                                        </div>
                                        <!-- Title -->
                                        <h6 class="mb-0 ms-2">
                                            <a href="#" class="stretched-link">Build Websites with CSS</a>
                                        </h6>
                                    </div>
                                </td>

                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center mb-3">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs flex-shrink-0">
                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg"
                                                alt="avatar">
                                        </div>
                                        <!-- Info -->
                                        <div class="ms-2">
                                            <h6 class="mb-0 fw-light">Joan Wallace</h6>
                                        </div>
                                    </div>
                                </td>

                                <!-- Table data -->
                                <td>02 April 2020</td>

                                <!-- Table data -->
                                <td> <span class="badge bg-orange text-white">All level</span> </td>

                                <!-- Table data -->
                                <td>$370</td>

                                <!-- Table data -->
                                <td>
                                    <span class="badge bg-success bg-opacity-15 text-success">Live</span>
                                </td>

                                <!-- Table data -->
                                <td>
                                    <a href="#" class="btn btn-sm btn-dark me-1 mb-1 mb-md-0">Edit</a>
                                </td>
                            </tr>

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
                            <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                            <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
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
    @stop
