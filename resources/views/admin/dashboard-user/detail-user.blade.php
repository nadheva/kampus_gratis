<x-app-layout>
    <!-- Main content START -->
    <div class="col-xl-9">
        <!-- Edit profile START -->
				<div class="card border rounded-3">
					<!-- Card header -->
					<div class="card-header border-bottom">
						<h3 class="card-header-title mb-0">Administrasi Pengguna</h3>
					</div>
					<!-- Card body START -->
					<div class="card-body">
						<!-- Form -->
						<form class="row g-4">

							<!-- Profile picture -->
							<div class="col-12 justify-content-center align-items-center">
								<label class="form-label">Foto Profil</label>
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
									<label class="btn btn-primary-soft mb-0" for="uploadfile-1">Ubah</label>
									<input id="uploadfile-1" class="form-control d-none" type="file">
								</div>
							</div>

							<!-- Nama Lengkap -->
							<div class="col-md-6">
								<label class="form-label">Nama Lengkap</label>
								<div class="input-group">
									<input type="text" class="form-control" value="loristev">
								</div>
							</div>

							<!-- NIK -->
							<div class="col-md-6">
								<label class="form-label">NIK</label>
								<input class="form-control" type="numbe" value="example@gmail.com"  placeholder="Email">
							</div>

							<!-- Nomor Telepon -->
							<div class="col-md-6">
								<label class="form-label">Nomor Telepon</label>
								<input type="text" class="form-control" value="1234567890" placeholder="Phone number">
							</div>

							<!-- Email -->
							<div class="col-md-6">
								<label class="form-label">Email</label>
								<input class="form-control" type="email" value="California">
							</div>

							<!-- Strata / Jurusan -->
							<div class="col-md-6">
								<label class="form-label">Strata / Jurusan</label>
								<div class="input-group">
									<span class="input-group-text">D1</span>
									<input type="text" class="form-control" value="loristev" readonly>
								</div>
							</div>

							<!-- Tahun Ajar / Semester -->
							<div class="col-md-6">
								<label class="form-label">Tahun Ajar / Semester</label>
								<div class="input-group">
									<span class="input-group-text">Gasal 2021</span>
									<input type="text" class="form-control" value="Semester 1" readonly>
								</div>
							</div>

							<!-- Tempat Lahir -->
							<div class="col-md-6">
								<label class="form-label">Tempat Lahir</label>
								<input type="text" class="form-control" value="1234567890" placeholder="Phone number">
							</div>

							<!-- Tanggal Lahir -->
							<div class="col-md-6">
								<label class="form-label">Tanggal Lahir</label>
								<input class="form-control" type="date" value="California">
							</div>

							<!-- Phone number -->
							<div class="col-md-6">
								<label class="form-label">Jenis Kelamin</label>
								<div class="d-flex">
									<div class="form-check radio-bg-light me-4">
										<input class="form-check-input" type="radio" name="kelamin" value="laki=laki" checked>
										<label class="form-check-label" for="flexRadioDefault1">
											Male
										</label>
									</div>
									<div class="form-check radio-bg-light">
										<input class="form-check-input" type="radio" name="kelamin" value="perempuan">
										<label class="form-check-label" for="flexRadioDefault2">
											Female
										</label>
									</div>
								</div>
							</div>
							
							<!-- Alamat Domisili -->
							<div class="col-12">
								<label class="form-label">Alamat Domisili</label>
								<textarea class="form-control" rows="3">I’ve found a way to get paid for my favorite hobby, and do so while following my dream of traveling the world.</textarea>
							</div>

							<!-- Alamat KTP -->
							<div class="col-12">
								<label class="form-label">Alamat KTP</label>
								<textarea class="form-control" rows="3">I’ve found a way to get paid for my favorite hobby, and do so while following my dream of traveling the world.</textarea>
							</div>

							<!-- Education -->
							<div class="col-12">
								<label class="form-label">Kebutuhan Khusus</label> <br> 
								<span class="text-danger">* boleh lebih dari 1</span> <br>
								<div class="col-lg-8">
									<div class="d-flex">
									<div class="form-custom checkbox-bg-light me-4">
										<input type="checkbox" class="custom-control-input" name="kebutuhan_khusus[]" value="Tunanetra">
										<label class="custom-control-label">Tunanetra</label>
									</div>
									</div>
									<div class="d-flex">
										<div class="form-custom checkbox-bg-light me-4">
											<input type="checkbox" class="custom-control-input" name="kebutuhan_khusus[]" value="Kekurangan secara fisik / mental">
											<label class="custom-control-label">Kekurangan secara fisik / mental</label>
										</div>
									</div>
									<div class="d-flex">
										<div class="form-custom checkbox-bg-light me-4">
											<input type="checkbox" class="custom-control-input" name="kebutuhan_khusus[]" value="Pengungsi">
											<label class="custom-control-label">Pengungsi</label>
										</div>
									</div>
									<div class="d-flex">
										<div class="form-custom checkbox-bg-light me-4">
											<input type="checkbox" class="custom-control-input" name="kebutuhan_khusus[]" value="Tenaga migran">
											<label class="custom-control-label">Tenaga migran</label>
										</div>
									</div>
									<div class="d-flex">
										<div class="form-custom checkbox-bg-light me-4">
											<input type="checkbox" class="custom-control-input" name="kebutuhan_khusus[]" value="Daerah konflik">
											<label class="custom-control-label">Daerah konflik</label>
										</div>
									</div>
									<div class="d-flex">
										<div class="form-custom checkbox-bg-light me-4">
											<input type="checkbox" class="custom-control-input" name="kebutuhan_khusus[]" value="Menghidupi adik yang cacat">
											<label class="custom-control-label">Menghidupi adik yang cacat</label>
										</div>
									</div>
								</div>
							</div>

							<!-- Save button -->
							<div class="d-sm-flex justify-content-end">
								<button type="button" class="btn btn-primary mb-0">Simpan</button>
							</div>
						</form>
					</div>
					<!-- Card body END -->
				</div>
				<!-- Edit profile END -->
    </div>
</x-app-layout>