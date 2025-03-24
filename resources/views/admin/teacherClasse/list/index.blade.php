@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Turma')
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
            <form action="{{ route('admin.teacher_classes_seach') }}"method="post">
                <div class="student-group-form">
                    <div class="row">
                        <div class="col-lg-10 col-md-4">
                            <div class="form-group">
                                <input type="text" name="classeName" class="form-control"
                                    placeholder="Pesquisar  por Turma ...">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="search-student-btn">
                                <button type="btn" class="btn btn-primary">PESQUISA</button>
                            </div>
                        </div>
                    </div>
                </div>
                @csrf
            </form>
            <div class="card invoices-tabs-card border-0">
                <div class="card-body card-body pt-0 pb-0">
                    <div class="invoices-main-tabs">
                        <div class="row align-items-center">
                            <div class="col-lg-8 col-md-8">
                                <div class="invoices-tabs">
                                    <ul>
                                        <li>
                                            <a href="#" class="active">Estudante Adicionado
                                                Numa Turma</a>
                                        </li>
                                        <li>
                                            <a href="{{ route("admin.teacher_classes.create") }}" class="active">Adicionar  Estudante Numa Turma</a>
                                        </li>
                                        <li>
                                            <a href="{{ route("admin.teacher_classes.report") }}" class="active">Imprimir a Turma</a>
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
                                            <th>Professor</th>
                                            <th>Turma</th>
                                            <th>Curso</th>
                                            <th>Inicio de Aula</th>
                                            <th>Fim de Aula</th>
                                            <th>Periódo</th>
                                            <th class="text-end">Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($teacher_classes as $item)
                                            <tr>
                                                <td>
                                                    <label class="custom_check">
                                                        <input type="checkbox" name="invoice" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <a href="view-invoice.html"
                                                        class="invoice-link">{{ $item->id }}</a>
                                                </td>
                                                <td>{{ $item->teachers->name }}</td>
                                                <td>{{ $item->classeName }}</td>
                                                <td>{{ $item->courses->courseName }}</td>
                                                <td>{{ $item->start }}</td>
                                                <td>{{ $item->end }}</td>
                                                <td>{{ $item->period }}</td>
                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fas fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item"
                                                                href="{{ route('admin.teacher_classes.edit', $item->id) }}"><i
                                                                    class="far fa-edit me-2"></i>Editar</a>
                                                            <a class="dropdown-item"
                                                                href="{{ route('admin.teacher_classes.show', $item->id) }}"><i
                                                                    class="far fa-eye me-2"></i>Detalhes</a>
                                                            <a class="dropdown-item"
                                                                href="{{ route('admin.teacher_classes.delete', $item->id) }}"><i
                                                                    class="fa fa-trash"></i>Apagar</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="far fa-copy me-2"></i>Clone
                                                                Invoice</a>
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
