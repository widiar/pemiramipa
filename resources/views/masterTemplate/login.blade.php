<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('dist/desain-web/logo-pemira.png') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.css')}}">
    <link rel="stylesheet" href="{{ asset('dist/css/dashboard.css') }}">

    @yield('csstambahan')
    
    <!-- <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script> -->
    <!-- Google ReChapta -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="">
    {{-- <div class="login-box">
        <div class="login-logo">
            <b>@yield('login-text')</b>
        </div> --}}
    <!-- /.login-logo -->
    @yield('content')
    {{-- </div> --}}
    @yield('diluarlogin')
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <!-- Sweet Alert -->
    <script src="{{ asset('dist/js/sweetalert2.all.js') }}"></script>
    <script src="{{asset('dist/js/bs-custom-file-input.js')}}"></script>
    <!-- countdown js -->
    <script src="{{ asset('dist/js/countdown.js') }}"></script>
    <script>
        $(document).ready(function() {
            bsCustomFileInput.init()
        })
    </script>
    @yield('javascripttambahan')

</body>

</html>