<x-guest-layout>
<section class="pb-0 pt-4 pb-md-5">
	<div class="container">
		<div class="row">
			<div class="col-12">

				<!-- Title and Info START -->
				<div class="row">
					<!-- Content -->
					<div class="col-lg-12 order-1">
						<!-- Pre title -->
						<span>{{ $berita->penulis }}</span><span class="mx-2">|</span><span>{{ $berita->created_at->diffForHumans() }}</span><span class="mx-2">|</span><div class="badge bg-success text-white">{{ $berita->kategori }}</div>
						<!-- Title -->
						<h1 class="mt-2 mb-0 display-5">{{ $berita->judul }}</h1>
                    </div>
				</div>

                <div class="row mt-4">
					<div class="col-xl-10 mx-auto">
						<!-- Card item START -->
						<div class="card overflow-hidden h-200px h-sm-300px h-lg-400px h-xl-500px rounded-3 text-center" style="background-position: center left; background-size: cover;">
							<div class="card-img-overlay d-flex align-items-center p-2 p-sm-4"> 
								<div class="w-100 my-auto">
									<div class="row justify-content-center">
										<!-- Video -->
										<div class="col-12">
											<img src="{{ asset($berita->gambar) }}" alt="{{ $berita->judul }}" class="img-fluid rounded-3">
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Card item END -->
					</div>
				</div>

				<!-- Quote and content START -->
				<div class="row mt-4">
					<!-- Content -->
					<div class="col-12 mt-4 mt-lg-0">
						<p><span class="dropcap h6 mb-0 px-2">{{$firstLetter}}</span> {!! $berita->isi !!}</p>
					</div>
				</div>

				<!-- Tags and share START -->
				<div class="d-lg-flex justify-content-lg-between mb-4">
					<!-- Social media button -->
					<div class="align-items-center mb-3 mb-lg-0">
						<h6 class="mb-2 me-4 d-inline-block">Share on:</h6>
						<ul class="list-inline mb-0 mb-2 mb-sm-0">
							<li class="list-inline-item"> <a class="btn px-2 btn-sm bg-facebook" href="#"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
							<li class="list-inline-item"> <a class="btn px-2 btn-sm bg-instagram-gradient" href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
							<li class="list-inline-item"> <a class="btn px-2 btn-sm bg-twitter" href="#"><i class="fab fa-fw fa-twitter"></i></a> </li>
							<li class="list-inline-item"> <a class="btn px-2 btn-sm bg-linkedin" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
						</ul>
					</div>
					<!-- Popular tags -->
					<div class="align-items-center">
						<h6 class="mb-2 me-4 d-inline-block">Popular Tags:</h6>
						<ul class="list-inline mb-0 social-media-btn">
							<li class="list-inline-item"> <a class="btn btn-outline-light btn-sm mb-lg-0" href="#">blog</a> </li>
							<li class="list-inline-item"> <a class="btn btn-outline-light btn-sm mb-lg-0" href="#">business</a> </li>
							<li class="list-inline-item"> <a class="btn btn-outline-light btn-sm mb-lg-0" href="#">bootstrap</a> </li>
							<li class="list-inline-item"> <a class="btn btn-outline-light btn-sm mb-lg-0" href="#">data science</a> </li>
							<li class="list-inline-item"> <a class="btn btn-outline-light btn-sm mb-lg-0" href="#">deep learning</a> </li>
						</ul>
					</div>
				</div>
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Main Content END -->

<!-- =======================
Related blog START -->
<section class="pt-0">
	<div class="container">
    <!-- Title -->
		<div class="row mb-4">
			<div class="col-12">
                @if(count($related) != 0)
                <h2 class="mb-0">You may also like</h2>
                @endif
			</div>
		</div>
		
		<!-- Slider START -->
		<div class="tiny-slider arrow-round arrow-hover arrow-dark">
			<div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-edge="2" data-dots="false" data-items="3" data-items-lg="2" data-items-sm="1">
				
            @foreach ($related as $item)
				<div class="card bg-transparent">
					<div class="row g-0">
						<!-- Image -->
						<div class="col-md-4">
							<img src="{{ asset($item->gambar) }}" class="img-fluid rounded-start" alt="...">
						</div>
						<!-- Card body -->
						<div class="col-md-8">
							<div class="card-body">
								<!-- Title -->
								<h6 class="card-title"><a href="{{ route('berita_detail', $item->id) }}">{{ $item->judul }}</a></h6>
								<span class="small">{{ $item->created_at->diffForHumans() }}</span>
							</div>
						</div>
					</div>
				</div>
            @endforeach
			</div>
		</div>
		<!-- Slider END -->
	</div>
</section>
</x-guest-layout>