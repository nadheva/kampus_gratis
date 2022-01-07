<x-app-layout>
  <div class="col-xl-9">
  <div class="card">
    <div class="card-header d-flex pb-0 p-3">
      <h6 class="my-auto">Tambah Alumni</h6>
      <div class="nav-wrapper position-relative ms-auto w-50">
        <ul class="nav nav-pills nav-fill p-1" role="tablist">
          <li class="nav-item">
            <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#cam1" role="tab" aria-controls="cam1" aria-selected="true">
              Formal
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam2" role="tab" aria-controls="cam2" aria-selected="false">
              Project
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam3" role="tab" aria-controls="cam3" aria-selected="false">
              Kursus
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="card-body p-3 mt-2">
      <div class="tab-content" id="v-pills-tabContent">
        {{-- <div class="" style="background-image: url('../../assets/img/bg-smart-home-1.jpg'); background-size:cover;"> --}}
        <div class="card-body tab-pane fade show position-relative active  border-radius-lg" id="cam1" role="tabpanel" aria-labelledby="cam1">
          <form role="form text-left" action="{{route('alumni.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="program" value="formal">
            <div class="mb-3">
              <label for="exampleFormControlSelect1">Nama</label>
              <input type="text" class="form-control" name="nama" placeholder="Masukkan nama" required>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlSelect1">Foto</label>
              <input type="file" class="form-control" name="foto" required>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlSelect1">Program Studi</label>
              <select class="form-control" name="program_studi" required>
                <option value="" selected>Silahkan pilih</option>
                <option value="credit">Credit</option>
                <option value="sales">Sales</option>
                <option value="collection">Collection</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlSelect1">Lulusan</label>
              <input type="number" class="form-control" name="lulusan" placeholder="Masukkan lulusan" required>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlSelect1">Deskripsi</label>
              <textarea class="form-control" aria-label="With textarea" name="deskripsi" rows="4" required></textarea>
            </div>
            <div class="text-center">
              <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Tambah</button>
            </div>
          </form>
        </div>

        <div class="card-body tab-pane fade position-relative  border-radius-lg" id="cam2" role="tabpanel" aria-labelledby="cam2">
          <form role="form text-left" action="{{route('alumni.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="program" value="project">
            <div class="mb-3">
              <label for="exampleFormControlSelect1">Nama</label>
              <input type="text" class="form-control" name="nama" placeholder="Masukkan nama" required>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlSelect1">Foto</label>
              <input type="file" class="form-control" name="foto" required>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlSelect1">Lulusan</label>
              <input type="number" class="form-control" name="lulusan" placeholder="Masukkan lulusan" required>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlSelect1">Deskripsi</label>
              <textarea class="form-control" aria-label="With textarea" name="deskripsi" rows="4" required></textarea>
            </div>
            <div class="text-center">
              <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Tambah</button>
            </div>
          </form>
        </div>
        <div class="card-body tab-pane fade position-relative  border-radius-lg" id="cam3" role="tabpanel" aria-labelledby="cam3">
          <form role="form text-left" action="{{route('alumni.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="program" value="kursus">
            <div class="mb-3">
              <label for="exampleFormControlSelect1">Nama</label>
              <input type="text" class="form-control" name="nama" placeholder="Masukkan nama" required>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlSelect1">Foto</label>
              <input type="file" class="form-control" name="foto" required>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlSelect1">Lulusan</label>
              <input type="number" class="form-control" name="lulusan" placeholder="Masukkan lulusan" required>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlSelect1">Deskripsi</label>
              <textarea class="form-control" aria-label="With textarea" name="deskripsi" rows="4" required></textarea>
            </div>
            <div class="text-center">
              <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</x-app-layout>