@extends('masterTemplate.master')

@section('title','Pemira FMIPA')
@if($mahasiswa->udahVoting == 0 || $mahasiswa->udahvotinghima == 0)
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card shadow p-4 mx-auto w-75">
            <form action="/masuksuara" method="post" class="masukoke">
                @csrf
                @if($mahasiswa->udahVoting == 0)
                <div class="card-header text-center bem">
                    <h3>Voting Calon BEM FMIPA</h3>
                </div>
                <div class="row justify-content-center bem">
                    <div class="col-md-6 nopad text-center mb-3 mar">
                        <label class="bem-radio">
                            <img class="img-responsive" src="/img/fotocalon/calon1.png" />
                            <input type="radio" name="calonbem" value="1" />
                            <i class="fas fa-check-square"></i>
                            <br><span><b>Pilihan 1</b></span>
                        </label>
                    </div>
                    <div class="col-md-6 nopad text-center mb-3 mar">
                        <label class="bem-radio">
                            <img class="img-responsive" src="/img/fotocalon/calon2.png" />
                            <input type="radio" name="calonbem" value="2" />
                            <i class="fas fa-check-square"></i>
                            <br><span><b>Pilihan 2</b></span>
                        </label>
                    </div>
                </div>
                @endif
                @if($mahasiswa->udahvotinghima == 0)
                @if(strcmp($mahasiswa->prodi, 'Fisika') == 0)
                <div class="card-header text-center prodi">
                    <h3>Voting Calon HIMA Fisika</h3>
                </div>
                <div class="row justify-content-center prodi">
                    <div class="col-md-6 nopad text-center mb-3 mar">
                        <label class="prodi-radio">
                            <img class="img-responsive" src="/img/fotocalon/calon3.png" />
                            <input type="radio" name="calonhima" value="1" />
                            <i class="fas fa-check-square"></i>
                            <br><span><b>Pilihan 1</b></span>
                        </label>
                    </div>
                    <div class="col-md-6 nopad text-center mb-3 mar">
                        <label class="prodi-radio">
                            <img class="img-responsive" src="/img/fotocalon/calon4.png" />
                            <input type="radio" name="calonhima" value="2" />
                            <i class="fas fa-check-square"></i>
                            <br><span><b>Pilihan 2</b></span>
                        </label>
                    </div>
                </div>
                @elseif(strcmp($mahasiswa->prodi, 'Kimia') == 0)
                <div class="card-header text-center prodi">
                    <h3>Voting Calon HIMA Kimia</h3>
                </div>
                <div class="row justify-content-center prodi">
                    <div class="col-md-6 nopad text-center mb-3 mar">
                        <label class="prodi-radio">
                            <img class="img-responsive" src="/img/fotocalon/calon4.png" />
                            <input type="radio" name="calonhima" value="1" />
                            <i class="fas fa-check-square"></i>
                            <br><span><b>Pilihan 1</b></span>
                        </label>
                    </div>
                    <div class="col-md-6 nopad text-center mb-3 mar">
                        <label class="prodi-radio">
                            <img class="img-responsive" src="/img/fotocalon/calon4.png" />
                            <input type="radio" name="calonhima" value="2" />
                            <i class="fas fa-check-square"></i>
                            <br><span><b>Pilihan 2</b></span>
                        </label>
                    </div>
                </div>
                @elseif(strcmp($mahasiswa->prodi, 'Matematika') == 0)
                <div class="card-header text-center prodi">
                    <h3>Voting Calon HIMA Matematika</h3>
                </div>
                <div class="row justify-content-center prodi">
                    <div class="col-md-6 nopad text-center mb-3 mar">
                        <label class="prodi-radio">
                            <img class="img-responsive" src="/img/fotocalon/calon4.png" />
                            <input type="radio" name="calonhima" value="1" />
                            <i class="fas fa-check-square"></i>
                            <br><span><b>Pilihan 1</b></span>
                        </label>
                    </div>
                    <div class="col-md-6 nopad text-center mb-3 mar">
                        <label class="prodi-radio">
                            <img class="img-responsive" src="/img/fotocalon/calon4.png" />
                            <input type="radio" name="calonhima" value="2" />
                            <i class="fas fa-check-square"></i>
                            <br><span><b>Pilihan 2</b></span>
                        </label>
                    </div>
                </div>
                @elseif(strcmp($mahasiswa->prodi, 'Biologi') == 0)
                <div class="card-header text-center prodi">
                    <h3>Voting Calon HIMA Biologi</h3>
                </div>
                <div class="row justify-content-center prodi">
                    <div class="col-md-6 nopad text-center mb-3 mar">
                        <label class="prodi-radio">
                            <img class="img-responsive" src="/img/fotocalon/calon4.png" />
                            <input type="radio" name="calonhima" value="1" />
                            <i class="fas fa-check-square"></i>
                            <br><span><b>Pilihan 1</b></span>
                        </label>
                    </div>
                    <div class="col-md-6 nopad text-center mb-3 mar">
                        <label class="prodi-radio">
                            <img class="img-responsive" src="/img/fotocalon/calon4.png" />
                            <input type="radio" name="calonhima" value="2" />
                            <i class="fas fa-check-square"></i>
                            <br><span><b>Pilihan 2</b></span>
                        </label>
                    </div>
                </div>
                @elseif(strcmp($mahasiswa->prodi, 'Farmasi') == 0)
                <div class="card-header text-center prodi">
                    <h3>Voting Calon HIMA Farmasi</h3>
                </div>
                <div class="row justify-content-center prodi">
                    <div class="col-md-6 nopad text-center mb-3 mar">
                        <label class="prodi-radio">
                            <img class="img-responsive" src="/img/fotocalon/calon4.png" />
                            <input type="radio" name="calonhima" value="1" />
                            <i class="fas fa-check-square"></i>
                            <br><span><b>Pilihan 1</b></span>
                        </label>
                    </div>
                    <div class="col-md-6 nopad text-center mb-3 mar">
                        <label class="prodi-radio">
                            <img class="img-responsive" src="/img/fotocalon/calon4.png" />
                            <input type="radio" name="calonhima" value="2" />
                            <i class="fas fa-check-square"></i>
                            <br><span><b>Pilihan 2</b></span>
                        </label>
                    </div>
                </div>
                @elseif(strcmp($mahasiswa->prodi, 'Informatika') == 0)
                <div class="card-header text-center prodi">
                    <h3>Voting Calon HIMA Informatika</h3>
                </div>
                <div class="row justify-content-center prodi">
                    <div class="col-md-6 nopad text-center mb-3 mar">
                        <label class="prodi-radio">
                            <img class="img-responsive" src="/img/fotocalon/calon2.png" />
                            <input type="radio" name="calonhima" value="1" />
                            <i class="fas fa-check-square"></i>
                            <br><span><b>Pilihan 1</b></span>
                        </label>
                    </div>
                    <div class="col-md-6 nopad text-center mb-3 mar">
                        <label class="prodi-radio">
                            <img class="img-responsive" src="/img/fotocalon/calon4.png" />
                            <input type="radio" name="calonhima" value="2" />
                            <i class="fas fa-check-square"></i>
                            <br><span><b>Pilihan 2</b></span>
                        </label>
                    </div>
                </div>
                @endif
                @endif
                <hr>
                <!-- <div class="card-footer"> -->
                <input type="hidden" name="lagimilih" class="lagimilih" value="{{$mahasiswa->udahVoting == 0 ? 0 : 1}}">
                <div class="d-flex justify-content-between">
                    <div class="kiriFooterCard">
                        <!-- <button type="button" class="btn btn-primary prev">Previous</button> -->
                    </div>
                    <div class="kananFooterCard">
                        <button type="{{$mahasiswa->udahVoting == 0 ? 'button' : 'submit'}}" class="btn btn-primary next">Pilih</button>
                    </div>
                </div>
            </form>
            <!-- </div> -->
        </div>
    </div>
