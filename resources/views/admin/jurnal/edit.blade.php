<x-app-layout>
    @section('title', 'Jurnal')
    @section('css')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    @stop
    @section('content')
        <div class="page-content-wrapper border js-choice">
            <div class="col-xl-12">
                <!-- Card START -->
                <div class="card border rounded-3">
                    <!-- Card header START -->
                    <div class="card-header border-bottom">
                        <h3 class="mb-0">Edit Jurnal</h3>
                    </div>
                    <!-- Card header END -->

                    <!-- Card body START -->
                    <div class="card-body">
                        <form role="form text-left" action="{{ route('data-jurnal.update', $jurnal->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id">
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">Judul</label>
                                <input type="text" class="form-control" name="judul" value="{{ $jurnal->judul }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">Abstrak</label>
                                <input type="text" class="form-control" name="abstrak" value="{{ $jurnal->abstrak }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">Isi</label>
                                <div id="editor">
                                </div>
                                <input type="hidden" name="isi" id="isi">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">Penulis</label>
                                <input type="text" class="form-control" name="penulis" value="{{ $jurnal->penulis }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">Gambar</label>
                                <input type="file" class="form-control" name="gambar" value="{{ $jurnal->gambar }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">File</label>
                                <input type="file" class="form-control" name="file" value="{{ $jurnal->file }}">
                            </div>

                            <div class="text-end">
                                <a href="javascript:history.back()" class="btn btn-outline-secondary"><i class="fas fa-chevron-left"></i>&nbsp;&nbsp;Batal</a>
                                <button id="btn-submit" class="btn btn-primary"><i class="fas fa-check"></i>&nbsp;&nbsp;Simpan</button>
                            </div>
                        </form>
                    </div>
                    <!-- Card body START -->
                </div>
                <!-- Card END -->
            </div>
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
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        var toolbarOptions = [
            [{ 'font': [] }],
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
            ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
            [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
            ['blockquote', 'code-block'],
            [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
            [{ 'align': [] }],
              // custom button values
            [{ 'direction': 'rtl' }],                         // text direction

            [ 'link', 'image', 'video', 'formula' ],          // add's image support

            ['clean']                                         // remove formatting button
        ];

        var quill = new Quill('#editor', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
        });

        document.addEventListener('DOMContentLoaded', function () {
            var isi = `{!! $jurnal->isi !!}`;
            quill.root.innerHTML = isi;
        });

        document.querySelector('#btn-submit').addEventListener('click', function() {
        document.querySelector('#isi').value = quill.root.innerHTML;
        document.querySelector('form').submit();
        });

    </script>
    @stop
</x-app-layout>
