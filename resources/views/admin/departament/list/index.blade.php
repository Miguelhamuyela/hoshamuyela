@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Departamento')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">

            <div class="col-auto text-end float-end ms-auto download-grp">
                <a href="{{ route('admin.departments.create') }}" class="btn btn-outline-primary me-2"><i
                        class=""></i>Cadastramento de Novo Departamento</a>
                <a href="{{ route('admin.departments.create') }}"></i></a>
            </div>
            <div class="row align-items-center">
                <div class="col">
                    <hr>
                    <h3 class="page-title">Adicionar Novo Departamento
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
                                        <th>Nome do Departamento</th>
                                        <th>Chefe do Departamento</th>
                                        <th>Observação</th>
                                        <th class="text-end">Açâo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($departaments as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->departamentName }}</td>
                                        <td>{{ $item->headDepartment }}</td>
                                        <td>{{ $item->obs }}</td>


                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fas fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{ route('admin.departments.edit',$item->id) }}"><i
                                                            class="far fa-edit me-2"></i>Editar</a>
                                                    <a class="dropdown-item" href="{{ route('admin.departments.delete',$item->id) }}"><i
                                                            class="far fa-trash-alt me-2"></i>Apagar</a>

                                                </div>
                                            </div>
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
