<x-app-layout>
    <!-- Main content START -->
    <div class="col-xl-9">
        <!-- Edit profile START -->
				<div class="card border rounded-3">
					<!-- Card header -->
					<div class="card-header border-bottom">
						<h3 class="card-header-title mb-0">Data Keluarga</h3>
					</div>
					<!-- Card body START -->
					<div class="card-body">
						<!-- Form -->
						<form class="row g-4">
							<!-- Tinggal Dengan Siapa -->
							<div class="col-md-6">
								<label class="form-label">Tinggal Dengan Siapa</label>
								<div class="input-group">
									<input type="text" name="tinggal" class="form-control" value="loristev">
								</div>
							</div>

							<!-- Yang Membiayai -->
							<div class="col-md-6">
								<label class="form-label">Yang Membiayai</label>
								<input class="form-control" name="pembiaya" type="text" value="example@gmail.com"  placeholder="Email">
							</div>

							<!-- Nama Ayah -->
							<div class="col-md-6">
								<label class="form-label">Nama Ayah</label>
								<input type="text" name="nama_ayah" class="form-control" value="1234567890" placeholder="Phone number">
							</div>

							<!-- Nama Ibu -->
							<div class="col-md-6">
								<label class="form-label">Nama Ibu</label>
								<input class="form-control" name="nama_ibu" type="email" value="California">
							</div>

                            <!-- Pekerjaan Ayah -->
							<div class="col-md-6">
								<label class="form-label">Pekerjaan Ayah</label>
								<input type="text" name="kerja_ayah" class="form-control" value="1234567890" placeholder="Phone number">
							</div>

							<!-- Pekerjaan Ibu -->
							<div class="col-md-6">
								<label class="form-label">Pekerjaan Ibu</label>
								<input class="form-control" name="kerja_ibu" type="email" value="California">
							</div>

                            <!-- Penghasilan Ayah -->
							<div class="col-md-6">
								<label class="form-label">Penghasilan Ayah per Bulan</label>
								<input type="text" name="penghasilan_ayah" class="form-control" value="1234567890" placeholder="Phone number">
							</div>

							<!-- Penghasilan Ibu -->
							<div class="col-md-6">
								<label class="form-label">Penghasilan Ibu per Bulan</label>
								<input class="form-control" name="penghasilan_ibu" type="email" value="California">
							</div>

							<!-- Pekerjaan Pribadi -->
							<div class="col-md-12">
								<label class="form-label">Pekerjaan Pribadi</label>
								<input class="form-control" name="pekerjaan" type="email" value="California">
							</div>

							<!-- Penghasilan Pribadi -->
							<div class="col-md-12">
								<label class="form-label">Penghasilan Pribadi per Bulan</label>
								<input class="form-control" name="penghasilan" type="email" value="California">
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