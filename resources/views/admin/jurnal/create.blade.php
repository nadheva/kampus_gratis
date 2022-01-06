<x-app-layout>

  <div class="col-xl-9">
    <!-- Card START -->
    <div class="card border rounded-3">
        <!-- Card header START -->
        <div class="card-header border-bottom">
            <h3 class="mb-0">Tambah Data</h3>
        </div>
        <!-- Card header END -->

        <!-- Card body START -->
        <div class="card-body">
          <form role="form text-left" action="{{route('data-jurnal.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlSelect1">Judul</label>
                <input type="text" class="form-control" name="judul" >
              </div>
              <div class="mb-3">
                  <label for="exampleFormControlSelect1">Abstrak</label>
                  <input type="text" class="form-control" name="abstrak">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlSelect1">Isi</label>
                  <textarea class="form-control" aria-label="With textarea" name="isi" rows="4"></textarea>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlSelect1">Penulis</label>
                  <input type="text" class="form-control" name="penulis" >
                </div>
              <div class="mb-3">
                <label for="exampleFormControlSelect1">Gambar</label>
                <input type="file" class="form-control" name="gambar" >
              </div>
              <div class="mb-3">
                  <label for="exampleFormControlSelect1">File</label>
                  <input type="file" class="form-control" name="file" >
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
