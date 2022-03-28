@extends('../../layouts/app')
@section('title', 'Edit Banner')
@section('content')
<div class="page-content-wrapper border js-choice">

  <!-- Title -->
  <div class="row mb-3">
    <div class="col-12 d-sm-flex justify-content-between align-items-center">
      <h1 class="h3 mb-2 mb-sm-0">@yield('title')</h1>
    </div>
  </div>

  <form role="form text-left" action="{{route('banner.update', $banner->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="exampleFormControlSelect1">Heading</label>
      <input type="text" class="form-control" value="{{$banner->heading}}" name="heading" placeholder="Masukkan Judul" required>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlSelect1">Gambar</label>
      <input type="file" class="form-control" name="gambar" value="{{$banner->gambar}}">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlSelect1">Deskripsi</label>
      <textarea class="form-control" aria-label="With textarea" name="deskripsi" rows="4" required>{{$banner->deskripsi}}</textarea>
    </div>
    <div class="text-end">
      <a href="{{ route('banner.index') }}" class="btn btn-outline-secondary"><i class="fas fa-chevron-left"></i> Batal</a>
      <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Simpan</button>
    </div>
  </form>
</div>
@stop
