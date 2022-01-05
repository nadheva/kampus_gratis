<x-guest-layout>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-9 col-12 mx-auto">
          <div class="card card-body mt-4">
            <h6 class="mb-0">Edit Banner</h6>
            <hr class="horizontal dark my-3">
            <div class="card-body">
              <form role="form text-left" action="{{url('banner-update',$banner->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id">
                <div class="mb-3">
                  <label for="exampleFormControlSelect1">Heading</label>
                  <input type="text" class="form-control" name="heading" value="{{$banner->heading}}">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlSelect1">Gambar</label>
                  <input type="file" class="form-control" name="gambar" value="{{$banner->gambar}}">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlSelect1">Deskripsi</label>
                  <textarea class="form-control" aria-label="With textarea" name="deskripsi" rows="4">{{$banner->deskripsi}}</textarea>
                </div>
                <div class="text-end">
                        <a href="javascript:history.back()" class="btn bg-gradient-danger"><i class="ni ni-bold-left"></i>&nbsp;&nbsp;Batal</a>
                  <button type="submit" class="btn bg-gradient-dark"><i class="fas fa-plus"></i>&nbsp;&nbsp;Edit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </x-guest-layout>
