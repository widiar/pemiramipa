@extends('masterTemplate.master')
@section('nav-side')
@include('masterTemplate.navbar')
@include('masterTemplate.sidebar')
@endsection


@section('title','Waktu Mulai')
@section('content-header','Mulai aja dulu')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card shadow p-4 mx-auto w-50">
            <div class="card-header text-center">
                <h3>MULAI AJA DULU</h3>
            </div>
            <div class="card-body text-center">
                <form action="/mulai" method="post">
                    <div class="row">
                        @csrf
                        <div class="col">
                            <button type="submit" name="mulai" value="1" class="btn btn-primary btn-lg" {{$vote->waktuVote == 1 ? 'disabled' : ''}}>MULAI</button>
                        </div>
                        <div class="col">
                            <button type="submit" name="belum" value="0" class="btn btn-danger btn-lg" {{$vote->waktuVote == 0 ? 'disabled' : ''}}>BELUM</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection