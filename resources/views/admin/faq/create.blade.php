<x-app-layout>
  
	<div class="col-xl-9">
	  <!-- Card START -->
	  <div class="card border rounded-3">
		  <!-- Card header START -->
		  <div class="card-header border-bottom">
			  <h3 class="mb-0">Tambah FAQ</h3>
		  </div>
		  <!-- Card header END -->
  
		  <!-- Card body START -->
		  <div class="card-body">
			<form role="form text-left" action="{{route('data-faq.store')}}" method="POST" enctype="multipart/form-data">
			  @csrf
			  <div class="mb-3">
				<label for="exampleFormControlSelect1">Pertanyaan</label>
				<input type="text" class="form-control" name="ask" placeholder="Masukkan Judul" required>
			  </div>
				<input type="hidden" class="form-control" name="status" value="live" required>
			  <div class="mb-3">
				<label for="exampleFormControlSelect1">Jawaban</label>
				<textarea class="form-control" aria-label="With textarea" name="answer" rows="4" required></textarea>
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
  