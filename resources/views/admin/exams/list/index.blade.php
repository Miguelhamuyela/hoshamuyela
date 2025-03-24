@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Exames')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="card invoices-tabs-card border-0">
            <div class="card-body card-body pt-0 pb-0">
                <div class="invoices-main-tabs">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-8">
                            <div class="invoices-tabs">
                                <ul>
                                    <li>
                                        <a href="{{ route("admin.exams.index") }}" class="active">Lista de Exame</a>
                                    </li>
                                    <li>
                                        <a href="{{ route("admin.exams.create") }}" class="active">Cadastro de Novo Exame</a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-stripped table-hover datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Exame</th>
                                        <th>Tipo de Exame</th>
                                        <th>Detalhes do Exames</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($exams as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->examName }}</td>
                                        <td>{{ $item->typeExam }}</td>
                                        <td>{{ $item->obs }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
@endsection

