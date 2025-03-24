@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Candidatos')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <form action="{{ route('admin.appetizer_academic_years_seach') }}"method="post">
                <div class="student-group-form">
                    <div class="row">
                        <div class="col-lg-10 col-md-4">
                            <div class="form-group">
                                <input type="text" name="startYear" class="form-control"
                                    placeholder="Pesquisa por Ano Lectivo ...">
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
                                            <a href="{{ route('admin.appetizer_academic_years.create') }}"
                                                class="active">Clica
                                                Nova Inscrição</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.appetizer_academic_years.index') }}" class="active">
                                                Lista
                                                de Inscrição</a>
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
                                            <th>Nome do Reitor</th>
                                            <th>Doador</th>
                                            <th>Produto</th>
                                            <th>Quantidade</th>
                                            <th>Descrição do Produto</th>
                                            <th>Ano Lectivo</th>
                                            <th class="text-end">Açâo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($appetizer_academic_years as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->rectors->name }}
                                                <td>{{ $item->partners->partnerName }}
                                                <td>{{ $item->Productname }}
                                                <td>{{ $item->qty}}
                                                <td>{{ $item->obs}}
                                                <td>{{ $item->startYear }}
                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fas fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item"
                                                                href="{{ route('admin.honor_academic_years.edit', $item->id) }}"><i
                                                                    class="far fa-edit me-2"></i>Editar</a>
                                                            <a class="dropdown-item"
                                                                href="{{ route('admin.honor_academic_years.show', $item->id) }}"><i
                                                                    class="far fa-eye me-2"></i>Detalhes</a>
                                                            <a class="dropdown-item"
                                                                href="{{ route('admin.honor_academic_years.delete', $item->id) }}"><i
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
