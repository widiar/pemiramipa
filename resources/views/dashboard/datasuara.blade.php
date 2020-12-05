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
        <div class="card p-4 my-3 mx-auto" style="width: 90%;">
            <canvas id="myChart" class="bemcanvas"></canvas>
            <div class="bemcanvas">
                <div class="kotak1"></div>
                <h4 class="textbem1 mt-3"></h4>
                <div class="kotak2"></div>
                <h4 class="textbem2 mt-4"></h4>
            </div>
            <canvas id="himakom" class="himakomcanvas"></canvas>
            <div class="himakomcanvas">
                <div class="kotak1"></div>
                <h4 class="textilkom1 mt-3"></h4>
                <div class="kotak2"></div>
                <h4 class="textilkom2 mt-4"></h4>
                <div class="kotak3"></div>
                <h4 class="textilkom3 mt-4"></h4>
            </div>
            <canvas id="himabio" class="himabiocanvas"></canvas>
            <div class="himabiocanvas">
                <div class="kotak1"></div>
                <h4 class="textbio1 mt-3"></h4>
                <div class="kotak2"></div>
                <h4 class="textbio2 mt-4"></h4>
            </div>
            <canvas id="himatika" class="himatikacanvas"></canvas>
            <div class="himatikacanvas">
                <div class="kotak1"></div>
                <h4 class="textmatik1 mt-3"></h4>
                <div class="kotak2"></div>
                <h4 class="textmatik2 mt-4"></h4>
                <div class="kotak3"></div>
                <h4 class="textmatik3 mt-4"></h4>
            </div>
            <canvas id="himafarma" class="himafarmacanvas"></canvas>
            <div class="himafarmacanvas">
                <div class="kotak1"></div>
                <h4 class="textfarmasi1 mt-3"></h4>
                <div class="kotak2"></div>
                <h4 class="textfarmasi2 mt-4"></h4>
                <div class="kotak3"></div>
                <h4 class="textfarmasi3 mt-4"></h4>
            </div>
            <canvas id="himasika" class="himasikacanvas"></canvas>
            <div class="himasikacanvas">
                <div class="kotak1"></div>
                <h4 class="textfisika1 mt-3"></h4>
                <div class="kotak2"></div>
                <h4 class="textfisika2 mt-4"></h4>
            </div>
            <canvas id="himaki" class="himakicanvas"></canvas>
            <div class="himakicanvas">
                <div class="kotak1"></div>
                <h4 class="textkimia1 mt-3"></h4>
                <div class="kotak2"></div>
                <h4 class="textkimia2 mt-4"></h4>
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

    var updateChart = function() {
        $.ajax({
            url: "{{ route('updatechart') }}",
            type: 'GET',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                if (but == 0) {
                    myChart.data.datasets[0].data = [data.data.bem1, data.data.bem2];
                    $(".textbem1").html("Nanda - Winda : " + data.data.bem1);
                    $(".textbem2").html("Kresna - Andriani : " + data.data.bem2);
                    myChart.update();
                } else if (but == 1) {
                    himakom.data.datasets[0].data = [data.data.ilkom1, data.data.ilkom2, data.data.ilkom3];
                    $(".textilkom1").html("Prawira Adhisastra : " + data.data.ilkom1);
                    $(".textilkom2").html("Anom Sukawirasa : " + data.data.ilkom2);
                    $(".textilkom3").html("Deva Dimastawan : " + data.data.ilkom3);
                    himakom.update();
                } else if (but == 2) {
                    himabio.data.datasets[0].data = [data.data.bio1, data.data.bio2];
                    $(".textbio1").html("Kanigara Anupama : " + data.data.bio1);
                    $(".textbio2").html("Adi Ariyanto : " + data.data.bio2);
                    himabio.update();
                } else if (but == 3) {
                    himatika.data.datasets[0].data = [data.data.matik1, data.data.matik2, data.data.matik3];
                    $(".textmatik1").html("Aditya Nursana : " + data.data.matik1);
                    $(".textmatik2").html("Angga Permana : " + data.data.matik2);
                    $(".textmatik3").html("Aulia Wicaksono : " + data.data.matik3);
                    himatika.update();
                } else if (but == 4) {
                    himafarma.data.datasets[0].data = [data.data.farmasi1, data.data.farmasi2, data.data.farmasi3];
                    $(".textfarmasi1").html("Harimbawa Putra : " + data.data.farmasi1);
                    $(".textfarmasi2").html("Bayu Krisnayana : " + data.data.farmasi2);
                    $(".textfarmasi3").html("Hendra Wijaya : " + data.data.farmasi3);
                    himafarma.update();
                } else if (but == 5) {
                    himasika.data.datasets[0].data = [data.data.fisika1, data.data.fisika2];
                    $(".textfisika1").html("Aditya Jaya : " + data.data.fisika1);
                    $(".textfisika2").html("Tinggal Yasa : " + data.data.fisika2);
                    himasika.update();
                } else if (but == 6) {
                    himaki.data.datasets[0].data = [data.data.kimia1, data.data.kimia2];
                    $(".textkimia1").html("Putra Yana : " + data.data.kimia1);
                    $(".textkimia2").html("Kamas Indrawan : " + data.data.kimia2);
                    himaki.update();
                }

            }
        });
    }
    updateChart();
    setInterval(() => {
        updateChart();
    }, 1000);

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