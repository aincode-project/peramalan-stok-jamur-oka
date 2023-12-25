@extends('admin.admin')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Peramalan Stok</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">Data Master</li>
        <li class="breadcrumb-item">Peramalan Stok</li>
      </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Peramalan Stok</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{ route('prediksi-stok.store', 1) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Jumlah Penjualan</label>
                        <div class="input-group mb-3">
                            @if ($id == 0)
                            <input id="jumlah_penjualan" type="number" class="form-control @error('jumlah_penjualan') is-invalid @enderror" name="jumlah_penjualan" value="{{ old('jumlah_penjualan') }}" required autocomplete="jumlah_penjualan" placeholder="Jumlah Penjualan">
                            @else
                            <input id="jumlah_penjualan" type="number" class="form-control @error('jumlah_penjualan') is-invalid @enderror" name="jumlah_penjualan" value="{{ $jumlah_penjualan }}" required autocomplete="jumlah_penjualan" placeholder="Jumlah Penjualan">
                            @endif
                            @error('jumlah_penjualan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="">Hasil Peramalan Stok Yang Dibutuhkan</label>
                        <div class="input-group mb-3">
                            @if ($id == 0)
                            <input disabled type="text" class="form-control" value="">
                            @else
                            <input disabled type="text" class="form-control" value="{{ $hasil_prediksi }}">
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row text-right">
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Hitung</button>
                  </div>
                  <!-- /.col -->
                </div>
            </form>
            <!-- /.form-box -->
            @if ($id != 0)
            <hr>
            <h5>Pehitungan Hasil Peramalan</h5>
            <p>Berdasarkan Nilai a = {{ $dataPeramalan->nilai_a }}, Nilai b = {{ $dataPeramalan->nilai_b }}. Nilai jumlah penjualan yaitu {{ $jumlah_penjualan }}, maka: <br> Y({{ $jumlah_penjualan }}) = {{ $dataPeramalan->nilai_a }} + {{ $dataPeramalan->nilai_b }} ({{ $jumlah_penjualan }}) = {{ $hasil_prediksi }}</p>
            @endif
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
@endsection
