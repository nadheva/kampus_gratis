<x-app-layout>
    <!-- Main content START -->
    <div class="col-xl-9">
        <!-- Edit profile START -->
				<div class="card border rounded-3">
					<!-- Card header -->
					<div class="card-header border-bottom">
						<h3 class="card-header-title mb-0">Edit Profile</h3>
					</div>
					<!-- Card body START -->
					<div class="card-body">
						<!-- Form -->
						<form class="row g-4">

							<!-- Profile picture -->
							<div class="col-12 justify-content-center align-items-center">
								<label class="form-label">Profile picture</label>
								<div class="d-flex align-items-center">
									<label class="position-relative me-4" for="uploadfile-1" title="Replace this pic">
										<!-- Avatar place holder -->
										<span class="avatar avatar-xl">
											<img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/07.jpg" alt="">
										</span>
										<!-- Remove btn -->
										<button type="button" class="uploadremove"><i class="bi bi-x text-white"></i></button>
									</label>
									<!-- Upload button -->
									<label class="btn btn-primary-soft mb-0" for="uploadfile-1">Change</label>
									<input id="uploadfile-1" class="form-control d-none" type="file">
								</div>
							</div>

							<!-- Full name -->
							<div class="col-12">
								<label class="form-label">Full name</label>
								<div class="input-group">
									<input type="text" class="form-control" value="Lori" placeholder="First name">
									<input type="text" class="form-control" value="Stevens" placeholder="Last name">
								</div>
							</div>

							<!-- Username -->
							<div class="col-md-6">
								<label class="form-label">Username</label>
								<div class="input-group">
									<span class="input-group-text">Eduport.com</span>
									<input type="text" class="form-control" value="loristev">
								</div>
							</div>

							<!-- Email id -->
							<div class="col-md-6">
								<label class="form-label">Email id</label>
								<input class="form-control" type="email" value="example@gmail.com"  placeholder="Email">
							</div>

							<!-- Phone number -->
							<div class="col-md-6">
								<label class="form-label">Phone number</label>
								<input type="text" class="form-control" value="1234567890" placeholder="Phone number">
							</div>

							<!-- Location -->
							<div class="col-md-6">
								<label class="form-label">Location</label>
								<input class="form-control" type="text" value="California">
							</div>
							
							<!-- About me -->
							<div class="col-12">
								<label class="form-label">About me</label>
								<textarea class="form-control" rows="3">I’ve found a way to get paid for my favorite hobby, and do so while following my dream of traveling the world.</textarea>
								<div class="form-text">Brief description for your profile.</div> 
							</div>

							<!-- Education -->
							<div class="col-12">
								<label class="form-label">Education</label>
								<input class="form-control mb-2" type="text" value="Bachelor in Computer Graphics">
								<input class="form-control mb-2" type="text" value="Masters in Computer Graphics">
								<button class="btn btn-sm btn-light mb-0"><i class="bi bi-plus me-1"></i>Add more</button>
							</div>

							<!-- Save button -->
							<div class="d-sm-flex justify-content-end">
								<button type="button" class="btn btn-primary mb-0">Save changes</button>
							</div>
						</form>
					</div>
					<!-- Card body END -->
				</div>
				<!-- Edit profile END -->
    </div>
</x-app-layout>