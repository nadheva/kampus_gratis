@extends('../../layouts/app')
@section('title', 'Tambah Guru besar')
@section('css')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@stop
@section('content')
<div class="page-content-wrapper border js-choice">

  <!-- Title -->
  <div class="row mb-3">
    <div class="col-12 d-sm-flex justify-content-between align-items-center">
      <h1 class="h3 mb-2 mb-sm-0">@yield('title')</h1>
    </div>
  </div>

  <form role="form text-left" action="{{route('guru-besar.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="exampleFormControlSelect1">Nama</label>
      <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlSelect1">Lulusan</label>
      <input type="text" class="form-control" name="lulusan" placeholder="Masukkan Lulusan" required>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlSelect1">Pekerjaan</label>
      <input type="text" class="form-control" name="pekerjaan" placeholder="Masukkan Pekerjaan" required>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlSelect1">Foto</label>
      <input type="file" class="form-control" name="foto" required>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlSelect1">Deskripsi</label>
                                <div id="editor">
                                </div>
                                <input type="hidden" name="deskripsi" id="deskripsi">
    </div>
    <div class="text-end">
      <a href="{{ route('guru-besar.index') }}" class="btn btn-outline-secondary"><i class="fas fa-chevron-left"></i> Batal</a>
      <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</button>
    </div>
  </form>
</div>
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
