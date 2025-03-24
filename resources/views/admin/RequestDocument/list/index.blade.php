@extends('layouts.merge.dashboard')
@section('titulo', 'Lista dos Cursos')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">

            <div class="col-auto text-end float-end ms-auto download-grp">
                <a href="{{ route('admin.request_documents.create') }}" class="btn btn-outline-primary me-2"><i
                        class=""></i>Cadastramento de Novo Tipo de Documento</a>
                <a href="{{ route('admin.request_documents.create') }}"></i></a>
            </div>
            <div class="row align-items-center">
                <div class="col">
                    <hr>
                    <h3 class="page-title">Adicionar Novo  Tipo de Documento
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
                                        <th>Tipo de Documento</th>
                                        <th>Descrição</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($request_documents as $item)
                                    <tr>
                                        <td>
                                            <a href="view-invoice.html" class="invoice-link">{{ $item->id }}</a>
                                        </td>
                                        <td>{{ $item->requestName }}</td>
                                        <td>{{ $item->obs }}</td>
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

