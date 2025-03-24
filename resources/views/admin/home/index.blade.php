@extends('layouts.merge.dashboard')
@section('titulo', 'Dashboard')
@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                                <marquee>SEJA BEM-VINDO SIGEBP DE BENGUELA!</marquee>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Estudantes Inscritos</h6>
                                    <h3>{{ $student }}</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="/dashboard/assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Estudantes Finalistas</h6>
                                    <h3>{{ $finalist_academic_years }}</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="/dashboard/assets/img/icons/dash-icon-02.svg" alt="Dashboard Icon" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Secção ou Departamento</h6>
                                    <h3>{{ $departaments }}</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="/dashboard/assets/img/icons/dash-icon-03.svg" alt="Dashboard Icon" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Revenue</h6>
                                    <h3>$505</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="/dashboard/assets/img/icons/dash-icon-04.svg" alt="Dashboard Icon" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 col-lg-12">
                    <div class="card card-chart">

                        <div class="card-body">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Estatísticas de Matricula do ano @if (isset($date))
                                            {{ $date }}
                                        @else
                                            {{ date('Y') }}
                                        @endif
                                    </h3><br>
                                    <div class="card-options">
                                        </h6>
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <form action="{{ route('admin.student_academic_years_seach') }}" method="POST">
                                        @csrf
                                        <label for="year">Pesquise por Ano</label>
                                        <input type="search" class="form-control" placeholder="Digite o ano"
                                            id="year" name="startYear" required autofocu />
                                    </form>
                                </div>



                                <div class="table-responsive m-2" style="height: 450px;  ">
                                    <canvas id="myChart1" style="height: 184px; width: 457px; display: block; box-sizing: border-box;" width="814" height="250"></canvas>
                            </div>






                            </div>
                        </div>

                        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>


                        <script>
                            var jan = JSON.parse('<?php echo $jan; ?>');
                            var fev = JSON.parse('<?php echo $fev; ?>');
                            var mar = JSON.parse('<?php echo $mar; ?>');
                            var abr = JSON.parse('<?php echo $abr; ?>');
                            var maio = JSON.parse('<?php echo $maio; ?>');
                            var jun = JSON.parse('<?php echo $jun; ?>');
                            var jul = JSON.parse('<?php echo $jul; ?>');
                            var ago = JSON.parse('<?php echo $ago; ?>');
                            var set = JSON.parse('<?php echo $set; ?>');
                            var out = JSON.parse('<?php echo $out; ?>');
                            var nov = JSON.parse('<?php echo $nov; ?>');
                            var dez = JSON.parse('<?php echo $dez; ?>');
                            const ctx = document.getElementById('myChart1').getContext('2d');
                            const myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ['Janeiro', 'Fevereiro ', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Ago', 'Setembro',
                                        'Outubro', 'Novembro', 'Dezembro'
                                    ],
                                    datasets: [{
                                        label: 'números de cadastro',
                                        data: [jan, fev, mar, abr, maio, jun, jul, ago, set, out, nov, dez],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)',
                                            'rgba(254, 159, 64, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)',
                                            'rgba(254, 159, 64, 0.2)'
                                        ],
                                        borderWidth: 2
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        </script>




                    </div>
                </div>
            </div>
        </div>
    </div>


    <br><br><br><br><br>
    <footer>
        <p>Copyright © 2022 Dreamguys.</p>
    </footer>
    </div>
    </div>


@endsection
