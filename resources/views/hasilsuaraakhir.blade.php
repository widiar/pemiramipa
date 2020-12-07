@extends('masterTemplate.usermaster')

@section('title','Pemira FMIPA')
@section('content-header', 'Data Suara')
@section('atasCssOrScript')
<style>
    .kotak1 {
        height: 30px;
        width: 30px;
        margin-top: 12px;
        margin-right: 5px;
        background-color: rgba(54, 162, 235, 0.2);
        border: 1px solid rgba(54, 162, 235, 1);
        float: left;
    }

    .kotak2 {
        height: 30px;
        width: 30px;
        margin-top: 12px;
        margin-right: 5px;
        background-color: rgba(255, 99, 132, 0.2);
        border: 1px solid rgba(255, 99, 132, 1);
        float: left;
    }

    .kotak3 {
        height: 30px;
        width: 30px;
        margin-top: 12px;
        margin-right: 5px;
        background-color: rgba(13, 226, 48, 0.2);
        border: 1px solid rgba(13, 226, 48, 1);
        float: left;
    }
</style>
@endsection
@section('konten')
<div class="container">
    <div class="judul mt-5" style="margin-left: 70px;">
        <button class="btn btn-primary bem">BEM</button>
        <button class="btn btn-primary himakom">ILKOM</button>
        <button class="btn btn-primary himabio">BIOLOGI</button>
        <button class="btn btn-primary himatika">MATEMATIKA</button>
        <button class="btn btn-primary himafarma">FARMASI</button>
        <button class="btn btn-primary himasika">FISIKA</button>
        <button class="btn btn-primary himaki">KIMIA</button>
    </div>
    <div class="isi" style="position: relative; height:100%; width:100%">
        <div class="card p-4 my-3 mx-auto" style="width: 100%;">
            <canvas id="myChart" class="bemcanvas" width="100%"></canvas>
            <div class="bemcanvas">
                <div class="kotak1"></div>
                <h4 class="textbem1 mt-3">Nanda - Winda : 520</h4>
                <div class="kotak2"></div>
                <h4 class="textbem2 mt-4">Kresna - Andriani : 325</h4>
                <h2 class="text-center mt-5">Gubernur dan Waklil Gubernur BEM yang Terpilih</h2>
                <img src="/img/fotocalon/bem1.png" width="75%" class="rounded mx-auto d-block" alt="">
                <h2 class="text-center mt-3"><b>Nanda Banyu Permana - Rut Winda Tamariska</b></h2>
            </div>
            <canvas id="himakom" class="himakomcanvas"></canvas>
            <div class="himakomcanvas">
                <div class="kotak1"></div>
                <h4 class="textilkom1 mt-3">Prawira Adhisastra : 22</h4>
                <div class="kotak2"></div>
                <h4 class="textilkom2 mt-4">Anom Sukawirasa : 79</h4>
                <div class="kotak3"></div>
                <h4 class="textilkom3 mt-4">Deva Dimastawan : 46</h4>
                <h2 class="text-center mt-5">Ketua HIMA Informatika yang Terpilih</h2>
                <img src="/img/fotocalon/ilkom2.jpg" width="50%" class="rounded mx-auto d-block" alt="">
                <h2 class="text-center mt-3"><b>Anom Sukawirasa Putra</b></h2>
            </div>
            <canvas id="himabio" class="himabiocanvas"></canvas>
            <div class="himabiocanvas">
                <div class="kotak1"></div>
                <h4 class="textbio1 mt-3">Kanigara Anupama : 35</h4>
                <div class="kotak2"></div>
                <h4 class="textbio2 mt-4">Adi Ariyanto : 73</h4>
                <h2 class="text-center mt-5">Ketua HIMA Biologi yang Terpilih</h2>
                <img src="/img/fotocalon/biologi2.jpg" width="50%" class="rounded mx-auto d-block" alt="">
                <h2 class="text-center mt-3"><b>Adi Ariyanto Wibisono</b></h2>
            </div>
            <canvas id="himatika" class="himatikacanvas"></canvas>
            <div class="himatikacanvas">
                <div class="kotak1"></div>
                <h4 class="textmatik1 mt-3">Aditya Nursana : 97</h4>
                <div class="kotak2"></div>
                <h4 class="textmatik2 mt-4">Angga Permana : 51</h4>
                <div class="kotak3"></div>
                <h4 class="textmatik3 mt-4">Aulia Wicaksono : 27</h4>
                <h2 class="text-center mt-5">Ketua HIMA MAtematika yang Terpilih</h2>
                <img src="/img/fotocalon/matematika1.png" width="50%" class="rounded mx-auto d-block" alt="">
                <h2 class="text-center mt-3"><b>Aditya Nursana Yadnya</b></h2>
            </div>
            <canvas id="himafarma" class="himafarmacanvas"></canvas>
            <div class="himafarmacanvas">
                <div class="kotak1"></div>
                <h4 class="textfarmasi1 mt-3">Harimbawa Putra : 166</h4>
                <div class="kotak2"></div>
                <h4 class="textfarmasi2 mt-4">Bayu Krisnayana : 25 </h4>
                <div class="kotak3"></div>
                <h4 class="textfarmasi3 mt-4">Hendra Wijaya : 33</h4>
                <h2 class="text-center mt-5">Ketua HIMA Farmasi yang Terpilih</h2>
                <img src="/img/fotocalon/farmasi1.jpeg" width="50%" class="rounded mx-auto d-block" alt="">
                <h2 class="text-center mt-3"><b>Harimbawa Putra</b></h2>
            </div>
            <canvas id="himasika" class="himasikacanvas"></canvas>
            <div class="himasikacanvas">
                <div class="kotak1"></div>
                <h4 class="textfisika1 mt-3">Aditya Jaya : 41</h4>
                <div class="kotak2"></div>
                <h4 class="textfisika2 mt-4">Tinggal Yasa : 40</h4>
                <h2 class="text-center mt-5">Ketua HIMA Fisika yang Terpilih</h2>
                <img src="/img/fotocalon/fisika1.jpeg" width="50%" class="rounded mx-auto d-block" alt="">
                <h2 class="text-center mt-3"><b>Aditya Jaya Mahardika</b></h2>
            </div>
            <canvas id="himaki" class="himakicanvas"></canvas>
            <div class="himakicanvas">
                <div class="kotak1"></div>
                <h4 class="textkimia1 mt-3">Putra Yana : 23</h4>
                <div class="kotak2"></div>
                <h4 class="textkimia2 mt-4">Kamas Indrawan : 84</h4>
                <h2 class="text-center mt-5">Ketua HIMA Kimia yang Terpilih</h2>
                <img src="/img/fotocalon/kimia2.jpg" width="50%" class="rounded mx-auto d-block" alt="">
                <h2 class="text-center mt-3"><b>Wayan Kamas Indrawan</b></h2>
            </div>

        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    var but = 0;
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Nanda - Winda', 'Kresna - Andriani'],
            datasets: [{
                label: 'banyak yg votes',
                data: [520, 325],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)',
                ],
                borderWidth: 1,
            }]
        },
        // options: {
        //     scales: {
        //         yAxes: [{
        //             ticks: {
        //                 beginAtZero: true
        //             }
        //         }]
        //     }
        // }
        options: {
            legend: {
                display: true,
                labels: {
                    fontSize: 26,
                    boxWidth: 26,
                },
            }
        }
    });
    var ctx = document.getElementById('himakom').getContext('2d');
    var himakom = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Prawira Adhisastra', 'Anom Sukawirasa', 'Deva Dimastawan'],
            datasets: [{
                label: 'banyak yg votes',
                data: [22, 79, 46],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(13, 226, 48, 0.2)',
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(13, 226, 48, 1)',
                ],
                borderWidth: 1,
            }]
        },
        options: {
            legend: {
                display: true,
                labels: {
                    fontSize: 26,
                    boxWidth: 26,
                },
            }
        }
    });
    var ctx = document.getElementById('himatika').getContext('2d');
    var himatika = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Aditya Nursana', 'Angga Permana', 'Aulia Wicaksono'],
            datasets: [{
                label: 'banyak yg votes',
                data: [97, 51, 27],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(13, 226, 48, 0.2)',
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(13, 226, 48, 1)',
                ],
                borderWidth: 1,
            }]
        },
        options: {
            legend: {
                display: true,
                labels: {
                    fontSize: 26,
                    boxWidth: 26,
                },
            }
        }
    });
    var ctx = document.getElementById('himafarma').getContext('2d');
    var himafarma = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Harimbawa Putra', 'Bayu Krisnayana', 'Hendra Wijaya'],
            datasets: [{
                label: 'banyak yg votes',
                data: [166, 25, 33],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(13, 226, 48, 0.2)',
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(13, 226, 48, 1)',
                ],
                borderWidth: 1,
            }]
        },
        options: {
            legend: {
                display: true,
                labels: {
                    fontSize: 26,
                    boxWidth: 26,
                },
            }
        }
    });
    var ctx = document.getElementById('himabio').getContext('2d');
    var himabio = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Kanigara Anupama', 'Adi Ariyanto'],
            datasets: [{
                label: 'banyak yg votes',
                data: [35, 73],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)',
                ],
                borderWidth: 1,
            }]
        },
        options: {
            legend: {
                display: true,
                labels: {
                    fontSize: 26,
                    boxWidth: 26,
                },
            }
        }
    });
    var ctx = document.getElementById('himasika').getContext('2d');
    var himasika = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Aditya Jaya', 'Tinggal Yasa'],
            datasets: [{
                label: 'banyak yg votes',
                data: [41, 40],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)',
                ],
                borderWidth: 1,
            }]
        },
        options: {
            legend: {
                display: true,
                labels: {
                    fontSize: 26,
                    boxWidth: 26,
                },
            }
        }
    });
    var ctx = document.getElementById('himaki').getContext('2d');
    var himaki = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Putra Yana', 'Kamas Indrawan'],
            datasets: [{
                label: 'banyak yg votes',
                data: [23, 84],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)',
                ],
                borderWidth: 1,
            }]
        },
        options: {
            legend: {
                display: true,
                labels: {
                    fontSize: 26,
                    boxWidth: 26,
                },
            }
        }
    });


    $(document).ready(function() {
        $(".himakomcanvas").hide();
        $(".himabiocanvas").hide();
        $(".himatikacanvas").hide();
        $(".himafarmacanvas").hide();
        $(".himasikacanvas").hide();
        $(".himakicanvas").hide();
        $(".himakom").click(function() {
            $(".himakicanvas").hide(300);
            $(".himasikacanvas").hide(300);
            $(".himafarmacanvas").hide(300);
            $(".himatikacanvas").hide(300);
            $(".himabiocanvas").hide(300);
            $(".bemcanvas").hide(300);
            $(".himakomcanvas").show(300);
            but = 1;
        })
        $(".himabio").click(function() {
            $(".himakicanvas").hide(300);
            $(".himasikacanvas").hide(300);
            $(".himafarmacanvas").hide(300);
            $(".himatikacanvas").hide(300);
            $(".bemcanvas").hide(300);
            $(".himakomcanvas").hide(300);
            $(".himabiocanvas").show(300);
            but = 2;
        })
        $(".himatika").click(function() {
            $(".himakicanvas").hide(300);
            $(".himasikacanvas").hide(300);
            $(".himafarmacanvas").hide(300);
            $(".himabiocanvas").hide(300);
            $(".bemcanvas").hide(300);
            $(".himakomcanvas").hide(300);
            $(".himatikacanvas").show(300);
            but = 3;
        })
        $(".himafarma").click(function() {
            $(".himakicanvas").hide(300);
            $(".himasikacanvas").hide(300);
            $(".himatikacanvas").hide(300);
            $(".himabiocanvas").hide(300);
            $(".bemcanvas").hide(300);
            $(".himakomcanvas").hide(300);
            $(".himafarmacanvas").show(300);
            but = 4;
        })
        $(".himasika").click(function() {
            $(".himakicanvas").hide(300);
            $(".himafarmacanvas").hide(300);
            $(".himatikacanvas").hide(300);
            $(".himabiocanvas").hide(300);
            $(".bemcanvas").hide(300);
            $(".himakomcanvas").hide(300);
            $(".himasikacanvas").show(300);
            but = 5;
        })
        $(".himaki").click(function() {
            $(".himasikacanvas").hide(300);
            $(".himafarmacanvas").hide(300);
            $(".himatikacanvas").hide(300);
            $(".himabiocanvas").hide(300);
            $(".bemcanvas").hide(300);
            $(".himakomcanvas").hide(300);
            $(".himakicanvas").show(300);
            but = 6;
        })
        $(".bem").click(function() {
            $(".himakicanvas").hide(300);
            $(".himasikacanvas").hide(300);
            $(".himafarmacanvas").hide(300);
            $(".himatikacanvas").hide(300);
            $(".himabiocanvas").hide(300);
            $(".himakomcanvas").hide(300);
            $(".bemcanvas").show(300);
        })
    })
</script>
@endsection