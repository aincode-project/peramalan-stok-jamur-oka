@extends('admin.admin')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Data Peramalan</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">Data Master</li>
        <li class="breadcrumb-item">Data Peramalan</li>
        <li class="breadcrumb-item active">Detail Peramalan</li>
      </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Data Peramalan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">
                    Tanggal Analisis
                </div>
                <div class="col-md-4">
                    : {{ Carbon\Carbon::parse($peramalan->tanggal_peramalan)->format('d F Y') }}
                </div>
                <div class="col-md-2">
                    Total x
                </div>
                <div class="col-md-4">
                    : {{ $peramalan->total_x }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    Nama Jamur
                </div>
                <div class="col-md-4">
                    : Jamur Tiram
                </div>
                <div class="col-md-2">
                    Total y
                </div>
                <div class="col-md-4">
                    : {{ $peramalan->total_y }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    Range Data
                </div>
                <div class="col-md-4">
                    : {{ Carbon\Carbon::parse($peramalan->tanggal_awal_data)->format('d F Y') }} - {{ Carbon\Carbon::parse($peramalan->tanggal_akhir_data)->format('d F Y') }}
                </div>
                <div class="col-md-2">
                    Total x^2
                </div>
                <div class="col-md-4">
                    : {{ $peramalan->total_xx }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    Jumlah Data
                </div>
                <div class="col-md-4">
                    : {{ $peramalan->jumlah_data }}
                </div>
                <div class="col-md-2">
                    Total xy
                </div>
                <div class="col-md-4">
                    : {{ $peramalan->total_xy }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    Nilai a
                </div>
                <div class="col-md-4">
                    : {{ $peramalan->nilai_a }}
                </div>
                <div class="col-md-2">
                    MAPE
                </div>
                <div class="col-md-4">
                    : {{ $peramalan->nilai_mape }}%
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    Nilai b
                </div>
                <div class="col-md-4">
                    : {{ $peramalan->nilai_b }}
                </div>
            </div>
            <hr>
          <table class="table table-bordered table-hover table-sm">
            <thead>
            <tr>
              <th>Bulan</th>
              <th>Stok (y)</th>
              <th>Penjualan (x)</th>
              <th>x^2</th>
              <th>xy</th>
              <th>Hasil Prediksi (y')</th>
              <th>Nilai PE</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($peramalan->detail_peramalan as $detailPeramalan)
              <tr>
                <td>{{ Carbon\Carbon::parse($detailPeramalan->tanggal)->format('M-Y') }}</td>
                <td class="text-right">{{ $detailPeramalan->nilai_y }}</td>
                <td class="text-right">{{ $detailPeramalan->nilai_x }}</td>
                <td class="text-right">{{ $detailPeramalan->nilai_xx }}</td>
                <td class="text-right">{{ $detailPeramalan->nilai_xy }}</td>
                <td class="text-right">{{ $detailPeramalan->hasil_prediksi }}</td>
                <td class="text-right">{{ $detailPeramalan->nilai_pe }}%</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
@endsection
