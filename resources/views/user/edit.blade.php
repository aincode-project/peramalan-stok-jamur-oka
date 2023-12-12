@extends('admin.admin')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Ubah User</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">Data Master</li>
        <li class="breadcrumb-item">Data User</li>
        <li class="breadcrumb-item active">Ubah User</li>
      </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Ubah User</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus placeholder="Full name">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                  </div>
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="input-group mb-3">
                  <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $user->alamat }}" required autocomplete="alamat" placeholder="Alamat">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                  @error('alamat')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="input-group mb-3">
                  <input id="no_telp" type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ $user->no_telp }}" required autocomplete="no_telp" placeholder="No Telp">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                  @error('no_telp')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="input-group mb-3">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" placeholder="Email" disabled>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="input-group mb-3">
                    <select class="form-control" id="hak_akses" name="hak_akses">
                        <option selected disabled>Pilih Status</option>
                        <option value="Pemilik" {{ $user->hak_akses == "Pemilik" ? 'selected' : '' }}>Pemilik</option>
                        <option value="Pegawai" {{ $user->hak_akses == "Pegawai" ? 'selected' : '' }}>Pegawai</option>
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-envelope"></span>
                        </div>
                      </div>
                    @error('hak_akses')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="hidden" name="oldImage" value="{{ $user->image }}">
                    @if ($user->image)
                        <img src="{{ asset('storage/' .$user->image) }}" class="img-preview img-fluid mb-3 col-sm-3 d-block">
                    @else
                        <img class="img-preview img-fluid mb-3 col-sm-3">
                    @endif
                </div>
                <div class="input-group mb-3">
                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" required onchange="previewImage()">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-user"></span>
                        </div>
                    </div>
                    @error('image')
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

@section('script')
    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
