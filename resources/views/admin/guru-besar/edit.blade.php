{{-- <x-guest-layout>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-9 col-12 mx-auto">
          <div class="card card-body mt-4">
            <h6 class="mb-0">Edit Guru Besar</h6>
            <hr class="horizontal dark my-3">
            <div class="card-body">
              <form role="form text-left" action="{{url('guru-besar-update',$gurubesar->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id">
                <div class="mb-3">
                  <label for="exampleFormControlSelect1">Nama</label>
                  <input type="text" class="form-control" name="nama" value="{{$gurubesar->nama}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlSelect1">Lulusan</label>
                    <input type="text" class="form-control" name="lulusan" value="{{$gurubesar->lulusan}}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlSelect1">Pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan" value="{{$gurubesar->pekerjaan}}">
                  </div>
                <div class="mb-3">
                  <label for="exampleFormControlSelect1">Foto</label>
                  <input type="file" class="form-control" name="foto" value="{{$gurubesar->foto}}">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlSelect1">Deskripsi</label>
                  <textarea class="form-control" aria-label="With textarea" name="deskripsi" rows="4">{{$gurubesar->deskripsi}}</textarea>
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
  </x-guest-layout> --}}

  <x-app-layout>

    <div class="col-xl-9">
      <!-- Card START -->
      <div class="card border rounded-3">
          <!-- Card header START -->
          <div class="card-header border-bottom">
              <h3 class="mb-0">Edit Data {{$gurubesar->nama}}</h3>
          </div>
          <!-- Card header END -->
  
          <!-- Card body START -->
          <div class="card-body">
            <form role="form text-left" action="{{url('guru-besar-update',$gurubesar->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <input type="hidden" name="id">
              <div class="mb-3">
                <label for="exampleFormControlSelect1">Nama</label>
                <input type="text" class="form-control" name="nama" value="{{$gurubesar->nama}}">
              </div>
              <div class="mb-3">
                  <label for="exampleFormControlSelect1">Lulusan</label>
                  <input type="text" class="form-control" name="lulusan" value="{{$gurubesar->lulusan}}">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlSelect1">Pekerjaan</label>
                  <input type="text" class="form-control" name="pekerjaan" value="{{$gurubesar->pekerjaan}}">
                </div>
              <div class="mb-3">
                <label for="exampleFormControlSelect1">Foto</label>
                <input type="file" class="form-control" name="foto" value="{{$gurubesar->foto}}">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlSelect1">Deskripsi</label>
                <textarea class="form-control" aria-label="With textarea" name="deskripsi" rows="4">{{$gurubesar->deskripsi}}</textarea>
              </div>
              <div class="text-end">
                      <a href="javascript:history.back()" class="btn bg-gradient-danger"><i class="ni ni-bold-left"></i>&nbsp;&nbsp;Batal</a>
                <button type="submit" class="btn bg-gradient-dark"><i class="fas fa-plus"></i>&nbsp;&nbsp;Edit</button>
              </div>
            </form>
          </div>
          <!-- Card body START -->
      </div>
      <!-- Card END -->
    </div>
  
      {{-- @push('scripts')
      <script>
        tinymce.init({
          selector: 'textarea',
          plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
          toolbar_mode: 'floating',
        });
      </script>
      @endpush --}}
      
  </x-app-layout>
    
  
