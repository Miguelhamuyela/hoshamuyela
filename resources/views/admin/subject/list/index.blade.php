@extends('layouts.merge.dashboard')
@section('titulo', 'Todas as Turmas')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                </div>
            </div>
        </div>

        <div class="card invoices-tabs-card border-0">
            <div class="card-body card-body pt-0 pb-0">
                <div class="invoices-main-tabs">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-8">
                            <div class="invoices-tabs">
                                <ul>
                                    <li>
                                        <a href="#" class="active">Disciplinas</a>
                                    </li>
                                    <li>
                                        <a href="{{ route("admin.subject.create") }}" class="active">Adicionar Nova Disciplina</a>
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
                                        <th>Nome da Disciplina</th>
                                        <th>Curso</th>
                                        <th>Carga Horária Semanal (Horas)</th>
                                        <th>Carga Horária Total (Horas)</th>
                                        <th class="text-end">Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subjects  as $item)
                                    <tr>
                                        <td>
                                            <label class="custom_check">
                                                <input type="checkbox" name="invoice" />
                                                <span class="checkmark"></span>
                                            </label>
                                            <a href="view-invoice.html" class="invoice-link">{{ $item->id }}</a>
                                        </td>
                                        <td>{{ $item->id }}</td>
                                       
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fas fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{ route('admin.subject.edit',$item->id) }}"><i
                                                            class="far fa-edit me-2"></i>Editar</a>
                                                    <a class="dropdown-item" href="{{ route('admin.subject.delete',$item->id) }}"><i
                                                            class="far fa-trash-alt me-2"></i>Apagar</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $subjects->Links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
@endsection



