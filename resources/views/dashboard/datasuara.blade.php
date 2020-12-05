@extends('masterTemplate.usermaster')

@section('title','Pemira FMIPA')
@section('content-header', 'Data Suara')

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
            <canvas id="himakom" class="himakomcanvas"></canvas>
            <canvas id="himabio" class="himabiocanvas"></canvas>
            <canvas id="himatika" class="himatikacanvas"></canvas>
            <canvas id="himafarma" class="himafarmacanvas"></canvas>
            <canvas id="himasika" class="himasikacanvas"></canvas>
            <canvas id="himaki" class="himakicanvas"></canvas>
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
            labels: ['Calon BEM 1', 'Calon BEM 2'],
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
            labels: ['Calon Himakom 1', 'Calon Himakom 2', 'Calon Himakom 3'],
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
            labels: ['Calon Himatika 1', 'Calon Himatika 2', 'Calon Himatika 3'],
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
            labels: ['Calon Himafarma 1', 'Calon Himafarma 2', 'Calon Himafarma 3'],
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
            labels: ['Calon Himabio 1', 'Calon Himabio 2'],
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
            labels: ['Calon Himasika 1', 'Calon Himasika 2'],
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
            labels: ['Calon himaki 1', 'Calon himaki 2'],
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
                    myChart.update();
                } else if (but == 1) {
                    himakom.data.datasets[0].data = [data.data.ilkom1, data.data.ilkom2, data.data.ilkom3];
                    himakom.update();
                } else if (but == 2) {
                    himabio.data.datasets[0].data = [data.data.bio1, data.data.bio2];
                    himabio.update();
                } else if (but == 3) {
                    himatika.data.datasets[0].data = [data.data.matik1, data.data.matik2, data.data.matik3];
                    himatika.update();
                } else if (but == 4) {
                    himafarma.data.datasets[0].data = [data.data.farmasi1, data.data.farmasi2, data.data.farmasi3];
                    himafarma.update();
                } else if (but == 5) {
                    himasika.data.datasets[0].data = [data.data.fisika1, data.data.fisika2];
                    himasika.update();
                } else if (but == 6) {
                    himaki.data.datasets[0].data = [data.data.kimia1, data.data.kimia2];
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