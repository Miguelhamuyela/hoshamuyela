@extends('layouts.merge.dashboard')
@section('titulo', 'Todas as Turmas')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title"></h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="page-title"> Ano Lectivo</h3>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">

                                        <a href="{{ route('admin.academicYear.create') }}" class="btn btn-primary"><i
                                                class="fas fa-plus">Cadastramento de Novo Ano Lectivo</i></a>
                                    </div>
                                </div>
                            </div>
                            <table
                                class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>
                                            <div class="form-check check-tables">
                                                <input class="form-check-input" type="checkbox" value="something">
                                            </div>
                                        </th>
                                        <th>ID</th>
                                        <th>Ano Lectivo</th>
                                        <th>Observação</th>
                                        <th>Data de Cadastro</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($academic_years as $item)
                                        <tr>
                                            <td>
                                                <div class="form-check check-tables">
                                                    <input class="form-check-input" type="checkbox" value="something">
                                                </div>
                                            </td>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->startYear }}</td>
                                            <td>{{ $item->obs }}
                                           <td>{{ $item->created_at }}
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
    <footer>
        <p>Copyright © 2023 Direito do Autor.</p>
    </footer>
    </div>
    </div>
@endsection


