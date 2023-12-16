@extends('admin.admin')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Data Stok</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">Data Master</li>
        <li class="breadcrumb-item active">Data Stok</li>
      </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Data Stok</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        @if (Auth::user()->hak_akses == "Pegawai")
        <div class="row mb-3">
          <div class="col-md text-right">
            <a href="{{ route('stok.create') }}" class="btn btn-outline-primary">Tambah Stok</a>
          </div>
        </div>
        @endif
          <table id="dataStoks" class="table table-bordered table-hover table-sm">
            <thead>
            <tr>
              <th>Tanggal</th>
              <th>Nama Barang</th>
              <th>Jumlah Stok</th>
              <th>Pegawai</th>
              @if (Auth::user()->hak_akses == "Pegawai")
              <th>Aksi</th>
              @endif
            </tr>
            </thead>
            <tbody>
            @foreach ($dataStoks as $dataStok)
              <tr>
                <td>{{ Carbon\Carbon::parse($dataStok->tanggal_stok)->format('d F Y') }}</td>
                <td>{{ $dataStok->nama_barang }}</td>
                <td>{{ $dataStok->jumlah_stok }}</td>
                <td>{{ $dataStok->user->name }}</td>
                @if (Auth::user()->hak_akses == "Pegawai")
                <td><a href="{{ route('stok.edit', $dataStok->id) }}" style="color: gray"><i class="fa-solid fa-pencil"></i></a></td>
                @endif
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
      $('#dataStoks').DataTable({
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
