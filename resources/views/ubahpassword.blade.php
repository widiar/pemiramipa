@extends('masterTemplate.login')

@section('title','Halaman Ubah Password')
@section('login-text', 'Ubah Password')

@section('content')
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Silahkan Ubah Password anda {{session('emailyanglupa')}}</p>
        @if(session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
        @endif
        <form action="/forgotpassword" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="">Password Baru</label>
                <div class="input-group">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="">Ulangi Password Baru</label>
                <div class="input-group">
                    <input type="password" class="form-control @error('ulangipassword') is-invalid @enderror" name="ulangipassword">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    @error('ulangipassword')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Ubah</button>
        </form>
        <hr>
    </div>
    <!-- /.login-card-body -->
</div>
@endsection