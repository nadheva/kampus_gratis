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
                        <h3 class="mb-0">Tambah Data Jurnal</h3>
                    </div>
                    <!-- Card header END -->

                    <!-- Card body START -->
                    <div class="card-body">
                        <form id="ajskdnsakjdnsak" role="form text-left" action="{{ route('data-jurnal.store') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">Judul</label>
                                <input type="text" class="form-control" name="judul">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">Abstrak</label>
                                <input type="text" class="form-control" name="abstrak">
                            </div>


                            {{-- TEST TEXTEDITOR --}}
                            {{-- <div class="mb-3">
                                <label for="exampleFormControlSelect1">Isi</label>
                                <div class="col-12">
                                    <label class="form-label">Add description</label>
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
                                    
                                </div>
                            </div> --}}
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">Isi</label>
                                <div id="editor">
                                </div>
                                <input type="hidden" name="isi" id="isi">
                            </div>



                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">Penulis</label>
                                <input type="text" class="form-control" name="penulis">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">Gambar</label>
                                <input type="file" class="form-control" name="gambar">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">File</label>
                                <input type="file" class="form-control" name="file">
                            </div>

                            <div class="text-end">
                                <a href="javascript:history.back()" class="btn btn-outline-secondary"><i class="fas fa-chevron-left"></i>&nbsp;&nbsp;Batal</a>
                               
                                <button id="btn-submit" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah</button>
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

            document.querySelector('#btn-submit').addEventListener('click', function() {
                document.querySelector('#isi').value = quill.root.innerHTML;
                document.querySelector('form').submit();
            });

        </script>
    @stop
</x-app-layout>
