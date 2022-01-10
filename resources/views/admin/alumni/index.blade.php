<x-app-layout>
    <!-- Main content START -->
    <div class="col-xl-9">

        <div class="card border rounded-3">
            <!-- Card header START -->
            <div class="card-header border-bottom">
                <h3 class="mb-0">Data Alumni Kampus Gratis</h3>
            </div>
            <!-- Card header END -->

            <!-- Card body START -->
            <div class="card-body">

                <!-- Search and select START -->
                <div class="row g-3 align-items-center justify-content-between mb-4">
                    <!-- Content -->
                    <div class="col-md-8">
                        <form class="rounded position-relative">
                            <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
                        </form>
                    </div>

                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper position-relative end-0">
                          <div class="text-end ms-auto">
                            <div class="mt-2 mt-sm-0">
                                <a href="{{route('alumni.create')}}" class="btn btn-outline-primary mb-0">Tambah</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- Select option -->
                    {{-- <div class="col-md-3">
                        <!-- Short by filter -->
                        <form>
                            <select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm">
                                <option value="">Sort by</option>
                                <option>Free</option>
                                <option>Newest</option>
                                <option>Most popular</option>
                                <option>Most Viewed</option>
                            </select>
                        </form>
                    </div> --}}
                </div>
                <!-- Search and select END -->

                <!-- Course list table START -->
                <div class="table-responsive border-0">
                    <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                        <!-- Table head -->
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 rounded-start">Nama</th>
                                <th scope="col" class="border-0">Foto</th>
                                <th scope="col" class="border-0">Lulusan</th>
                                <th scope="col" class="border-0">Deskripsi</th>
                                <th scope="col" class="border-0 rounded-end">Aksi</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>
                            @foreach($alumni as $b)
                            <!-- Table item -->
                            <tr>
                                <td>{{$b->nama}}</td>
                                <td>
                                <div class="w-100px">
                                    <img src="{{ asset( $b->foto) }}"  class="rounded" alt="">
                                </div>
                                </td>
                                <td>{{$b->lulusan}}</td>
                                <td>{{$b->deskripsi}}</td>
                                <td>
                                    <a href="{{route('alumni.edit',$b->id)}}" class="btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"><i class="bi bi-play-circle me-1"></i>Edit</a>
                                    <form id="form-delete" action="{{route('alumni.destroy',$b->id)}}" method="POST"  style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0 show_confirm" data-toggle="tooltip" title='Delete'><i class="bi bi-arrow-repeat me-1"></i>Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <!-- Table body END -->
                    </table>
                </div>
                <!-- Course list table END -->

                <!-- Pagination START -->
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
                    <!-- Content -->
                    <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                    <!-- Pagination -->
                    <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                        <ul class="pagination pagination-sm pagination-primary-soft mb-0 pb-0">
                            <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                            <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Pagination END -->
            </div>
            <!-- Card body START -->
        </div>
    <!-- Main content END -->
<!-- =======================
Page content END -->
@push('scripts')
<script>
$('.show_confirm').click(function(event) {
  var form =  $(this).closest("form");
  var name = $(this).data("name");
  event.preventDefault();
  swal({
      title: `Hapus Data?`,
      text: "Jika data terhapus, data akan hilang selamanya!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      form.submit();
    }
  });
});

</script>
@endpush
</x-app-layout>