<x-app-layout>

  <div class="col-xl-9">
    <!-- Card START -->
    <div class="card border rounded-3">
        <!-- Card header START -->
        <div class="card-header border-bottom">
            <h3 class="mb-0">Edit Penelitian</h3>
        </div>
        <!-- Card header END -->

        <!-- Card body START -->
        <div class="card-body">
          <form role="form text-left" action="{{url('data-faq', $faq->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
            <label for="exampleFormControlSelect1">Pertanyaan</label>
            <input type="text" class="form-control" name="ask" value="{{ $faq->ask }}" required>
            </div>
            <input type="hidden" class="form-control" name="status" value="{{ $faq->status }}" required>
            <div class="mb-3">
            <label for="exampleFormControlSelect1">Jawaban</label>
            <textarea class="form-control" aria-label="With textarea" name="answer" rows="4" required>{{ $faq->answer }}</textarea>
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
  
