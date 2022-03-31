<x-app-layout>
    @section('title', 'Jurnal')
    @section('content')
        <div class="page-content-wrapper border js-choice">
            <div class="col-xl-12">
                <!-- Card START -->
                <div class="card border rounded-3">
                    <!-- Card header START -->
                    <div class="card-header border-bottom">
                        <h3 class="mb-0">Tambah Data</h3>
                    </div>
                    <!-- Card header END -->

                    <!-- Card body START -->
                    <div class="card-body">
                        <form id="ajskdnsakjdnsak" role="form text-left" action="{{ route('data-jurnal.store') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">Judul</label>
                                <input type="text" class="form-control" name="judul">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">Abstrak</label>
                                <input type="text" class="form-control" name="abstrak">
                            </div>


                            {{-- TEST TEXTEDITOR --}}
                            {{-- <div class="mb-3">
                                <label for="exampleFormControlSelect1">Isi</label>
                                <div class="col-12">
                                    <label class="form-label">Add description</label>
                                    <!-- Editor toolbar -->
                                    <div class="bg-light border border-bottom-0 rounded-top py-3" id="quilltoolbar">
                                        <span class="ql-formats">
                                            <select class="ql-size"></select>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-bold"></button>
                                            <button class="ql-italic"></button>
                                            <button class="ql-underline"></button>
                                            <button class="ql-strike"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <select class="ql-color"></select>
                                            <select class="ql-background"></select>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-code-block"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-list" value="ordered"></button>
                                            <button class="ql-list" value="bullet"></button>
                                            <button class="ql-indent" value="-1"></button>
                                            <button class="ql-indent" value="+1"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-link"></button>
                                            <button class="ql-image"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-clean"></button>
                                        </span>
                                    </div>

                                    <!-- Main toolbar -->

                                    <div class="bg-body border rounded-bottom h-400px overflow-hidden" id="quilleditor">

                                    </div>
                                    <textarea type="hidden" name="isi" id="isi">
                            </textarea>
                                </div>
                            </div> --}}
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">Isi</label>
                                <textarea class="form-control" aria-label="With textarea" name="isi" id="isi" rows="4" required></textarea>
                            </div>



                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">Penulis</label>
                                <input type="text" class="form-control" name="penulis">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">Gambar</label>
                                <input type="file" class="form-control" name="gambar">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">File</label>
                                <input type="file" class="form-control" name="file">
                            </div>

                            <div class="text-end">
                                <a href="javascript:history.back()" class="btn bg-gradient-danger"><i
                                        class="ni ni-bold-left"></i>&nbsp;&nbsp;Batal</a>
                                {{-- <div class="btn bg-gradient-dark" onclick="submit()"><i
                                        class="fas fa-plus"></i>&nbsp;&nbsp;Tambah</div> --}}
                                <button type="submit" class="btn bg-gradient-dark"><i
                                        class="fas fa-plus"></i>&nbsp;&nbsp;Tambah</button>
                            </div>
                        </form>
                    </div>
                    <!-- Card body START -->
                </div>
            </div>
        </div>
        <!-- Card END -->

        @push('scripts')
            <script>
                function submit() {
                    $('#isi').html($('#quilleditor').children().html());
                    $("#ajskdnsakjdnsak").submit();
                }
            </script>
        @endpush
    @stop
</x-app-layout>
