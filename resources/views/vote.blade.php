@extends('masterTemplate.master')

@section('title','Buat Vote')


@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="card shadow mx-auto w-50">
            <div class="card-header text-center py-4">
                <h2>PRESMA FMIPA 2020</h2>
            </div>
            <form action="vote" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="dataDiri">
                        <div class="form-group">
                            <label for="" class="ml-2">NIM</label>
                            <input type="text" name="nim" placeholder="Masukkan nim..." class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="ml-2">Nama Lengkap</label>
                            <input type="text" name="nama" placeholder="Masukkan nama..." class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="ml-2">Scan KTM/KRM</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="ktm" name="ktm">
                                    <label class="custom-file-label" for="ktm">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pilihanDiri">
                        <div class="form-group form-check-inline">
                            <label for=""><img src="dist/img/avatar5.png" alt=""></label>
                            <input class="form-check-input" type="radio" name="kandidat1" value="option1">
                        </div>
                        <div class="form-group form-check-inline">
                            <label for=""><img src="dist/img/avatar5.png" alt=""></label>
                            <input class="form-check-input" type="radio" name="kandidat2" value="option2">
                        </div>
                        <div class="form-group form-check-inline">
                            <label for=""><img src="dist/img/avatar5.png" alt=""></label>
                            <input class="form-check-input" type="radio" name="kandidat3" value="option2">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between">
                        <div class="kiriFooterCard">
                            <button type="button" class="btn btn-primary prev">Previous</button>
                        </div>
                        <div class="kananFooterCard">
                            <button type="button" class="btn btn-primary next">Next</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection