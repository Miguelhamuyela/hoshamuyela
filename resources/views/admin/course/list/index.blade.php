@extends('layouts.merge.dashboard')
@section('titulo', 'Lista dos Cursos')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">

            <div class="col-auto text-end float-end ms-auto download-grp">
                <a href="{{ route('admin.course.create') }}" class="btn btn-outline-primary me-2"><i
                        class=""></i>Cadastramento de Novo Curso</a>
                <a href="{{ route('admin.course.create') }}"></i></a>
            </div>
            <div class="row align-items-center">
                <div class="col">
                    <hr>
                    <h3 class="page-title">Adicionar Novo Curso
                        <hr>
                    </h3>
                    <hr>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#"></a>
                        </li>
                    </ul>
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
                                        <th>Nome do Curso</th>
                                        <th>Inicio do Curso</th>
                                        <th>Duração do Curso</th>
                                        <th>Departamento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $item)
                                    <tr>
                                        <td>
                                            <a href="view-invoice.html" class="invoice-link">{{ $item->id }}</a>
                                        </td>
                                        <td>{{ $item->courseName }}</td>
                                        <td>{{ $item->start }}</td>
                                        <td>{{ $item->duration }}</td>
                                        <td>{{ $item->departaments->departamentName}}</td>


                                        <td class="text-end">
                                        </td>
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

