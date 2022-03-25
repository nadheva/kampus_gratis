<x-app-layout>
    <!-- =======================
Page Banner START -->
@include('partials.banner-dashboard')
<!-- =======================
Page Banner END -->

<!-- =======================
Page content START -->
<section class="pt-0">
	<div class="container">
		<div class="row">

			<!-- Right sidebar START -->
			@include('partials.sidebar-dashboard')
			<!-- Right sidebar END -->

			<!-- Main content START -->
			<div class="col-xl-9">

				<div class="card border rounded-3">
					<!-- Card header START -->
					<div class="card-header border-bottom">
						<h3 class="mb-0">Tentang Kampus Gratis</h3>
					</div>
					<!-- Card header END -->

					<!-- Card body START -->
					<div class="card-body">
                        <section class="pt-0">
                            <div class="container">
                                <div class="row">
                        
                                    <!-- Right sidebar START -->
                                    <div class="col-xl-3">
                                        <!-- Responsive offcanvas body START -->
                                        <nav class="navbar navbar-light navbar-expand-xl mx-0">
                                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                                                <!-- Offcanvas header -->
                                                <div class="offcanvas-header bg-light">
                                                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">My profile</h5>
                                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                                                <!-- Offcanvas body -->
                                                <div class="offcanvas-body p-3 p-xl-0">
                                                    <div class="bg-dark border rounded-3 pb-0 p-3 w-100">
                                                        <!-- Dashboard menu -->
                                                        <div class="list-group list-group-dark list-group-borderless">
                                                            <a class="list-group-item" href="instructor-dashboard.html"><i class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
                                                            <a class="list-group-item" href="instructor-manage-course.html"><i class="bi bi-basket fa-fw me-2"></i>My Courses</a>
                                                            <a class="list-group-item active" href="instructor-earning.html"><i class="bi bi-graph-up fa-fw me-2"></i>Earnings</a>
                                                            <a class="list-group-item" href="instructor-studentlist.html"><i class="bi bi-people fa-fw me-2"></i>Students</a>
                                                            <a class="list-group-item" href="instructor-order.html"><i class="bi bi-folder-check fa-fw me-2"></i>Orders</a>
                                                            <a class="list-group-item" href="instructor-review.html"><i class="bi bi-star fa-fw me-2"></i>Reviews</a>
                                                            <a class="list-group-item" href="instructor-edit-profile.html"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit Profile</a>
                                                            <a class="list-group-item" href="instructor-payout.html"><i class="bi bi-wallet2 fa-fw me-2"></i>Payouts</a>
                                                            <a class="list-group-item" href="instructor-setting.html"><i class="bi bi-gear fa-fw me-2"></i>Settings</a>
                                                            <a class="list-group-item" href="instructor-delete-account.html"><i class="bi bi-trash fa-fw me-2"></i>Delete Profile</a>
                                                            <a class="list-group-item text-danger bg-danger-soft-hover" href="sign-in.html"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Sign Out</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </nav>
                                        <!-- Responsive offcanvas body END -->
                                    </div>
                                    <!-- Right sidebar END -->
                        
                                    <!-- Main content START -->
                                    <div class="col-xl-9">
                        
                                        <!-- Earning boxes START -->
                                        <div class="row g-4">
                                            <!-- Earning item -->
                                            <div class="col-sm-6 col-lg-4">
                                                <div class="text-center p-4 bg-light rounded-3">
                                                    <h6 class="text-body">Sales this month</h6>
                                                    <h2 class="mb-0 fs-1">$899.95</h2>
                                                </div>
                                            </div>
                        
                                            <!-- Earning item -->
                                            <div class="col-sm-6 col-lg-4">
                                                <div class="text-center p-4 bg-light rounded-3">
                                                    <h6 class="text-body">To be paid
                                                        <a tabindex="0" class="h6 mb-0" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top" data-bs-content="After US royalty withholding tax">
                                                            <i class="bi bi-info-circle-fill small"></i>
                                                        </a>
                                                    </h6>
                                                    <h2 class="mb-0 fs-1">$750.35</h2>
                                                </div>
                                            </div>
                        
                                            <!-- Earning item -->
                                            <div class="col-sm-6 col-lg-4">
                                                <div class="text-center p-4 bg-light rounded-3">
                                                    <h6 class="text-body">Lifetime Earnings</h6>
                                                    <h2 class="mb-0 fs-1">$4882.65</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Earning boxes END -->
                        
                                        <!-- Chart START -->
                                        <div class="card card-body rounded-top border overflow-hidden p-0 mt-5">
                                            <div class="row g-4 p-4">
                                                <!-- Content -->
                                                <div class="col-sm-6 col-md-4">
                                                    <span class="badge bg-dark text-white">Current Month</span>
                                                    <h4 class="text-primary my-2">$35000</h4>
                                                    <p class="mb-0"><span class="text-success me-1">0.20%<i class="bi bi-arrow-up"></i></span>vs last month</p>
                                                </div>
                        
                                                <!-- Content -->
                                                <div class="col-sm-6 col-md-4">
                                                    <span class="badge bg-dark text-white">Last Month</span>
                                                    <h4 class="my-2">$28000</h4>
                                                    <p class="mb-0"><span class="text-danger me-1">0.10%<i class="bi bi-arrow-down"></i></span>Then last month</p>
                                                </div>
                                            </div>
                        
                                            <!-- Apex chart -->
                                            <div id="ChartPayoutEarning"></div>
                        
                                        </div>
                                        <!-- Chart END -->
                        
                                        <!-- Earning chart START -->
                                        <div class="card border rounded-3 mt-5">
                                            <!-- Card title -->
                                            <div class="card-header">
                                                <h5 class="mb-0">Top five earning sources</h5>
                                            </div>
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <div class="row g-4 g-md-5 align-items-center">
                                                    <!-- Chart -->
                                                    <div class="col-md-6">
                                                        <div id="ChartPageViews"></div>
                                                    </div>
                        
                                                    <!-- Content -->
                                                    <div class="col-md-6">
                                                        <ul class="list-group list-group-borderless mb-3">
                                                            <li class="list-group-item"><h6 class="mb-0">Course Name</h6></li>
                                                            <li class="list-group-item"><i class="text-success fas fa-circle me-2"></i>The Complete Digital Marketing Course - 12 Courses in 1</li>
                                                            <li class="list-group-item"><i class="text-warning fas fa-circle me-2"></i>Google Ads Training: Become a PPC Expert</li>
                                                            <li class="list-group-item"><i class="text-danger fas fa-circle me-2"></i>Microsoft Excel - Excel from Beginner to Advanced</li>
                                                            <li class="list-group-item"><i class="text-primary fas fa-circle me-2"></i>Create a Design System in Figma</li>
                                                            <li class="list-group-item"><i class="text-secondary fas fa-circle me-2"></i>Deep Learning with React-Native</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Earning chart END -->
                        
                                    </div>
                                    <!-- Main content END -->
                                    
                                </div><!-- Row END -->
                            </div>
                        </section>
					</div>
					<!-- Card body START -->
				</div>
			<!-- Main content END -->
			</div><!-- Row END -->
		</div>
	</div>	
</section>
<!-- =======================
Page content END -->
<script>
    
    $('.show_confirm').click(function(event) {
            var form =  $(this).closest("form");
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
</x-app-layout>