@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Municipio')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h4 class="page-title">Adicionar Novo Município</h4>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.municipe.create') }}">Ver a Listagem de Município</a>
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
                                <table
                                    class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                    <thead class="student-thread">
                                        <tr>
                                             <th>Id</th>
                                            <th>Nome do Municipio</th>
                                            <th>Observação</th>
                                            <th>Data de Cadastro</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($municipies as $item)
                                            <tr>
                                                <td>{{ $item->id }}
                                                <td>{{ $item->municipeName }}</td>
                                                <td>{{ $item->obs }}</td>
                                                <td>{{ $item->created_at }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $municipies->Links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endsection
