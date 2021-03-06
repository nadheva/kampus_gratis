<x-app-layout>
    @section('title', 'Penelitian')
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
                        <h3 class="mb-0">Tambah Data Penelitian</h3>
                    </div>
                    <!-- Card header END -->

                    <!-- Card body START -->
                    <div class="card-body">
                        <form role="form text-left" action="{{ route('data-penelitian.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">Judul</label>
                                <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul" required>
                            </div>
                            <div class="mb-3">
                            <label for="exampleFormControlSelect1">Isi</label>
                                <div id="editor">
                                </div>
                                <input type="hidden" name="isi" id="isi">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">Penulis</label>
                                <input type="text" class="form-control" name="penulis" placeholder="Nama Penulis"
                                    required>
                                <input type="hidden" class="form-control" name="status" value="live" required>
                            </div>
                            <div class="text-end">
                                <a href="javascript:history.back()"  class="btn btn-outline-secondary"><i class="fas fa-chevron-left"></i>&nbsp;&nbsp;Batal</a>
                                <button id="btn-submit" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah</button>
                            </div>
                        </form>
                    </div>
                    <!-- Card body START -->
                </div>
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
