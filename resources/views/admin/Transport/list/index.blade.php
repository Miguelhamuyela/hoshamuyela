@extends('layouts.merge.dashboard')
@section('titulo', 'Transporte')
@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">

            </div>
            <form action="{{ route('admin.transports_seach') }}"method="post">
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
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table comman-shadow">
                        <div class="card-body">
                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal">
                                            Imprimir a Lista de Inscrição
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <form action="{{ route('admin.transports.print') }}" method="post">
                                                    @csrf

                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Coloque aqui o
                                                                Ano Lectivo
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="col-lg-10 col-md-4">
                                                                <div class="form-group">
                                                                    <input required type="text" name="startYear"
                                                                        class="form-control"
                                                                        placeholder="Pesquisar por Ano Lectivo ...">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Fechar</button>
                                                            <button type="submit" class="btn btn-primary">
                                                                Imprimir a Lista </button>
                                                        </div>
                                                    </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                        <a href="{{ route('admin.teachers.create') }}"
                                            class="btn btn-outline-primary me-2"><i class=""></i> Fazer
                                            Nova Inscrição</a>
                                        <a href="{{ route('admin.transports.create') }}" class="btn btn-primary"><i
                                                class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-stripped table-hover datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Marca</th>
                                            <th>Cor</th>
                                            <th>Matricula</th>
                                            <th>Combustivel</th>
                                            <th>acquired</th>
                                            <th>obs</th>
                                            <th class="text-end">Açâo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transports as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->mark }}</td>
                                                <td>{{ $item->color}}</td>
                                                <td>{{ $item->plate }}</td>
                                                <td>{{ $item->fuel }}</td>
                                                <td>{{ $item->acquired }}</td>
                                                <td>{{ $item->obs }}</td>
                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fas fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item"
                                                                href="{{ route('admin.transports.edit', $item->id) }}"><i
                                                                    class="far fa-edit me-2"></i>Editar</a>
                                                            <a class="dropdown-item"
                                                                href="{{ route('admin.transports.show', $item->id) }}"><i
                                                                    class="far fa-eye me-2"></i>Detalhes</a>
                                                            <a class="dropdown-item"
                                                                href="{{ route('admin.transports.delete', $item->id) }}"><i
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
