@extends('../../layouts/app')
@section('title', 'Tambah Guru besar')
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
      <textarea class="form-control" aria-label="With textarea" name="deskripsi" rows="4" required></textarea>
    </div>
    <div class="text-end">
      <a href="{{ route('guru-besar.index') }}" class="btn btn-outline-secondary"><i class="fas fa-chevron-left"></i> Batal</a>
      <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</button>
    </div>
  </form>
</div>
@stop
