@extends('admin.admin')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Laporan Stok</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">Data Master</li>
        <li class="breadcrumb-item active">Laporan Stok</li>
      </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Laporan Stok</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{ route('laporanStok.index', 1) }}" method="post">
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
                    <div class="text-right col-md-6">
                        <form action="{{ route('printStok') }}">
                            <input type="hidden" name="tahunDipilih" value="{{ $tahunDipilih }}">
                            <button type="submit" class="btn btn-outline-success">Cetak Laporan</button>
                        </form>
                    </div>
                </div>
          <table id="laporanStoks" class="table table-bordered table-hover table-sm">
            <thead>
            <tr>
              <th>Bulan Tahun</th>
              <th>Jumlah Stok</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($dataStoks as $dataStok)
              <tr>
                <td>{{ $dataStok->bulan }} - {{ $dataStok->tahun }}</td>
                <td class="text-end">{{ $dataStok->jumlah_stok }} Kg</td>
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
      $('#laporanStoks').DataTable({
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
