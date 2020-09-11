@extends('masterTemplate.login')

@section('title','Halaman Register')
@section('login-text', 'Register')

@section('content')
<div class="card">
    <div class="card-body register-card-body">
        <p class="login-box-msg">Silahkan mendaftar terlebih dahulu</p>
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <form action="/login" method="post" enctype="multipart/form-data" id="iniformregister">
            @csrf
            <div class="form-group mb-3">
                <label for="">Nama Lengkap</label>
                <div class="input-group">
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
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
                <label for="">Email</label>
                <div class="input-group">
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="">Program Studi</label>
                <div class="input-group">
                    <select name="prodi" class="custom-select @error('prodi') is-invalid @enderror prodi">
                        <option selected disabled>Program Studi</option>
                        <option value="Matematika">Matematika</option>
                        <option value="Kimia">Kimia</option>
                        <option value="Fisika">Fisika</option>
                        <option value="Biologi">Biologi</option>
                        <option value="Farmasi">Farmasi</option>
                        <option value="Informatika">Informatika</option>
                    </select>
                    @error('prodi')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <!-- <div class="input-group mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-6">
                    <div class="form-group mb-3">
                        <label for="">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}">
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
                </div>
                <div class="col-6">
                    <div class="form-group mb-3">
                        <label for="">Ulangi Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control @error('password2') is-invalid @enderror" name="password2" value="{{ old('password2') }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('password2')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Scan KTM/KRM</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('ktm') is-invalid @enderror" id="ktm" name="ktm">
                        <label class="custom-file-label" for="ktm">Pilih File</label>
                    </div>
                </div>
                <small class="text-info">*Batas file sebesar 3mb</small><br>
                @error('ktm')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <hr>
            <input type="hidden" name="response" class="resp" value="">
            <button type="submit" class="btn btn-primary btn-block g-recaptcha" data-sitekey="{{env('SITE_KEY')}}" data-callback='onSubmit' data-action='submit'>Register</button>
        </form>
        <div class="mt-2 text-center">
            <a href="login">Sudah punya akun silahkan Login</a>
        </div>
    </div>
    <!-- /.form-box -->
</div><!-- /.card -->
@endsection

@section('javascripttambahan')
<script>
    $(document).ready(function() {
        var prodi = "{{old('prodi')}}";
        if (prodi !== '')
            $(".prodi").val(prodi).change();
    });

    function onSubmit(token) {
        $(".resp").val(token);
        document.getElementById("iniformregister").submit();
    }
</script>
@endsection