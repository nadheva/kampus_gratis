@extends('../../layouts/app')
@section('title', 'Edit Guru besar')
@section('content')
<div class="page-content-wrapper border js-choice">

  <!-- Title -->
  <div class="row mb-3">
    <div class="col-12 d-sm-flex justify-content-between align-items-center">
      <h1 class="h3 mb-2 mb-sm-0">@yield('title')</h1>
    </div>
  </div>

  <form role="form text-left" action="{{route('guru-besar.update', $gurubesar->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="exampleFormControlSelect1">Nama</label>
      <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" value="{{ $gurubesar->nama }}" required>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlSelect1">Lulusan</label>
      <input type="text" class="form-control" name="lulusan" placeholder="Masukkan Lulusan" value="{{ $gurubesar->lulusan }}" required>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlSelect1">Pekerjaan</label>
      <input type="text" class="form-control" name="pekerjaan" placeholder="Masukkan Pekerjaan" value="{{ $gurubesar->pekerjaan }}" required>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlSelect1">Foto</label>
      <input type="file" class="form-control" name="foto">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlSelect1">Deskripsi</label>
      <textarea class="form-control" aria-label="With textarea" name="deskripsi" rows="4" required>{{$gurubesar->deskripsi}}</textarea>
    </div>
    <div class="text-end">
      <a href="{{ route('guru-besar.index') }}" class="btn btn-outline-secondary"><i class="fas fa-chevron-left"></i> Batal</a>
      <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Simpan</button>
    </div>
  </form>
</div>
@stop
