@extends('masterTemplate.master')

@section('meta')
<!-- <meta http-equiv="refresh" content="5" /> -->
@endsection
@section('title','PRESMA')
@section('content-header', 'Data Suara BEM')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="isi" style="position: relative; height:100%; width:100%">
            <canvas id="myChart"></canvas>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Calon BEM 1', 'Calon BEM 2'],
            datasets: [{
                label: '# of Votes',
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
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
                myChart.data.datasets[0].data = [data.data.bem1, data.data.bem2];
                myChart.update();
            }
        });
    }
    updateChart();
    setInterval(() => {
        updateChart();
    }, 1000);
</script>
@endsection