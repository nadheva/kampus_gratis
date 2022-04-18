@extends('../../layouts/app')
@section('title', 'Detail Banner')
@section('content')
    <div class="page-content-wrapper border js-choice">

        <!-- Title -->
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">@yield('title')</h1>
                <div class="row">
                    <div class="col">
                        <a href="{{ route('banner.edit', $banner->id) }}" class="btn btn-sm btn-primary mb-0">Edit
                            Banner</a>
                    </div>
                    <div class="col">
                        <form id="form-delete" action="{{ route('banner.destroy', $banner->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger mb-0">Hapus Banner</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">

            <!-- Course information START -->
            <div class="col-xxl-6">
                <div class="card bg-transparent border rounded-3 h-100">

                    <!-- Catd header -->
                    <div class="card-header bg-light border-bottom">
                        <h5 class="card-header-title">{{ $banner->heading }}</h5>
                    </div>

                    <!-- Card body START -->
                    <div class="card-body">

                        <!-- Course image and info START -->
                        <div class="row g-4">
                            <!-- Course image -->
                            <div class="col-md-12">
                                <img src="{{ url($banner->gambar) }}" class="rounded" alt="">
                            </div>
                        </div>
                        <!-- Course image and info END -->

                        <div class="mt-3">
                            <span>Oleh: Admin pada: {{ $banner->created_at->diffForHumans() }}</span>
                        </div>
                        <div class="mt-2">
                            <p>{{ $banner->deskripsi }}</p>
                        </div>
                    </div>
                    <!-- Card body END -->
                </div>
            </div>
            <!-- Course information END -->
        </div>
    @stop
