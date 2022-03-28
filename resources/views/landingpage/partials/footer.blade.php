<footer class="pt-5">
	<div class="container">
		<!-- Row START -->
		<div class="row g-4">

			<!-- Widget 1 START -->
			<div class="col-lg-5 mx-auto">
				<!-- logo -->
				<a class="me-0" href="index.html">
					<img class="light-mode-item h-40px" src="{{asset('assets/images/logo.png')}}" alt="logo"  style="max-width: 200%">
					<img class="dark-mode-item h-40px" src="{{asset('assets/images/logo.png')}}" alt="logo"  style="max-width: 200%">
				</a>
				<p class="my-3">Eduport education theme, built specifically for the education centers which is dedicated to teaching and involve learners.</p>
				<!-- Social media icon -->
				<ul class="list-inline mb-0 mt-3">
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-facebook" target="_BLANK" href="https://www.facebook.com/Learning-Kampus-Gratis-100676062407934"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-instagram" target="_BLANK" href="https://instagram.com/kampus.gratis?utm_medium=copy_link"><i class="fab fa-fw fa-instagram"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-twitter" target="_BLANK" href="https://twitter.com/kampus_gratis"><i class="fab fa-fw fa-twitter"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-linkedin" target="_BLANK" href="http://linkedin.com/in/kampusgratis"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
				</ul>
			</div>
			<!-- Widget 1 END -->

			<!-- Widget 2 START -->
			<div class="col-lg-6">
				<div class="row g-4">
					<!-- Link block -->
					<div class="col-6 col-md-4">
						<h5 class="mb-2 mb-md-4">Tentang</h5>
						<ul class="nav flex-column">
							<li class="nav-item"><a class="nav-link" href="#">Visi & Misi</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Pendidikan</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Mahasiswa</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Alumni</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Jenjang Karir</a></li>
						</ul>
					</div>
									
					<!-- Link block -->
					<div class="col-6 col-md-4">
						<h5 class="mb-2 mb-md-4">Magang</h5>
						<ul class="nav flex-column">
							<li class="nav-item"><a class="nav-link" href="#">Tentang Magang</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Daftar Magang</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Posisi Magang</a></li>
						</ul>
					</div>

					<!-- Link block -->
					<div class="col-6 col-md-4">
						<h5 class="mb-2 mb-md-4">Contact</h5>
						<!-- Time -->
						<p class="mb-2">
							Phone:<span class="h6 fw-light ms-2">+62 812-1609-5555</span>
							<span class="d-block small">(08.00 s/d 17.00 WIB)</span>
						</p>

						<p class="mb-0">Email:<span class="h6 fw-light ms-2">manajemen@kampusgratis.id</span></p>

						<div class="row g-2 mt-2">
							<!-- Google play store button -->
							<div class="col-6 col-sm-4 col-md-3 col-lg-6">
								<a href="#"> <img src="{{asset('assets/images/client/google-play.svg')}}" alt=""> </a>
							</div>
							<!-- App store button -->
							{{-- <div class="col-6 col-sm-4 col-md-3 col-lg-6">
								<a href="#"> <img src="assets/images/client/app-store.svg" alt="app-store"> </a>
							</div> --}}
						</div>
					</div>
				</div>
			</div>
			<!-- Widget 2 END -->

		</div><!-- Row END -->

		<!-- Divider -->
		<hr class="mt-4 mb-0">

		<!-- Bottom footer -->
		<div class="py-3">
			<div class="container px-0">
				<div class="d-md-flex justify-content-between align-items-center py-3 text-center text-md-left">
					<!-- copyright text -->
					<div class="text-primary-hover"> Copyrights <a href="#" class="text-body">©2021 Kampus Gratis</a>. All rights reserved. </div>
					<!-- copyright links-->
					<div class=" mt-3 mt-md-0">
						<ul class="list-inline mb-0">
							<li class="list-inline-item">
								<!-- Language selector -->
								<div class="dropup mt-0 text-center text-sm-end">
									{{-- <a class="dropdown-toggle nav-link" href="#" role="button" id="languageSwitcher" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="fas fa-globe me-2"></i>Language
									</a> --}}
									<ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
										<li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="{{asset('assets/images/flags/uk.svg')}}" alt="">English</a></li>
										<li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="{{asset('assets/images/flags/gr.svg')}}" alt="">German </a></li>
										<li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="{{asset('assets/images/flags/sp.svg')}}" alt="">French</a></li>
									</ul>
								</div>
							</li>
							<li class="list-inline-item"><a class="nav-link" href="#">Terms of use</a></li>
							<li class="list-inline-item"><a class="nav-link pe-0" href="#">Privacy policy</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>