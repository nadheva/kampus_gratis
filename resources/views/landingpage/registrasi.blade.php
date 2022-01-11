<x-guest-layout>
    <!-- =======================
Main part START -->
<section>
	<div class="container">
		<div class="row g-5 justify-content-between">
			<!-- Admission form START -->
			<div class="col-md-8 mx-auto">
				<!-- Title -->
				<h2 class="mb-3">Daftar Kampus Gratis</h2>
				<p>You can apply online by filling up below form or <a href="#">Download a pdf</a> and submit. Any question related admission process, please contact our admission office at <a href="#">+123 456 789</a> or <a href="#">example@email.com</a>.</p>
				<p class="mb-1">Before you proceed with the form please read below topics:</p>
				<ul class="ps-3">
					<li>Kolom yang memiliki tanda <span class="text-danger">*</span> merupakan kolom wajib untuk diisi</li>
				</ul>
				<!-- Form START -->
				<form class="row g-3" action="/post_registrasi" method="POST">
					@csrf
					<h5 class="mb-0">Data Diri</h5>

					<!-- First name -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Nama depan <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="nama_depan">
							</div>
						</div>
					</div>

					<!-- Middle name -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Nama tengah <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="nama_tengah">
							</div>
						</div>
					</div>

					<!-- Last name -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Nama akhir <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="nama_akhir">
							</div>
						</div>
					</div>

					<!-- NIK -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">NIK <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="nik">
							</div>
						</div>
					</div>

					<!-- Email -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Email <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="email" class="form-control" name="email">
							</div>
						</div>
					</div>

                    <!-- Program Studi -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Program Studi / Jurusan</h6>
							</div>
						
							<div class="col-lg-8">
								<div class="row g-2 g-sm-4">
									<div class="col-12">
										<select class="form-select js-choice z-index-9 border-0 bg-light" aria-label=".form-select-sm" name="prodi">
											<option value="">Prodi</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
											<option>11</option>
											<option>12</option>
											<option>13</option>
											<option>14</option>
											<option>15</option>
											<option>16</option>
											<option>17</option>
											<option>18</option>
											<option>19</option>
											<option>20</option>
											<option>21</option>
											<option>22</option>
											<option>23</option>
											<option>24</option>
											<option>25</option>
											<option>26</option>
											<option>27</option>
											<option>28</option>
											<option>29</option>
											<option>30</option>
											<option>31</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>

                    <!-- Tahun Ajar -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Tahun Ajar <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="tahun_ajar" disabled value="TA.2022-2">
							</div>
						</div>
					</div>

                    <!-- Semester -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Semester <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="semester" disabled value="TA.2022-2">
							</div>
						</div>
					</div>

                    <!-- Alamat domisili -->
					<div class="col-12">
						<div class="row g-xl-0">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Alamat domisili <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<textarea class="form-control" rows="3" placeholder="" name="alamat_domisili"></textarea>
							</div>
						</div>
					</div>

                    <!-- Alamat ktp -->
					<div class="col-12">
						<div class="row g-xl-0">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Alamat sesuai KTP <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<textarea class="form-control" rows="3" placeholder="" name="alamat_ktp"></textarea>
							</div>
						</div>
					</div>

                    <!-- No HP -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">No HP <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="no_hp">
							</div>
						</div>
					</div>

                    <!-- Tempat Lahir -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Tempat Lahir <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="tempat_lahir">
							</div>
						</div>
					</div>

                    <!-- Tanggal Lahir -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Tanggal Lahir <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="date" class="form-control" name="tgl_lahir">
							</div>
						</div>
					</div>
                    {{-- <div class="col-12">
                        <div class="row g-xl-0 align-items-center">
                            <div class="col-lg-4">
                                <h6 class="mb-lg-0">Tanggal Lahir</h6>
                            </div>
                        
                            <div class="col-lg-8">
                                <div class="row g-2 g-sm-4">
                                    <div class="col-4">
                                        <select class="form-select js-choice z-index-9 border-0 bg-light" aria-label=".form-select-sm">
                                            <option value="">Date</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                            <option>13</option>
                                            <option>14</option>
                                            <option>15</option>
                                            <option>16</option>
                                            <option>17</option>
                                            <option>18</option>
                                            <option>19</option>
                                            <option>20</option>
                                            <option>21</option>
                                            <option>22</option>
                                            <option>23</option>
                                            <option>24</option>
                                            <option>25</option>
                                            <option>26</option>
                                            <option>27</option>
                                            <option>28</option>
                                            <option>29</option>
                                            <option>30</option>
                                            <option>31</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <select class="form-select js-choice z-index-9 border-0 bg-light" aria-label=".form-select-sm">
                                            <option value="">Month</option>
                                            <option>Jan</option>
                                            <option>Feb</option>
                                            <option>Mar</option>
                                            <option>Apr</option>
                                            <option>Jun</option>
                                            <option>Jul</option>
                                            <option>Aug</option>
                                            <option>Sep</option>
                                            <option>Oct</option>
                                            <option>Nov</option>
                                            <option>Dec</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <select class="form-select js-choice z-index-9 border-0 bg-light" aria-label=".form-select-sm">
                                            <option value="">Year</option>
                                            <option>1990</option>
                                            <option>1991</option>
                                            <option>1992</option>
                                            <option>1993</option>
                                            <option>1994</option>
                                            <option>1995</option>
                                            <option>1996</option>
                                            <option>1997</option>
                                            <option>1998</option>
                                            <option>1999</option>
                                            <option>2000</option>
                                            <option>2001</option>
                                            <option>2002</option>
                                            <option>2003</option>
                                            <option>2004</option>
                                            <option>2005</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

					<!-- Gender -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Jenis Kelamin <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
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
						</div>
					</div>

					<!-- Divider -->
					<hr class="my-5">

					<!-- Data Keluarga -->
					<h5 class="mt-0">Data Keluarga</h5>
					
					<!-- Tinggal dengan siapa -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Tinggal dengan siapa <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="tinggal">
							</div>
						</div>
					</div>

					<!-- Relation with applicant -->
					{{-- <div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Relation with applicant <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="relation">
							</div>
						</div>
					</div> --}}

					<!-- Yang Membiayai -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Yang Membiayai <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="pembiaya">
							</div>
						</div>
					</div>

					<!-- Nama Ayah -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Nama Ayah (beri tanda Alm bila sudah tiada)<span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="nama_ayah">
							</div>
						</div>
					</div>

                    <!-- Nama Ibu -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Nama Ibu (beri tanda Alm bila sudah tiada)<span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="nama_ibu">
							</div>
						</div>
					</div>

                    <!-- Pekerjaan Ayah -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Pekerjaan Ayah <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="kerja_ayah">
							</div>
						</div>
					</div>

                    <!-- Penghasilan Ayah -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Penghasilan Ayah <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="penghasilan_ayah">
							</div>
						</div>
					</div>

                    <!-- Pekerjaan Ibu -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Pekerjaan Ibu <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="kerja_ibu">
							</div>
						</div>
					</div>

                    <!-- Penghasilan Ibu -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Penghasilan Ibu <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="penghasilan_ibu">
							</div>
						</div>
					</div>

					<!-- Pekerjaan diri sendiri -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Pekerjaan diri sendiri <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="pekerjaan">
							</div>
						</div>
					</div>

                    <!-- Penghasilan diri sendiri -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Penghasilan diri sendiri per bulan <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="penghasilan">
							</div>
						</div>
					</div>

					<!-- Divider -->
					<hr class="my-5">

					<!-- Dokumen yang diperlukan -->
					<h5 class="mt-0">Dokumen yang diperlukan</h5>

					<!-- Pakta Integritas -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Pakta Integritas <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="file" class="form-control" name="pakta_integritas">
							</div>
						</div>
					</div>  

                    <!-- Scan KTP -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Scan KTP <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="file" class="form-control" name="scan_ktp">
							</div>
						</div>
					</div>

                    <!-- Scan Kartu Keluarga -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Scan Kartu Keluarga <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="file" class="form-control" name="scan_kk">
							</div>
						</div>
					</div>

                    <!-- Ijazah Terbaru -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Ijazah Terbaru <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="file" class="form-control" name="scan_ijazah">
							</div>
						</div>
					</div>

                    <!-- Pas Foto -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Pas Foto 4 x 6 <span class="text-danger">*</span></h6>
								<p class="mb-lg-0">Background warna merah </p>
							</div>
							<div class="col-lg-8">
								<input type="file" class="form-control" name="pas_foto">
							</div>
						</div>
					</div>

                    <!-- Transkip Nilai -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Transkip Nilai / KHS </h6>
								<p class="mb-lg-0">Bila telah kuliah di tempat lain </p>
							</div>
							<div class="col-lg-8">
								<input type="file" class="form-control" name="transkip">
							</div>
						</div>
					</div>

                    <!-- Surat Rekomendasi -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Surat Rekomendasi </h6>
								<p class="mb-lg-0">Didapatkan dari kampus asal </p>
							</div>
							<div class="col-lg-8">
								<input type="file" class="form-control" name="surat_rekomendasi">
							</div>
						</div>
					</div>

					<!-- Divider -->
					<hr class="my-5">

					<!-- Program Belajar Kampus Gratis -->
					<h5 class="mt-0">Program Belajar Kampus Gratis</h5>

					<!-- Program -->
                    <div class="col-lg-4">
                        <h6 class="mb-lg-0">Pilih Program </h6>
                    </div>
					<div class="col-lg-8">
                        <div class="d-flex">
                            <div class="form-check radio-bg-light me-4">
                                <input class="form-check-input" type="radio" name="program" value="D1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    D1
                                </label>
                            </div>
                            <div class="form-check radio-bg-light me-4">
                                <input class="form-check-input" type="radio" name="program" value="S1">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    S1
                                </label>
                            </div>
                            <div class="form-check radio-bg-light">
                                <input class="form-check-input" type="radio" name="program" value="Kursus">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Kursus
                                </label>
                            </div>
                        </div>
                    </div>

					<!-- Button -->
					<div class="col-12 text-sm-end">
						<button class="btn btn-primary mb-0">Daftar</button>
					</div>
				</form>
				<!-- Form END -->
			</div>
			<!-- Admission form END -->	
		</div>
	</div>
</section>
<!-- =======================
Main part END -->
</x-guest-layout>