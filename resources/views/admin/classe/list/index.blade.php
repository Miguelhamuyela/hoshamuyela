@extends('layouts.merge.dashboard')
@section('titulo', 'Todas as Turmas')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">

            <div class="col-auto text-end float-end ms-auto download-grp">
                <a href="{{ route('admin.classe.create') }}" class="btn btn-outline-primary me-2"><i
                        class=""></i>Cadastramento de Nova Turma</a>
                <a href="{{ route('admin.course.create') }}"></i></a>
            </div>
            <div class="row align-items-center">
                <div class="col">
                    <hr>
                    <h3 class="page-title">Adicionar Nova Turma
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
                                        <th>Nome da Turma</th>
                                        <th>Nome do Curso</th>
                                        <th>Periódo</th>
                                        <th>Director de Turma</th>
                                        <th>Data de Criação de Turma</th>
                                        <th class="text-end">Açâo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($classes as $item)
                                    <tr>

                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->classeName }}</td>
                                        <td>{{ $item->courses->courseName }}</td>
                                        <td>{{ $item->timeStudent }}</td>
                                        <td>{{ $item->class_director }}</td>
                                        <td>{{ $item->createDate }}</td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fas fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{ route('admin.classe.edit',$item->id) }}"><i
                                                            class="far fa-edit me-2"></i>Editar</a>
                                                    <a class="dropdown-item" href="{{ route('admin.classe.show',$item->id) }}"><i
                                                            class="far fa-eye me-2"></i>Detalhes</a>
                                                    <a class="dropdown-item" href="{{ route('admin.classe.delete',$item->id) }}"><i
                                                            class="far fa-trash-alt me-2"></i>Apagar</a>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $classes->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
@endsection


