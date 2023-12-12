@extends('admin.admin')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Tambah Analisis</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">Data Master</li>
        <li class="breadcrumb-item">Data Peramalan</li>
        <li class="breadcrumb-item active">Tambah Analisis</li>
      </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Tambah Analisis</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{ route('peramalan.store') }}" method="POST">
                @csrf
                <label for="">Tanggal</label>
                <div class="input-group mb-3">
                    <input id="tangga_peramalan" type="text" disabled class="form-control @error('tangga_peramalan') is-invalid @enderror" name="tangga_peramalan" value="{{ Carbon\Carbon::now()->format('d-m-Y') }}" required autocomplete="tangga_peramalan" placeholder="Nama Barang">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                    </div>
                    @error('tangga_peramalan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <label for="">Range Data</label>
                <div class="input-group mb-3">
                  <input id="tanggal_awal_data" min="{{ $minDate }}" max="{{ $maxDate }}" type="month" class="form-control @error('tanggal_awal_data') is-invalid @enderror" name="tanggal_awal_data" value="{{ old('tanggal_awal_data') }}" required autocomplete="tanggal_awal_data" autofocus>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                  </div>
                  @error('tanggal_awal_data')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                    <h3 class="ml-3 mr-3">-</h3>
                  <input id="tanggal_akhir_data" min="{{ $minDate }}" max="{{ $maxDate }}" type="month" class="form-control @error('tanggal_akhir_data') is-invalid @enderror" name="tanggal_akhir_data" value="{{ old('tanggal_akhir_data') }}" required autocomplete="tanggal_akhir_data" autofocus>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                  </div>
                  @error('tanggal_akhir_data')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="row text-right">
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Hitung</button>
                  </div>
                  <!-- /.col -->
                </div>
              </form>
            </div>
            <!-- /.form-box -->
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
@endsection

@section('script')
<script>
    // Ambil elemen input untuk start date dan end date
    var startDateInput = document.getElementById('tanggal_awal_data');
    var endDateInput = document.getElementById('tanggal_akhir_data');

    // Tambahkan event listener untuk perubahan nilai pada start date
    startDateInput.addEventListener('change', function () {
        // Set nilai minimum pada end date sesuai dengan start date
        endDateInput.min = startDateInput.value;
    });
</script>
@endsection
