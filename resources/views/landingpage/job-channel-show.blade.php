<x-guest-layout>
    <!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
    Page intro START -->
    <section class="bg-light py-0 py-sm-5">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-8">
                    <!-- Badge -->
                    <h6 class="mb-3 font-base bg-primary text-white py-2 px-4 rounded-2 d-inline-block">{{ $result['bidang'] }}</h6>
                    <!-- Title -->
                    <h1>{{ $result['posisi_pekerjaan'] }}</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Page intro END -->
    
    <!-- =======================
    Page content START -->
    <section class="pb-0 py-lg-5">
        <div class="container">
            <div class="row">
                <!-- Main content START -->
                <div class="col-lg-8">
                    <div class="bg-body shadow rounded-2 p-4">
                        <!-- Tabs START -->
                        <ul class="nav nav-pills nav-tabs-line pt-0" id="course-pills-tab" role="tablist">
                            <!-- Tab item -->
                            <li class="nav-item me-2 me-sm-4" role="presentation">
                                <button class="nav-link mb-2 mb-md-0 active" id="course-pills-tab-1" data-bs-toggle="pill" data-bs-target="#course-pills-1" type="button" role="tab" aria-controls="course-pills-1" aria-selected="true">{{!! $result['gaji'] !!}}</button>
                            </li>
                        </ul>
                        <hr>
                        <!-- Tabs END -->
    
                        <!-- Tab contents START -->
                        <div class="tab-content pt-2" id="course-pills-tabContent">
                            <!-- Content START -->
                            <div class="tab-pane fade show active" id="course-pills-1" role="tabpanel" aria-labelledby="course-pills-tab-1">
                                <!-- Course detail START -->
                                <h5 class="mb-3">Requirement</h5>
                                <p class="mb-3">
                                    {{!! $result['requirement'] !!}}
                                </p>
                                <!-- List content -->
                                <h5 class="mt-4">Job Desk</h5>
                                <p>
                                    {{!! $result['job_desk'] !!}}
                                </p>
                                <!-- Course detail END -->
    
                            </div>
                            <!-- Content END -->
                        </div>
                        <!-- Tab contents END -->
                    </div>
                </div>
                <!-- Main content END -->
    
                <!-- Right sidebar START -->
                <div class="col-lg-4 pt-5 pt-lg-0">
                    <div class="row mb-5 mb-lg-0">
                        {{-- <div class="col-md-6 col-lg-12">
    
                            <!-- Course info START -->
                            <div class="card card-body shadow p-4 mb-4">
                                <!-- Title -->
                                <h4 class="mb-3">Lowongan Terbaru</h4>
                                <ul class="list-group list-group-borderless">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="h6 fw-light mb-0"><i class="fas fa-fw fa-book-open text-primary"></i>Lectures</span>
                                        <span>30 menit yang lalu</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="h6 fw-light mb-0"><i class="fas fa-fw fa-clock text-primary"></i>Duration</span>
                                        <span>4h 50m</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="h6 fw-light mb-0"><i class="fas fa-fw fa-signal text-primary"></i>Skills</span>
                                        <span>Beginner</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="h6 fw-light mb-0"><i class="fas fa-fw fa-globe text-primary"></i>Language</span>
                                        <span>English</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="h6 fw-light mb-0"><i class="fas fa-fw fa-user-clock text-primary"></i>Deadline</span>
                                        <span>Nov 30 2021</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="h6 fw-light mb-0"><i class="fas fa-fw fa-medal text-primary"></i>Certificate</span>
                                        <span>Yes</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Course info END -->
                        </div> --}}
    
                        <div class="col-md-6 col-lg-12">
                            <!-- Recently Viewed START -->
                            <div class="card card-body shadow p-4 mb-4">
                                <!-- Title -->
                                <h4 class="mb-3">Lowongan Terbaru</h4>
                                <!-- Course item START -->
                                <div class="row gx-3 mb-3">
                                    <!-- Image -->
                                    <div class="col-4">
                                        <img class="rounded" src="assets/images/courses/4by3/21.jpg" alt="">
                                    </div>
                                    <!-- Info -->
                                    <div class="col-8">
                                        <h6 class="mb-0"><a href="#">Judul Pekerjaan</a></h6>
                                        <ul class="list-group list-group-borderless mt-1 d-flex justify-content-between">
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="text-success">Project</span>
                                                <span class="h6 fw-light">1 jam yang lalu</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Course item END -->
    
                                <!-- Course item START -->
                                <div class="row gx-3">
                                    <!-- Image -->
                                    <div class="col-4">
                                        <img class="rounded" src="assets/images/courses/4by3/18.jpg" alt="">
                                    </div>
                                    <!-- Info -->
                                    <div class="col-8">
                                        <h6 class="mb-0"><a href="#">The Complete Video Production Bootcamp</a></h6>
                                        <ul class="list-group list-group-borderless mt-1 d-flex justify-content-between">
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="text-success">$150</span>
                                                <span class="h6 fw-light">4.0<i class="fas fa-star text-warning ms-1"></i></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Course item END -->
                            </div>
                            <!-- Recently Viewed END -->
    
                            <!-- Tags START -->
                            <div class="card card-body shadow p-4">
                                <h4 class="mb-3">Bidang Pekerjaan</h4>
                                <ul class="list-inline mb-0">
                                    @foreach($hasil["data"] as  $key => $value)
                                    <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">{{$value["bidang"]}}</a> </li>
                                    @endforeach
                                </ul>
                            </div>	
                            <!-- Tags END -->
                        </div>
                    </div><!-- Row End -->
                </div>
                <!-- Right sidebar END -->
    
            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Page content END -->
    
    <!-- =======================
    Listed courses START -->
    <section class="pt-0">
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <h2 class="mb-0">Lowongan Pekerjaan</h2>
            </div>
    
            <div class="row">
                <!-- Slider START -->
                <div class="tiny-slider arrow-round arrow-blur arrow-hover">
                    <div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-edge="2" data-dots="false" data-items="3" data-items-lg="2" data-items-sm="1">
                    
                        <!-- Card Item START -->
                        <div>
                            <div class="card p-2 border">
                                <div class="rounded-top overflow-hidden">
                                    <div class="card-overlay-hover">
                                        <img src="assets/images/courses/4by3/17.jpg" class="card-img-top" alt="course image">
                                    </div>
                                    <!-- Hover element -->
                                    <div class="card-img-overlay">
                                        <div class="card-element-hover d-flex justify-content-end">
                                            <a href="#" class="icon-md bg-white rounded-circle text-center">
                                                <i class="fas fa-shopping-cart text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- Badge and icon -->
                                    <div class="d-flex justify-content-between">
                                        <!-- Rating and info -->
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <!-- Info -->
                                            <li class="list-inline-item d-flex justify-content-center align-items-center">
                                                <div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></div>
                                                <span class="h6 fw-light ms-2 mb-0">9.1k</span>
                                            </li>
                                            <!-- Rating -->
                                            <li class="list-inline-item d-flex justify-content-center align-items-center">
                                                <div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
                                                <span class="h6 fw-light ms-2 mb-0">4.5</span>
                                            </li>
                                        </ul>
                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
                                        </div>
                                    </div>
                                    <!-- Divider -->
                                    <hr>
                                    <!-- Title -->
                                    <h5 class="card-title"><a href="#">The Complete Digital Marketing Course - 12 Courses in 1</a></h5>
                                    <!-- Badge and Price -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="badge bg-info bg-opacity-10 text-info"><i class="fas fa-circle small fw-bold me-2"></i>Personal Development</a>
                                        <!-- Price -->
                                        <h3 class="text-success mb-0">$140</h3>
                                    </div>
                                </div>
                            </div>
                        </div>	
                        <!-- Card Item END -->
    
                        <!-- Card Item START -->
                        <div>
                            <div class="card p-2 border">
                                <div class="rounded-top overflow-hidden">
                                    <div class="card-overlay-hover">
                                        <img src="assets/images/courses/4by3/18.jpg" class="card-img-top" alt="course image">
                                    </div>
                                    <!-- Hover element -->
                                    <div class="card-img-overlay">
                                        <div class="card-element-hover d-flex justify-content-end">
                                            <a href="#" class="icon-md bg-white rounded-circle text-center">
                                                <i class="fas fa-shopping-cart text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- Badge and icon -->
                                    <div class="d-flex justify-content-between">
                                        <!-- Rating and info -->
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <!-- Info -->
                                            <li class="list-inline-item d-flex justify-content-center align-items-center">
                                                <div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></div>
                                                <span class="h6 fw-light ms-2 mb-0">2.5k</span>
                                            </li>
                                            <!-- Rating -->
                                            <li class="list-inline-item d-flex justify-content-center align-items-center">
                                                <div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
                                                <span class="h6 fw-light ms-2 mb-0">3.6</span>
                                            </li>
                                        </ul>
                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt="avatar">
                                        </div>
                                    </div>
                                    <!-- Divider -->
                                    <hr>
                                    <!-- Title -->
                                    <h5 class="card-title"><a href="#">Fundamentals of Business Analysis</a></h5>
                                    <!-- Badge and Price -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="badge bg-info bg-opacity-10 text-info"><i class="fas fa-circle small fw-bold me-2"></i>Business Development</a>
                                        <!-- Price -->
                                        <h3 class="text-success mb-0">$160</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card Item END -->
    
                        <!-- Card Item START -->
                        <div>
                            <div class="card p-2 border">
                                <div class="rounded-top overflow-hidden">
                                    <div class="card-overlay-hover">
                                        <img src="assets/images/courses/4by3/21.jpg" class="card-img-top" alt="course image">
                                    </div>
                                    <!-- Hover element -->
                                    <div class="card-img-overlay">
                                        <div class="card-element-hover d-flex justify-content-end">
                                            <a href="#" class="icon-md bg-white rounded-circle text-center">
                                                <i class="fas fa-shopping-cart text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- Badge and icon -->
                                    <div class="d-flex justify-content-between">
                                        <!-- Rating and info -->
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <!-- Info -->
                                            <li class="list-inline-item d-flex justify-content-center align-items-center">
                                                <div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></div>
                                                <span class="h6 fw-light ms-2 mb-0">6k</span>
                                            </li>
                                            <!-- Rating -->
                                            <li class="list-inline-item d-flex justify-content-center align-items-center">
                                                <div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
                                                <span class="h6 fw-light ms-2 mb-0">3.8</span>
                                            </li>
                                        </ul>
                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
                                        </div>
                                    </div>
                                    <!-- Divider -->
                                    <hr>
                                    <!-- Title -->
                                    <h5 class="card-title"><a href="#">Google Ads Training: Become a PPC Expert</a></h5>
                                    <!-- Badge and Price -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="badge bg-info bg-opacity-10 text-info"><i class="fas fa-circle small fw-bold me-2"></i> SEO</a>
                                        <!-- Price -->
                                        <h3 class="text-success mb-0">$226</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card Item END -->
    
                        <!-- Card Item START -->
                        <div>
                            <div class="card p-2 border">
                                <div class="rounded-top overflow-hidden">
                                    <div class="card-overlay-hover">
                                        <img src="assets/images/courses/4by3/20.jpg" class="card-img-top" alt="course image">
                                    </div>
                                    <!-- Hover element -->
                                    <div class="card-img-overlay">
                                        <div class="card-element-hover d-flex justify-content-end">
                                            <a href="#" class="icon-md bg-white rounded-circle text-center">
                                                <i class="fas fa-shopping-cart text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- Badge and icon -->
                                    <div class="d-flex justify-content-between">
                                        <!-- Rating and info -->
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <!-- Info -->
                                            <li class="list-inline-item d-flex justify-content-center align-items-center">
                                                <div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></div>
                                                <span class="h6 fw-light ms-2 mb-0">15k</span>
                                            </li>
                                            <!-- Rating -->
                                            <li class="list-inline-item d-flex justify-content-center align-items-center">
                                                <div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
                                                <span class="h6 fw-light ms-2 mb-0">4.8</span>
                                            </li>
                                        </ul>
                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
                                        </div>
                                    </div>
                                    <!-- Divider -->
                                    <hr>
                                    <!-- Title -->
                                    <h5 class="card-title"><a href="#">Behavior, Psychology and Care Training</a></h5>
                                    <!-- Badge and Price -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="badge bg-info bg-opacity-10 text-info"><i class="fas fa-circle small fw-bold me-2"></i>Lifestyle</a>
                                        <!-- Price -->
                                        <h3 class="text-success mb-0">$342</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card Item END -->
                    </div>
                </div>
                <!-- Slider END -->		
            </div>
        </div>
    </section>
    <!-- =======================
    Listed courses END -->
    
    </main>
    <!-- **************** MAIN CONTENT END **************** -->
</x-guest-layout>