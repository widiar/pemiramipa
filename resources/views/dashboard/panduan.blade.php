@extends('masterTemplate.master')

@section('title','Pemira FMIPA')
@section('content-header', 'Panduan')

@section('content')
<div class="content">
    <p>@dd(auth()->user())</p>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div>
</div>
@endsection