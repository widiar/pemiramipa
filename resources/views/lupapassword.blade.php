@extends('masterTemplate.login')

@section('title','Halaman Lupa Password')

@section('csstambahan')
<link rel="stylesheet" href="{{ asset('dist/css/login-style.css') }}">
@endsection
@section('login-text', 'Lupa Password')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <b>Lupa Password</b>
    </div>
    <div class="text-tittle">

    </div>
    <div class="card" style="width: 100%">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Masukkan Email atau NIM yang lupa Password</p>
            @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <form action="/lupapassword" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="">NIM / Email</label>
                    <div class="input-group">
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('nim')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-block">Kirim</button>
            </form>
            <hr>
            <p class="mb-0 text-center">
                <a href="/login">Login</a>
            </p>
        </div>
    <!-- /.login-card-body -->
    </div>
</div>
@endsection