@extends('admin.admin')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Profile</h1>
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
            <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-4">
                        <div class="input-group mb-3">
                            <input type="hidden" name="oldImage" value="{{ $user->image }}">
                            @if ($user->image)
                                <img src="{{ asset('storage/' .$user->image) }}" class="img-preview img-fluid mb-3 d-block">
                            @else
                                <img class="img-preview img-fluid mb-3">
                            @endif
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
                        <div class="col-12 text-right">
                            <button type="submit" class="btn btn-primary">Ubah Foto</button>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="input-group mb-3">
                            <input id="name" disabled type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus placeholder="Full name">
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
                            <input id="alamat" disabled type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $user->alamat }}" required autocomplete="alamat" placeholder="Alamat">
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
                            <input id="no_telp" disabled type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ $user->no_telp }}" required autocomplete="no_telp" placeholder="No Telp">
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
                    </div>

                    <!-- /.col -->
                </div>
            </form>
            <hr>
            <form action="{{ route('profile.updatePassword', $user->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                            <div class="input-group-append">
                              <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                              </div>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                          <div class="input-group mb-3">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Retype password">
                            <div class="input-group-append">
                              <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 text-right">
                        <button type="submit" class="btn btn-primary">Ubah Password</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
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
