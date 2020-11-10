@extends('masterTemplate.login')

@section('title','Pemira FMIPA')
@section('login-text', 'Login') 

@section('content')
<div class="header">
    <div class="logo">
        {{-- <img src="{{asset('dist/img/logo pemira 2020.png')}}" width="50px"> --}}
        
    </div>
    <div class="text-tittle">


    </div>
    <div class="card" style="width: 500px">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Login</p>
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
            <div class="alert alert-warning">
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
                <button type="submit" class="btn btn-primary btn-block g-recaptcha" data-sitekey="{{env('SITE_KEY')}}" data-callback='onSubmit' data-action='submit'>Sign In</button>
            </form>
            <hr>
            <p class="mb-1 text-center">
                <a href="lupapassword">Lupa Password</a>
            </p>
            <p class="mb-0 text-center">
                <a href="register">Register akun baru</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<div class="content" style="min-height: 700px">
    <div class="content-tittle">

    </div>
    <div class="content-text">

    </div>
</div>
<div class="footer" style="min-height: 100px">
    <div class="info">

    </div>
    <div class="contact-person">

    </div>
</div>
@endsection

@section('javascripttambahan')
<script>
    function onSubmit(token) {
        $(".resp").val(token);
        document.getElementById("iniformlogin").submit();
    }
</script>
@endsection