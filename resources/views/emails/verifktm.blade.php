@component('mail::message')
# Silahkan Login

<div> Anda telah di verifikasi dengan NIM {{$nim}} </div>
Silahkan klik tombol Login untuk melakukan pemilihan
@php
$url = config('app.url') . 'login'
@endphp
@component('mail::button', ['url' => $url , 'color' => 'success'])
Login
@endcomponent

Regards,<br>
{{ config('app.name') }}
@endcomponent