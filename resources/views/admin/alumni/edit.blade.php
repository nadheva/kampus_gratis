<x-app-layout>
  
    <div class="col-xl-9">
      <!-- Card START -->
      <div class="card border rounded-3">
          <!-- Card header START -->
          <div class="card-header border-bottom">
              <h3 class="mb-0">Edit Alumni</h3>
          </div>
          <!-- Card header END -->
  
          <!-- Card body START -->
          <div class="card-body">
            <form role="form text-left" action="{{route('alumni.update',$alumni->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id">
                <input type="hidden" name="program" value="{{$alumni->program}}">
                <div class="mb-3">
                  <label for="exampleFormControlSelect1">Nama</label>
                  <input type="text" class="form-control" name="nama" value="{{$alumni->nama}}">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlSelect1">Foto</label>
                  <input type="file" class="form-control" name="foto" value="{{$alumni->foto}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlSelect1">Program Studi</label>
                    <select class="form-control" name="program_studi" id="exampleFormControlSelect1">
                      <option value="{{$alumni->program_studi}}" selected>{{$alumni->program_studi}}</option>
                      <option value="credit">Credit</option>
                      <option value="sales">Sales</option>
                      <option value="collection">Collection</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlSelect1">Lulusan</label>
                    <input type="number" class="form-control" name="lulusan" value="{{$alumni->lulusan}}"
                  </div>
                <div class="mb-3">
                  <label for="exampleFormControlSelect1">Deskripsi</label>
                  <textarea class="form-control" aria-label="With textarea" name="deskripsi" rows="4">{{$alumni->deskripsi}}</textarea>
                </div>
                <div class="text-end">
                        <a href="javascript:history.back()" class="btn bg-gradient-danger"><i class="ni ni-bold-left"></i>&nbsp;&nbsp;Batal</a> 
                  <button type="submit" class="btn bg-gradient-dark"><i class="fas fa-plus"></i>&nbsp;&nbsp;Edit</button>
                </div>
              </form>
          </div>
          <!-- Card body START -->
      </div>
    </div>
      <!-- Card END -->
  
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
  