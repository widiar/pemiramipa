@extends('masterTemplate.master')

@section('title','PRESMA')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card card-info mx-auto w-50">
            <div class="card-header text-center">
                <h3>Ubah Password</h3>
            </div>
            @if(session('status'))
            <div class="alert alert-danger mt-3">
                {{ session('status') }}
            </div>
            @endif
            @if(session('sukses'))
            <div class="alert alert-success mt-3">
                {{ session('sukses') }}
            </div>
            @endif
            <div class="card-body">
                <form action="/dashboard/gantipassword" method="post">
                    @csrf
                    <div class="form-gorup mb-3">
                        <label for="passwordlama">Password Lama</label>
                        <input type="password" class="form-control @error('passwordlama') is-invalid @enderror" id="passwordlama" name="passwordlama">
                        @error('passwordlama')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-gorup mb-3">
                        <label for="passwordbaru">Password Baru</label>
                        <input type="password" class="form-control @error('passwordbaru') is-invalid @enderror" id="passwordbaru" name="passwordbaru">
                        @error('passwordbaru')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-gorup mb-3">
                        <label for="passwordbaru2">Ketik Ulang Password Baru</label>
                        <input type="password" class="form-control @error('passwordbaru2') is-invalid @enderror" id="passwordbaru2" name="passwordbaru2">
                        @error('passwordbaru2')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection