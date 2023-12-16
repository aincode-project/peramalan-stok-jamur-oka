@extends('admin.admin')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Laporan Penjualan</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">Data Master</li>
        <li class="breadcrumb-item active">Laporan Penjualan</li>
      </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Laporan Penjualan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{ route('laporanPenjualan.index', 1) }}" method="post">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-4">
                        <select id="filter_tahun" name="filter_tahun" class="form-control">
                            @foreach ($tahuns as $tahun)
                                <option value="{{ $tahun->tahun }}">{{ $tahun->tahun }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-outline-primary">Filter</button>
                    </div>
                </form>
                @if (Auth::user()->hak_akses == "Pemilik")
                <div class="text-right col-md-6">
                    <form action="{{ route('printPenjualan') }}">
                        <input type="hidden" name="tahunDipilih" value="{{ $tahunDipilih }}">
                        <button type="submit" class="btn btn-outline-success">Cetak Laporan</button>
                    </form>
                </div>
                @endif
            </div>

          <table id="laporanPenjualans" class="table table-bordered table-hover table-sm">
            <thead>
            <tr>
              <th>Bulan Tahun</th>
              <th>Jumlah Penjualan</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($dataPenjualans as $dataPenjualan)
              <tr>
                <td>{{ $dataPenjualan->bulan }} - {{ $dataPenjualan->tahun }}</td>
                <td class="text-end">{{ $dataPenjualan->jumlah_stok_terjual }} Kg</td>
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

@section('script')
<script>
    $(function () {
      $('#laporanPenjualans').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
</script>
@endsection
