@extends('admin.admin')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Data Peramalan</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">Data Master</li>
        <li class="breadcrumb-item active">Data Peramalan</li>
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
          <div class="row mb-3">
            <div class="col-md text-right">
              <a href="{{ route('peramalan.create') }}" class="btn btn-outline-primary">Tambah Analisis</a>
            </div>
          </div>
          <table id="dataPeramalans" class="table table-bordered table-hover table-sm">
            <thead>
            <tr>
              <th>Tanggal</th>
              <th>Range Data</th>
              <th>Nilai a</th>
              <th>Nilai b</th>
              <th>MAPE</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($dataPeramalans as $dataPeramalan)
              <tr>
                <td>{{ Carbon\Carbon::parse($dataPeramalan->tanggal_peramalan)->format('d F Y') }}</td>
                <td>{{ Carbon\Carbon::parse($dataPeramalan->tanggal_awal_data)->format('d F Y') }} - {{ Carbon\Carbon::parse($dataPeramalan->tanggal_akhir_data)->format('d F Y') }}</td>
                <td class="text-right">{{ $dataPeramalan->nilai_a }}</td>
                <td class="text-right">{{ $dataPeramalan->nilai_b }}</td>
                <td class="text-right">{{ $dataPeramalan->nilai_mape }}%</td>
                <td><a href="{{ route('peramalan.show', $dataPeramalan->id) }}" style="color: green"><i class="fa-solid fa-info-circle"></i></a></td>
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
      $('#dataPeramalans').DataTable({
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
