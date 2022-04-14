<x-app-layout>
    @section('title', 'Berita')
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
                        <h3 class="mb-0">Tambah Berita</h3>
                    </div>
                    <!-- Card header END -->

                    <!-- Card body START -->
                    <div class="card-body">
                        <form role="form text-left" action="{{ route('data-berita.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                                    id="judul" value="{{ old('judul') }}" placeholder="Masukkan Judul" required autofocus>
                                @error('judul')
                                    <div class="mt-3 alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="category">Kategori</label>
                                <select class="form-select " aria-label="Default select example" name="kategori_id"
                                    required>
                                    <option selected>Pilih Kategori</option>
                                    @foreach ($categories as $category)
                                        @if (old('kategori_id') == $category->id)
                                            <option value="{{ $category->id }}" selected>
                                                {{ $category->name }}
                                            </option>
                                        @else
                                            <option value="{{ $category->id }}">
                                                {{ $category->name }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="penulis">Penulis</label>
                                <input type="text" class="form-control @error('penulis') is-invalid @enderror"
                                    name="penulis" value="{{ old('penulis') }}" placeholder="Nama Penulis" required>
                                <input type="hidden" class="form-control" name="status" value="live" required>
                                @error('penulis')
                                    <div class="mt-3 alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="gambar">Gambar</label>
                                <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                    value="{{ old('gambar') }}" name="gambar" required>
                                @error('gambar')
                                    <div class="mt-3 alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="isi">Isi</label>
                                @error('isi')
                                    <div class="mt-3 alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div id="editor">
                                </div>
                                <input type="hidden" name="isi" id="isi" required>
                            </div>
                            <div class="text-end">
                                <a href="javascript:history.back()" class="btn btn-outline-secondary"><i
                                        class="fas fa-chevron-left"></i>&nbsp;&nbsp;Batal</a>
                                <button id="btn-submit" type="submit" class="btn btn-primary"><i
                                        class="fas fa-plus"></i>&nbsp;&nbsp;Unggah</button>
                            </div>
                        </form>
                    </div>
                    <!-- Card body START -->
                </div>
            </div>
        </div>
        <!-- Card END -->

        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

        <!-- Initialize Quill editor -->
        <script>
            var toolbarOptions = [
                [{
                    'font': []
                }],
                [{
                    'header': [1, 2, 3, 4, 5, 6, false]
                }],
                ['bold', 'italic', 'underline', 'strike'], // toggled buttons
                [{
                    'color': []
                }, {
                    'background': []
                }], // dropdown with defaults from theme
                ['blockquote', 'code-block'],
                [{
                    'script': 'sub'
                }, {
                    'script': 'super'
                }], // superscript/subscript
                [{
                    'list': 'ordered'
                }, {
                    'list': 'bullet'
                }],
                [{
                    'indent': '-1'
                }, {
                    'indent': '+1'
                }], // outdent/indent
                [{
                    'align': []
                }],
                // custom button values
                [{
                    'direction': 'rtl'
                }], // text direction

                ['link', 'image', 'video', 'formula'], // add's image support

                ['clean'] // remove formatting button
            ];

            var quill = new Quill('#editor', {
                modules: {
                    toolbar: toolbarOptions
                },
                theme: 'snow'
            });

            document.querySelector('#btn-submit').addEventListener('click', function() {
                document.querySelector('#isi').value = quill.root.innerHTML;
                // document.querySelector('form').submit();
            });

            document.addEventListener('DOMContentLoaded', function() {
                var isi = `{{ old('isi') }}`;
                quill.root.innerHTML = isi;
            });
        </script>
    @stop
</x-app-layout>
