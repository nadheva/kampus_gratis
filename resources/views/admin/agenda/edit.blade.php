@extends('../../layouts/app')
@section('title', 'Edit Agenda')
@section('content')
<div class="page-content-wrapper border js-choice">

  <!-- Title -->
  <div class="row mb-3">
    <div class="col-12 d-sm-flex justify-content-between align-items-center">
      <h1 class="h3 mb-2 mb-sm-0">@yield('title')</h1>
    </div>
  </div>

  <form role="form text-left" action="{{route('agenda.update', $agenda->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="exampleFormControlSelect1">Judul</label>
      <input type="text" class="form-control" name="judul" value="{{ $agenda->judul }}" placeholder="Masukkan Judul" required>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlSelect1">Tanggal</label>
      <input type="date" class="form-control" name="tanggal" value="{{ $agenda->tanggal }}" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlSelect1">Jenis</label>
        <select class="form-control" name="jenis" id="exampleFormControlSelect1">
            <option value="" disabled>Silahkan Pilih</option>
            <option value="Kuliah Reguler">Kuliah Reguler</option>
            <option value="Bimbingan Akademik">Bimbingan Akademik</option>
            <option value="PKM-P">PKM-P</option>
            <option value="PKM-K">PKM-M</option>
            <option value="PKM-M">PKM-M</option>
            <option value="PKM-T">PKM-T</option>
            <option value="PKM-KC">PKM-KC</option>
            <option value="Tugas Akhir">Tugas Akhir</option>
            <option value="Magang">Magang</option>
            <option value="Proyek Penelitian">Proyek Penelitian</option>
        </select>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlSelect1">Gambar</label>
      <input type="file" class="form-control" name="gambar">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlSelect1">Deskripsi</label>
      <textarea class="form-control" aria-label="With textarea" name="deskripsi" rows="4" required>{{ $agenda->deskripsi }}</textarea>
    </div>
    <div class="text-end">
      <a href="{{ route('agenda.index') }}" class="btn btn-outline-secondary"><i class="fas fa-chevron-left"></i> Batal</a>
      <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Simpan</button>
    </div>
  </form>
</div>
@stop
