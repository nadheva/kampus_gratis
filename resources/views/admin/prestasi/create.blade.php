<x-app-layout>
  
	<div class="col-xl-9">
	  <!-- Card START -->
	  <div class="card border rounded-3">
		  <!-- Card header START -->
		  <div class="card-header border-bottom">
			  <h3 class="mb-0">Tambah Data Prestasi</h3>
		  </div>
		  <!-- Card header END -->
  
		  <!-- Card body START -->
		  <div class="card-body">
			<form role="form text-left" action="{{route('data-prestasi.store')}}" method="POST" enctype="multipart/form-data">
			  @csrf
			  <div class="mb-3">
				<label for="exampleFormControlSelect1">Judul</label>
				<input type="text" class="form-control" name="judul" placeholder="Masukkan Judul" required>
			  </div>
			  <!-- Course category -->
			  <div class="mb-3">
				<div class="col-md-12">
					<label class="form-label">Jenis</label>
					<select class="form-select js-choice border-0 z-index-9 bg-transparent" name="jenis" aria-label=".form-select-sm" data-search-enabled="false" data-remove-item-button="true">
						<option value="Mahasiswa">Mahasiswa</option>
						<option value="Dosen">Dosen</option>
						<option value="Lembaga">Lembaga</option>
					</select>
				  </div>
			  </div>
			  <div class="mb-3">
				<label for="exampleFormControlSelect1">Tahun</label>
				<input type="number" class="form-control" name="tahun" placeholder="Masukkan Tahun" required>
			  </div>
			  <div class="mb-3">
				<label for="exampleFormControlSelect1">Penulis</label>
				<input type="text" class="form-control" name="penulis" placeholder="Nama Penulis" required>
				<input type="hidden" class="form-control" name="status" value="live" required>
			  </div>
			  <div class="mb-3">
				<label for="exampleFormControlSelect1">Gambar</label>
				<input type="file" class="form-control" name="gambar" required>
			  </div>
			  <div class="mb-3">
				  <!-- Course description -->
				  {{-- <div class="col-12">
					<label class="form-label">Isi</label>
					<!-- Editor toolbar -->
					<div class="bg-light border border-bottom-0 rounded-top py-3" id="quilltoolbar">
						<span class="ql-formats">
							<select class="ql-size"></select>
						</span>
						<span class="ql-formats">
							<button class="ql-bold"></button>
							<button class="ql-italic"></button>
							<button class="ql-underline"></button>
							<button class="ql-strike"></button>
						</span>
						<span class="ql-formats">
							<select class="ql-color"></select>
							<select class="ql-background"></select>
						</span>
						<span class="ql-formats">
							<button class="ql-code-block"></button>
						</span>
						<span class="ql-formats">
							<button class="ql-list" value="ordered"></button>
							<button class="ql-list" value="bullet"></button>
							<button class="ql-indent" value="-1"></button>
							<button class="ql-indent" value="+1"></button>
						</span>
						<span class="ql-formats">
							<button class="ql-link"></button>
							<button class="ql-image"></button>
						</span>
						<span class="ql-formats">
							<button class="ql-clean"></button>
						</span>
					</div>

					<!-- Main toolbar -->
					<div class="bg-body border rounded-bottom h-400px overflow-hidden" id="quilleditor">
						<textarea name="isi" id="">asdjsdfdsnjkdfsnjk</textarea>
					</div>
				</div> --}}
				<label for="exampleFormControlSelect1">Isi</label>
				<textarea class="form-control" aria-label="With textarea" name="isi" rows="4" required></textarea>
			  </div>
			  <div class="text-end">
				<a href="javascript:history.back()" class="btn bg-gradient-danger"><i class="ni ni-bold-left"></i>&nbsp;&nbsp;Batal</a>
				<button type="submit" class="btn bg-gradient-dark"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah</button>
			  </div>
			</form>
		  </div>
		  <!-- Card body START -->
	  </div>
	</div>
	  <!-- Card END -->
  
	  {{-- @push('scripts')
	  <script>
		tinymce.init({
		  selector: 'textarea',
		  plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
		  toolbar_mode: 'floating',
	   });
	  </script>
	  @endpush --}}
	  
  </x-app-layout>
  