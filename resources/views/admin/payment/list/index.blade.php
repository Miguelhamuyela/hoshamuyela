@extends('layouts.merge.dashboard')
@section('titulo', 'Lista dos Professores')
@section('content')
<div class="card height-auto">

    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">

            <ul>
                <li>
                    <a href="{{ route('admin.home') }}">
                    </a>
                </li>
                <li>
                    <h3>Lista de Pagamentos</h3>
                </li>
            </ul>
        </div>

        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">

                </div>


                <div class="table-responsive">
                    <table class="table display data-table text-nowrap">
                        <thead>
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input checkAll">
                                        <label class="form-check-label">ID</label>
                                    </div>
                                </th>

                                <th>Nome</th>
                                <th>Curso</th>
                                <th>Valor Pago</th>
                                <th>Mês Pago</th>
                                <th>Referêcia</th>
                                <th>Ano Lectivo</th>

                                <th></th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($payments as $item)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label">{{ $item->id }}</label>
                                        </div>
                                    </td>

                                    <td>{{ $item->student->name }}</td>
                                    <td>{{ $item->courses->name }}
                                    <td>{{ $item->coursePrice }}
                                    <td>{{ $item->month }}</td>
                                    <td>{{ $item->reference }}</td>
                                    <td>{{ $item->academic_years->name }}


                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.payment.delete', $item->id) }}"><i
                                                        class="fas fa-times text-orange-red"></i>Eliminar</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.payment.edit', $item->id) }}"><i
                                                        class="fas fa-cogs text-dark-pastel-green"></i>Editar</a>

                                                <a class="dropdown-item"
                                                    href="{{ route('admin.payment.show', $item->id) }}"><i
                                                        class="fas fa-redo-alt text-orange-peel"></i>Detalhes</a>
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

@endsection
