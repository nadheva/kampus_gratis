<x-app-layout>

  <div class="col-xl-9">
    <!-- Card START -->
    <div class="card border rounded-3">
        <!-- Card header START -->
        <div class="card-header border-bottom">
            <h3 class="mb-0">Edit Prestasi {{ $prestasi->jenis }}</h3>
        </div>
        <!-- Card header END -->

        <!-- Card body START -->
        <div class="card-body">
          <form role="form text-left" action="{{url('data-prestasi', $prestasi->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
            <label for="exampleFormControlSelect1">Judul</label>
            <input type="text" class="form-control" name="judul" value="{{ $prestasi->judul }}" required>
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
            <label for="exampleFormControlSelect1">Penulis</label>
            <input type="text" class="form-control" name="penulis" value="{{ $prestasi->penulis }}" required>
            <input type="hidden" class="form-control" name="status" value="{{ $prestasi->status }}" required>
            </div>
            <div class="mb-3">
            <label for="exampleFormControlSelect1">Gambar</label>
            <input type="file" class="form-control" name="gambar" value="{{ $prestasi->gambar }}" required>
            </div>
            <div class="mb-3">
            <label for="exampleFormControlSelect1">Isi</label>
            <textarea class="form-control" aria-label="With textarea" name="isi" rows="4" required>{{ $prestasi->isi }}</textarea>
            </div>
            <div class="text-end">
            <a href="javascript:history.back()" class="btn bg-gradient-danger"><i class="ni ni-bold-left"></i>&nbsp;&nbsp;Batal</a>
            <button type="submit" class="btn bg-gradient-dark"><i class="fas fa-plus"></i>&nbsp;&nbsp;Edit</button>
            </div>
          </form>
        </div>
        <!-- Card body START -->
    </div>
    <!-- Card END -->
  </div>

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
  
