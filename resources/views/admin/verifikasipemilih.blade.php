@extends('masterTemplate.master')

@section('title','Verifikasi Mahasiswa')
@section('content-header','Verifikasi')
@section('atasCssOrScript')
@endsection
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card shadow">
            <div class="card-body">
                <table id="ktmverifikasi" class="table table-bordered">
                    <thead>
                        <tr>
                            <!-- <th>NO</th> -->
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Program Studi</th>
                            <th class="text-center">KTM</th>
                            <th class="text-center">Aksi</th>
                            <th class="text-center">Waktu Voting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!is_null($mahasiswa))
                        @foreach($mahasiswa as $siswa)
                        <tr>
                            <!-- <td>1</td> -->
                            <td>{{$siswa['nim']}}</td>
                            @if(!is_null($siswa['mahasiswa']))
                            <td>{{$siswa['mahasiswa']['nama']}}</td>
                            <td>{{$siswa['mahasiswa']['prodi']}}</td>
                            <td class="text-center">
                                <a href="/verifikasipemilih/{{$siswa['nim']}}" class="liatKtm">
                                    <button class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></button>
                                </a>
                            </td>
                            @endif
                            <td class="text-center">
                                @if($siswa['verif'] == 1)
                                <span class="badge badge-success">Verifed</span>
                                @else
                                <form action="/verifikasipemilih/{{$siswa['nim']}}" method="post" class="hapusPemilih">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fas fa-times-circle"></i></button>
                                </form>
                                @endif
                            </td>
                            <td class="text-center">
                                @if($siswa['verif'] == 0)
                                <span class="badge badge-danger">Not Verifed</span>
                                @else
                                <input type="hidden" value="{{ $siswa['mahasiswa']['waktuVoting'] }}" class="waktuvotingnih{{$siswa['nim']}}">
                                <form action="/waktumilih/{{$siswa['nim']}}" method="post" class="waktumilih">
                                    @csrf
                                    <input type="hidden" name="waktu" value="0" class="waktuh{{$siswa['nim']}}">
                                    <button type="submit" class="btn {{$siswa['mahasiswa']['waktuVoting'] == 1 ? 'btn-primary' : 'btn-outline-primary'}} waktu1{{$siswa['nim']}} waktu1" {{$siswa['mahasiswa']['waktuVoting'] == 1 ? 'disabled' : ''}} value="1_{{$siswa['nim']}}">Waktu 1</button>
                                    <button type="submit" class="btn {{$siswa['mahasiswa']['waktuVoting'] == 2 ? 'btn-primary' : 'btn-outline-primary'}} waktu2{{$siswa['nim']}} waktu2" {{$siswa['mahasiswa']['waktuVoting'] == 2 ? 'disabled' : ''}} value="2_{{$siswa['nim']}}">Waktu 2</button>
                                    <button type="submit" class="btn {{$siswa['mahasiswa']['waktuVoting'] == 3 ? 'btn-primary' : 'btn-outline-primary'}} waktu3{{$siswa['nim']}} waktu3" {{$siswa['mahasiswa']['waktuVoting'] == 3 ? 'disabled' : ''}} value="3_{{$siswa['nim']}}">Waktu 3</button>
                                </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                    @endif
                </table>
            </div>
            <div class="ml-3">
                {{$mahasiswa->links()}}
            </div>
        </div>

        <div class="modal fade" id="ktm" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Bukti KTM</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body ktmmodal text-center">

                    </div>
                    <div class="modal-footer ktmmodalfooter">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('plugins/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('dist/js/halamanadmin.js') }}"></script>
@endsection