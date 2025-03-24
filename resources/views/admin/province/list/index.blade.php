@extends('layouts.merge.dashboard')
@section('titulo', 'Sistema de Gestão Bom Pastor')
@section('content')


<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">

                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="{{ route('admin.province.create') }}" class="btn btn-primary"><i
                                            class="">ADICIONAR NOVA PROVINCIA</i></a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table
                                class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>Id</th>
                                        <th>Nome da Provincia</th>
                                        <th>Nome do Município</th>
                                        <th>Observação</th>
                                        <th>Data de Cadastro</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($provinces as $item )
                                    <tr>
                                        <td>{{ $item->id }}
                                        <td>{{ $item->proviceName }}</td>
                                        <td>{{ $item->municipies->municipeName }}</td>
                                        <td>{{ $item->obs }}</td>
                                        <td>{{ $item->created_at }}</td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $provinces->Links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
