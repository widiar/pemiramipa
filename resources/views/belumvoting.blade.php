@extends('masterTemplate.login')

@section('title','PRESMA')
@section('content-header', 'Login')

@section('diluarlogin')
<div class="content">
    <div class="container-fluid">
        <div class="belum">
            <img src="{{asset('dist/img/logo pemira 2020.png')}}" class="img-responsive" alt="" height="100px">
            <h1 class="mb-5">Voting Countdown</h1>
            <div id="clock"></div>
        </div>
    </div>
</div>
@endsection

@section('javascripttambahan')
<script>
    $(document).ready(function() {
        $("#clock").countdown("2020/11/29 16:00:00", function(event) {
            var $this = $(this).html(
                event.strftime(
                    "" +
                    "<div><span>%n</span><span>Hari</span></div>" +
                    "<div><span>%H</span><span>Jam</span></div>" +
                    "<div><span>%M</span><span>Menit</span></div>" +
                    "<div><span>%S</span><span>Detik</span></div>"
                )
            );
        });
    });
</script>
@endsection