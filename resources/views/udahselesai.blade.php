@extends('masterTemplate.login')

@section('title','Pemira FMIPA')
@section('content-header', 'Login')

@section('diluarlogin')
<div class="content">
    <div class="container-fluid" style="position: absolute; top: 25%">
        <div class="belum">
            <img src="{{asset('dist/img/logo pemira 2020.png')}}" class="img-responsive" alt="" height="100px">
            <h1 class="my-4">Voting Sudah Usai</h1>
            <a href="/hasilsuara">
                <button class="btn btn-lg btn-success">LIHAT HASIL SUARA</button>
            </a>
        </div>
    </div>
</div>
@endsection