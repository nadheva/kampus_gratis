<x-guest-layout>
    <!-- =======================
Page Banner START -->
<section class="bg-dark align-items-center d-flex" style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
	<!-- Main banner background image -->
	<div class="container">
    <div class="row">
      <div class="col-12">
        <!-- Title -->
        <h1 class="text-white">Pengumuman</h1>
        <!-- Breadcrumb -->
        <div class="d-flex">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
              <li class="breadcrumb-item"><a href="/">Beranda</a></li>
              <li class="breadcrumb-item active" aria-current="page">Pengumuman</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
	</div>
</section>
<!-- =======================
Page Banner END -->
<!--Page content START -->
<section class="pb-0 py-sm-5">
	<div class="container">
    <div class="row">
        <!-- Main content START -->
        <div class="col-xl-9 col-xxl-8">

            <!-- Course list START -->
            <div class="row g-4">
                @foreach($pengumuman as $p)
                <!-- Card list START -->
                <div class="col-12">
                    <div class="card shadow overflow-hidden p-2">
                        <div class="row g-0">
                            <div class="col-md-5 overflow-hidden">
                                <img src="assets/images/courses/4by3/06.jpg" class="rounded-2" alt="Card image">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <!-- Badge and rating -->
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <!-- Badge -->
                                        <a href="#" class="badge bg-primary text-white mb-2 mb-sm-0">Development</a>
                                        <!-- Rating and wishlist -->
                                        <div>
                                            <span class="h6 fw-light me-3"><i class="fas fa-star text-warning me-1"></i>4.5</span>
                                            <a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
                                        </div>
                                    </div>
        
                                    <!-- Title -->
                                    <h5 class="card-title"><a href="#">{{$p->judul}}</a></h5>
                                    <p class="text-truncate-2 d-none d-lg-block">{{$p->isi}}</p>
        
                                    <!-- Info -->
                                    <ul class="list-inline">
                                        <li class="list-inline-item h6 fw-light mb-1 mb-sm-0"><i class="far fa-clock text-danger me-2"></i>{{$p->created_at}}</li>
                                        <li class="list-inline-item h6 fw-light mb-1 mb-sm-0"><i class="fas fa-table text-orange me-2"></i>52 lectures</li>
                                        <li class="list-inline-item h6 fw-light"><i class="fas fa-signal text-success me-2"></i>Intermediate</li>
                                    </ul>
        
                                    <!-- Price and avatar -->
                                    <div class="d-sm-flex justify-content-sm-between align-items-center">
                                        <!-- Avatar -->
                                        <div class="d-flex align-items-center">
                                            <div class="avatar">
                                                <img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="avatar">
                                            </div>
                                            <p class="mb-0 ms-2"><a href="#" class="h6 fw-light">Jacqueline Miller</a></p>
                                        </div>
                                        <!-- Price -->
                                        <div class="mt-3 mt-sm-0">
                                            <a href="#" class="btn btn-dark">View more</a>    
                                        </div>                  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- Card list END -->
            </div>
        </div>
    </div>
    </div>
</section>

</x-guest-layout>