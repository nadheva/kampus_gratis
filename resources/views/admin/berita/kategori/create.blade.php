<x-app-layout>
    @section('title', 'Berita')
    @section('content')
        <div class="page-content-wrapper border js-choice">
            <div class="col-xl-12">
                <!-- Card START -->
                <div class="card border rounded-3">
                    <!-- Card header START -->
                    <div class="card-header border-bottom">
                        <h3 class="mb-0">Tambah Kategori Berita</h3>
                    </div>
                    <!-- Card header END -->

                    <!-- Card body START -->
                    <div class="card-body">
                        <form role="form text-left" action="{{ route('berita-category.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">Nama Kategori</label>
                                <input type="text" class="mt-2 form-control" name="name" id="name"
                                    placeholder="Masukkan Nama Kategori" required>
                            </div>
                            <div class="text-end">
                                <a href="javascript:history.back()" class="btn btn-outline-secondary"><i
                                        class="fas fa-chevron-left"></i>&nbsp;&nbsp;Batal</a>
                                <button id="btn-submit" class="btn btn-primary"><i
                                        class="fas fa-plus"></i>&nbsp;&nbsp;Buat</button>
                            </div>
                        </form>
                    </div>
                    <!-- Card body START -->
                </div>
            </div>
        </div>
        <!-- Card END -->
    @stop
</x-app-layout>
