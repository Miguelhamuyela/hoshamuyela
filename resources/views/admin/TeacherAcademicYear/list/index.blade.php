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
            <form action="{{ route('admin.teacher_academic_years_seach') }}"method="post">
                <div class="student-group-form">
                    <div class="row">
                        <div class="col-lg-10 col-md-4">
                            <div class="form-group">
                                <input type="text" name="startYear" class="form-control"
                                    placeholder="Pesquisar por Ano Lectivo ...">
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
                                            <a href="#" class="active">Professor
                                                Admitido</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.teacher_academic_years.create') }}" class="active">Adicionar
                                                Professor ao Ano Lectivo</a>
                                        </li>

                                        <li>

                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModal">
                                                Imprimir Lista
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="{{ route('admin.teacher_academic_years.print.show') }}"
                                                        method="post">
                                                        @csrf

                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Imprimir a Lista
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="col-lg-10 col-md-4">
                                                                    <div class="form-group">
                                                                        <input type="text" name="startYear"
                                                                            class="form-control"
                                                                            placeholder="Pesquisar por Ano Lectivo ...">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Fechar</button>
                                                                <button type="submit" class="btn btn-primary">
                                                                    Imprimir</button>
                                                            </div>
                                                        </div>
                                                </div>
                                                </form>
                                            </div>
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
                                            <th>Telefone</th>
                                            <th>Disciplina</th>
                                            <th>Entrada</th>
                                            <th>Saída</th>
                                            <th>Periódo</th>
                                            <th>Descrição</th>
                                            <th class="text-end">ACÇÃES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($teacher_academic_years as $item)
                                            <tr>
                                                <td>
                                                    <a href="view-invoice.html" class="invoice-link">{{ $item->id }}</a>
                                                </td>
                                                <td>{{ $item->teachers->name }}</td>
                                                <td>{{ $item->teachers->tel }}
                                                <td>{{ $item->subjects->subjectName }}</td>
                                                <td>{{ $item->startTime }}</td>
                                                <td>{{ $item->endTime }}</td>
                                                <td>{{ $item->period }}</td>
                                                <td>{{ $item->description }}</td>
                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fas fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">

                                                            <a class="dropdown-item"
                                                                href="{{ route('admin.teacher_academic_years.show', $item->id) }}"><i
                                                                    class="far fa-eye me-2"></i>Lista Geral</a>
                                                                    <a class="dropdown-item"
                                                                    href="{{ route('admin.teacher_academic_years.delete', $item->id) }}"><i
                                                                        class="far fa-eye me-2"></i>delete</a>
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
