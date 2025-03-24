@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Sala de Aula')
@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">

                <div class="col-auto text-end float-end ms-auto download-grp">
                    <a href="{{ route('admin.course.create') }}" class="btn btn-outline-primary me-2"><i
                            class=""></i>Cadastramento de Nova Sala de Aula</a>
                    <a href="{{ route('admin.classroom.create') }}"></i></a>
                </div>
                <div class="row align-items-center">
                    <div class="col">
                        <hr>
                        <h3 class="page-title">Adicionar Nova Sala de Aula
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
                                            <th>Id</th>
                                            <th>Nome da Sala de Aula</th>
                                            <th>Número de Carteira</th>
                                            <th>Descrição da Sala</th>
                                            <th>Data de Cadastro</th>
                                            <th class="text-end">Açâo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($classrooms as $item)
                                        <tr>
                                            <td>{{ $item->id}}</td>
                                            <td>{{ $item->classRoomName }}</td>
                                            <td>{{ $item->spacenumber }}</td>
                                            <td>{{ $item->obs }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="{{ route('admin.classroom.edit',$item->id) }}"><i
                                                                class="far fa-edit me-2"></i>Editar</a>
                                                        <a class="dropdown-item" href="{{ route('admin.classroom.show',$item->id) }}"><i
                                                                class="far fa-eye me-2"></i>Detalhes</a>
                                                        <a class="dropdown-item" href="{{ route('admin.classroom.delete',$item->id) }}"><i
                                                                class="far fa-trash-alt me-2"></i>Apagar</a>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $classrooms->Links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>
@endsection
