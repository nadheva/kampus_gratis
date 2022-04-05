<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>

<body>
    @foreach ($berita as $item)
        <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card">
                <div class="overflow-hidden rounded-3">
                    <img src="{{ $item->gambar }}" class="card-img" alt="course image">
                    <!-- Overlay -->
                    <div class="bg-overlay bg-dark opacity-4"></div>
                    <div class="card-img-overlay d-flex align-items-start p-3">
                        <!-- badge -->
                        <a href="#" class="badge bg-danger text-white">
                            ##</a>
                    </div>
                </div>

                <!-- Card body -->
                <div class="card-body">
                    <!-- Title -->
                    <h5 class="card-title">
                        <a href="{{ route('detail_berita', $item->category->slug) }}">{{ $item->judul }}</a>
                    </h5>
                    <p class="text-truncate-2">{{ $item->isi }}</p>
                    <!-- Info -->
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-0"><a href="#">{{ $item->penulis }}</a></h6>
                        <span class="small">{{ $item->created_at->diffForHumans() }}</span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</body>

</html>