</div>
@endsection
@else
@section('content')
<div class="content">
    <div class="container-fluid">
        <h1>Anda Sudah Voting</h1>
    </div>
</div>
@endsection
@endif

@section('atasCssOrScript')
<style>
    .mar {
        margin-right: 1.5rem;
        margin-left: 1.5rem;
    }

    .bem-radio,
    .prodi-radio {
        cursor: pointer;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        border: 4px solid transparent;
        margin-bottom: 0;
        outline: 0;
    }

    .bem-radio input[type="radio"],
    .prodi-radio input[type="radio"] {
        display: none;
    }

    .bem-radio-checked,
    .prodi-radio-checked {
        border-color: #4783B0;
    }

    .bem-radio .fas,
    .prodi-radio .fas {
        display: none;
        position: absolute;
        color: #4A79A3;
        /* background-color: #fff; */
        padding: 10px;
        top: 0;
        font-size: 2rem;
    }

    .bem-radio-checked .fas,
    .prodi-radio-checked .fas {
        display: block !important;
    }
</style>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        // add/remove checked class
        $(".bem-radio").each(function() {
            if ($(this).find('input[type="radio"]').first().attr("checked")) {
                $(this).addClass('bem-radio-checked');
            } else {
                $(this).removeClass('bem-radio-checked');
            }
        });
        $(".prodi-radio").each(function() {
            if ($(this).find('input[type="radio"]').first().attr("checked")) {
                $(this).addClass('prodi-radio-checked');
            } else {
                $(this).removeClass('prodi-radio-checked');
            }
        });
        // sync the input state
        $(".bem-radio").on("click", function(e) {
            $(".bem-radio").removeClass('bem-radio-checked');
            $(this).addClass('bem-radio-checked');
            var $radio = $(this).find('input[type="radio"]');
            $radio.prop("checked", !$radio.prop("checked"));

            e.preventDefault();
        });
        $(".prodi-radio").on("click", function(e) {
            $(".prodi-radio").removeClass('prodi-radio-checked');
            $(this).addClass('prodi-radio-checked');
            var $radio = $(this).find('input[type="radio"]');
            $radio.prop("checked", !$radio.prop("checked"));
            e.preventDefault();
        });

    });
</script>
@endsection