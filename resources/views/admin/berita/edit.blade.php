<x-app-layout>
    @section('title', 'Berita')
    @section('content')
        <div class="col-xl-12 js-choice">
            <!-- Card START -->
            <div class="card border rounded-3">
                <!-- Card header START -->
                <div class="card-header border-bottom">
                    <h3 class="mb-0">Edit Prestasi Berita</h3>
                </div>
                <!-- Card header END -->

                <!-- Card body START -->
                <div class="card-body">
                    <form role="form text-left" action="{{ route('berita.update', $berita->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1">Judul</label>
                            <input type="text" class="form-control" name="judul" value="{{ $berita->judul }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1">Penulis</label>
                            <input type="text" class="form-control" name="penulis" value="{{ $berita->penulis }}"
                                required>
                            <input type="hidden" class="form-control" name="status" value="{{ $berita->status }}"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1">Gambar</label>
                            <input type="file" class="form-control" name="gambar" value="{{ $berita->gambar }}"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1">Isi</label>
                            <textarea class="form-control" aria-label="With textarea" name="isi" rows="4" required>{{ $berita->isi }}</textarea>
                        </div>
                        <div class="text-end">
                            <a href="javascript:history.back()" class="btn bg-gradient-danger"><i
                                    class="ni ni-bold-left"></i>&nbsp;&nbsp;Batal</a>
                            <button type="submit" class="btn bg-gradient-dark"><i
                                    class="fas fa-plus"></i>&nbsp;&nbsp;Edit</button>
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
    @stop
</x-app-layout>
