<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="row mb-1">
          <div class="col-3 col-md-2 col-lg-1">
            <button class="btn btn-block btn-primary btn-sm">
              <a href="{{ route('likuit.create') }}" class="text-white font-semibold hover:bg-blue-600">New</a>
            </button>
          </div>
        </div>
        {{-- <x-content.sg.likuiditas.status.card.v1/> --}}
        <x-content.sg.likuiditas.status.card.v2/>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>