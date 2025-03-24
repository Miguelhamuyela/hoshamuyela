@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Dormitório')
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
                                        <a href="{{ route("admin.rooms.create") }}" class="active">Adicionar Novo Dormitório</a>
                                    </li>
                                    <li>
                                        <a href="{{ route("admin.rooms.index") }}" class="active">Dormitório</a>
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
                                        <th>Nome do Dormitório</th>
                                        <th>Nº de Estudante</th>
                                        <th>Nº de Cama</th>
                                        <th>Descrição</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rooms as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->numberStudent }}</td>
                                        <td>{{ $item->numberBad }}</td>
                                        <td>{{ $item->description }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $rooms->Links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
    @endsection
