<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Relatório</title>
</head>

<body style='height:auto; width:100%; background: url("/dashboard/assets/img/digital.canvas.png") no-repeat center;'>
    <header class="col-12 mt-2 mb-5">
        <h6 class="text-center"><img src="dashboard/assets/img/logo-small.png" alt="" width="150"></h6>
        <p>
        <h4 class="text-center">DIOCESE DE BENGUELA</h4>
        <h6 class="text-center">SEMINÁRIO MAIOR DO BOM PASTOR</h6>
        <h6 class="text-center">SECÇÃO DE FILOSOFIA</h6>
        <h6 class="text-center">Angola</h6>
        <h5 class="text-center">Estudante Direito a Transporte</h5>
        <b>Data:</b> {{ date('d-m-Y') }}
        <hr>
        <br>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="table-responsive">
                        <section class="col-12">
                            <table class="table table-stripped table-hover datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Estudante</th>
                                        <th>Telefone do<br>Estudante</th>
                                        <th>Nome do<br> Motorista</th>
                                        <th>Telefone do<br>Motorista</th>
                                        <th>Nome da Routa</th>
                                        <th>Curso</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transport_academic_years as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->students->name }}</td>
                                            <td>{{ $item->students->tel }}
                                            <td>{{ $item->driverName }}</td>
                                            <td>{{ $item->drive_tel }}</td>
                                            <td>{{ $item->routeName }}</td>
                                            <td>{{ $item->courses->courseName }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
