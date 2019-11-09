@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5">

    <!-- Heading -->
    <div class="card mb-4 wow fadeIn" style="display: none;">
        <div class="card-body d-sm-flex justify-content-between">
            <h4 class="mb-2 mb-sm-0 pt-1">
                <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Home Page</a>
                <span>/</span>
                <span>Dashboard</span>
            </h4>
            <form class="d-flex justify-content-center">
                <input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
                <button class="btn btn-primary btn-sm my-0 p" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- Heading -->
    <!--Grid row-->
    <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header secondary-color white-text">
                    <h3>App Item Statistics</h3>
                </div>
                <div class="card-body">
                    <canvas id="appStatChart"></canvas>
                </div>
            </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header secondary-color white-text">
                    <h3>Doughnut View</h3>
                </div>
                <div class="card-body">
                    <canvas id="appStatDoughnut"></canvas>
                </div>
            </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <canvas id="canvas"></canvas>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <canvas id="userChartCanvas"></canvas>
                </div>
            </div>
        </div>

    </div>
</div>

@push('scripts')
<script>
    {{-- Setting chart data --}}
    var data = {
        labels: ['Courses', 'Chapters', 'Questions', 'Users'],
        datasets: [{
            label: '# of Items',
            data: [{{ $courseCount }}, {{ $chapterCount }}, {{ $questionCount }}, {{ $userCount }}],
            backgroundColor: ['#F7464A', '#ef6c00', '#01579B', '#00b0ff', '#ff8f00'],
            hoverBackgroundColor: ['#6a1b9a', '#0091ea', '#0091ea', '#6a1b9a', '#0091ea']
        }]
    };

    $(document).ready(function(){
        // BarChart
        var ctxD = document.getElementById("appStatChart").getContext('2d');
        var myLineChart = new Chart(ctxD, {
            type: 'bar',
            data: data,
            options: {
                responsive: true,
                labels:['Courses', 'Chapters', 'Questions', 'Users']
            }
        });

        // Doughnut Chart
        var ctx = document.getElementById("appStatDoughnut").getContext('2d');
        var myLineChart = new Chart(ctx, {
            type: 'doughnut',
            data: data,
            options: {
                responsive: true,
            }
        });


        // CanvasSecond
        var url = "{{url('dashboard/chartsecond')}}";
        $.get(url, function(response){
            var Sun = response.Sun || 0;
            var Mon = response.Mon || 0;
            var Tues = response.Tues || 0;
            var Wed = response.Wed || 0;
            var Thurs = response.Thurs || 0;
            var Fri = response.Fri || 0;
            var Sat = response.Sat || 0;
            var ctxD = document.getElementById("canvas").getContext('2d');
            var myLineChart = new Chart(ctxD, {
                type: 'line',
                data: {
                    labels: ['Sunday', 'Monday', 'Tuesday','Wednesday', 'Thursday', 'Friday', 'Saturday'],
                    datasets: [{
                        label: "Chapters Statistics",
                        data: [Sun, Mon, Tues, Wed, Thurs, Fri, Sat],
                        backgroundColor: ['#e1bee7',],
                        borderColor: ['#ab47bc'],
                        borderWidth: 1,
                        hoverBackgroundColor: '#c2185b '
                    },

                    ]

                },
                options: {
                    responsive: true,
                    scales: {
                        xAxes: [{
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    },
                }
            });
        });

        function drawUserChartCanvas() {
            var userChartCanvas = $('#userChartCanvas');
            var myPregressChart = new Chart(userChartCanvas, {
                type: 'line',
                data: {
                    labels:[
                    @foreach ($joinedUsers as $users)
                    '{{ $users->date }}',
                    @endforeach
                    ],
                    datasets: [
                    {
                        label: "New Users",
                        data: [
                        @foreach ($joinedUsers as $users)
                        '{{ $users->count }}',
                        @endforeach
                        ],
                        backgroundColor: ['rgba(255, 255, 255, 0)',],
                        borderColor: ['rgba(51, 181, 229, 1)'],
                        borderWidth: 1,
                    },
                    ]
                },
                options: {
                    responsive: true,
                    scales: {
                        xAxes: [{
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    },
                }
            });
        }

        // Initialize
        drawUserChartCanvas();


    });
</script>
@endpush
@endsection
