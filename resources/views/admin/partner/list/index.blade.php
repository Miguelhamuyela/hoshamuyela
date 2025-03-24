@extends('layouts.merge.dashboard')
@section('titulo', 'Parceiro')
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
                                            <a href="{{ route('admin.partners.create') }}" class="active">Novo Reitor</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.partners.index') }}" class="active"> Lista de Reitor</a>
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
                                            <th>Nome do Parceiro</th>
                                            <th>Apelido</th>
                                            <th>Telefone</th>
                                            <th>Endereço</th>
                                            <th>Email</td>
                                            <th>descrição</td>
                                            <th class="text-end">Açâo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($partners as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->partnerName }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>{{ $item->address }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->obs }}</td>
                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fas fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item"
                                                                href="{{ route('admin.partners.edit', $item->id) }}"><i
                                                                    class="far fa-edit me-2"></i>Editar</a>
                                                            <a class="dropdown-item"
                                                                href="{{ route('admin.partners.show', $item->id) }}"><i
                                                                    class="far fa-eye me-2"></i>Detalhes</a>
                                                            <a class="dropdown-item"
                                                                href="{{ route('admin.partners.delete', $item->id) }}"><i
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
