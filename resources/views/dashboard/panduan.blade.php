@extends('masterTemplate.usermaster')

@section('title','Pemira FMIPA')

@section('konten')
<div class="container">
    <div class="jumbotron" style="background-color: white;">
        <h1 class="display-4">Hello {{auth()->user()->nim}} </h1>
        <p class="lead">Ini adalah website untuk melakukan pemilihan Calon Gubernur BEM FMIPA dan Calon HIMA.</p>
        <hr class="my-4">
        <p>Silahkan klik tombol <b>Voting</b> untuk memilih, atau tombol <b>Logout</b> untuk keluar.</p>
        <p class="lead">
            <a href="/voting" class="btn btn-primary">Voting</a>
            <a href="/logout" class="logout btn btn-danger">Logout</a>
        </p>
    </div>
</div>
@endsection