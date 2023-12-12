@extends('admin.admin')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Data User</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">Data Master</li>
        <li class="breadcrumb-item active">Data User</li>
      </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Data User</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row mb-3">
            <div class="col-md text-right">
              <a href="{{ route('user.create') }}" class="btn btn-outline-primary">Tambah User</a>
            </div>
          </div>
          <table id="dataUsers" class="table table-bordered table-hover table-sm">
            <thead>
            <tr>
              <th>Nama</th>
              <th>Alamat</th>
              <th>No Telp</th>
              <th>Email</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($dataUsers as $dataUser)
              <tr>
                <td>{{ $dataUser->name }}</td>
                <td>{{ $dataUser->alamat }}</td>
                <td>{{ $dataUser->no_telp }}</td>
                <td>{{ $dataUser->email }}</td>
                <td>{{ $dataUser->hak_akses }}</td>
                <td><a href="{{ route('user.edit', $dataUser->id) }}" style="color: gray"><i class="fa-solid fa-pencil"></i></a></td>
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
      $('#dataUsers').DataTable({
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
