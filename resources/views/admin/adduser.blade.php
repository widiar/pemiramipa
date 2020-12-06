@extends('masterTemplate.master')
@section('nav-side')
@include('masterTemplate.navbar')
@include('masterTemplate.sidebar')
@endsection


@section('title','Add User')
@section('content-header','Nambah User')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card shadow p-4 mx-auto w-50">
            <div class="card-header text-center">
                <h3>Tambah User</h3>
                @if(session('status'))
                <div class="alert alert-success sukses">
                    {{ session('status') }}
                </div>
                @endif
                @if(session('err'))
                <div class="alert alert-danger gagal">
                    {{ session('err') }}
                </div>
                @endif
            </div>
            <div class="card-body">
                <form action="/nambahuser" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="">Nama Lengkap</label>
                        <div class="input-group">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
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
                            <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ old('nim') }}">
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
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
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
                            <select id="prodi" name="prodi" class="custom-select @error('prodi') is-invalid @enderror prodi">
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
                    <button class="btn btn-primary" type="submit">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection