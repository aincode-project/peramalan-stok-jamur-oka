@extends('admin.admin')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Ubah Stok</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">Data Master</li>
        <li class="breadcrumb-item">Data Stok</li>
        <li class="breadcrumb-item active">Ubah Stok</li>
      </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Ubah Stok</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{ route('stok.update', $stok->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                  <input id="tanggal_stok" type="month" class="form-control @error('tanggal_stok') is-invalid @enderror" name="tanggal_stok" value="{{ Carbon\Carbon::parse($stok->tanggal_stok)->format('Y-m') }}" required autocomplete="tanggal_stok" autofocus>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                  </div>
                  @error('tanggal_stok')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="input-group mb-3">
                  <input id="nama_barang" type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" value="{{ $stok->nama_barang }}" required autocomplete="nama_barang" placeholder="Nama Barang">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                  @error('nama_barang')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="input-group mb-3">
                  <input id="jumlah_stok" type="text" class="form-control @error('jumlah_stok') is-invalid @enderror" name="jumlah_stok" value="{{ $stok->jumlah_stok }}" required autocomplete="jumlah_stok" placeholder="Jumlah Stok">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                  @error('jumlah_stok')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="row text-right">
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Simpan</button>
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
