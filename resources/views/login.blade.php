@extends('masterTemplate.login')

@section('title','Pemira FMIPA')
@section('csstambahan')
<link rel="stylesheet" href="{{ asset('dist/css/login-style.css') }}">
@endsection
{{-- @section('login-text', 'Login')  --}}

@section('content')
<div class="login-box">
    <div class="login-logo">
        <b>Login</b>
    </div>
    <div class="text-tittle">

    </div>
    <div class="card" style="width: 100%">
        <div class="card-body login-card-body">
            {{-- <p class="login-box-msg">Login</p> --}}
            @if(session('status'))
            <div class="alert alert-danger">
                {{ session('status') }}
            </div>
            @endif
            @if(session('statussukses'))
            <div class="alert alert-success">
                {{ session('statussukses') }}
            </div>
            @endif
            @if(session('warning'))
            <div class="alert alert-warning warning">
                {{ session('warning') }}
            </div>
            @endif
            <form action="/" method="post" id="iniformlogin">
                @csrf
                <div class="form-group mb-3">
                    <label for="">NIM</label>
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
                <div class="form-group mb-3">
                    <label for="">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <hr>
                <input type="hidden" name="response" class="resp" value="">
                <button type="submit" class="btn btn-block g-recaptcha" data-sitekey="{{env('SITE_KEY')}}" data-callback='onSubmit' data-action='submit'>Sign In</button>
            </form>
            <hr>
            <p class="mb-1 text-center">
                <a href="lupapassword">Lupa Password</a>
            </p>
            {{-- <p class="mb-0 text-center">
                <a href="register">Register akun baru</a>
            </p> --}}
        </div>
        <!-- /.login-card-body -->
    </div>
</div>

@endsection

@section('javascripttambahan')
<script>
    function onSubmit(token) {
        $(".resp").val(token);
        document.getElementById("iniformlogin").submit();
    }
    $(document).ready(function() {
        $(".warning").each(function() {
            Swal.fire(
                "Oops!",
                $(".warning").html(),
                "info"
            )
        });
    })
</script>
@endsection