@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhe do Pagamento')
@section('content')

    <!-- Student Details Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Detalhe do Pagamento </h3>
                </div>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('admin.payment.create', $payments->id) }}"><i
                                class="fas fa-times text-orange-red"></i>Elimir</a>
                        <a class="dropdown-item" href="{{ route('admin.payment.edit', $payments->id) }}"><i
                                class="fas fa-cogs text-dark-pastel-green"></i>Editar</a>

                    </div>
                </div>
            </div>
            <div class="single-info-details">
                <div class="item-img">
                    <img src="/storage/{{ $payments->image }}" alt="student" width="400">
                </div>
                <div class="item-content">
                    <div class="header-inline item-header">
                        <!-- Student Details Area End Here -->
                        <h3 class="text-dark-medium font-medium">{{ $payments->name }}</h3>
                        <div class="header-elements">
                            <ul>
                                <li><a href="{{ route('admin.payments.report') }}">Imprimir<i class="fas fa-print"></i></a></li>
                                <li><a href="#">Baixar<i class="fas fa-download"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="info-table table-responsive">
                        <table class="table text-nowrap">
                            <tbody>
                                <tr>
                                    <td>Name Completo:</td>
                                    <td class="font-medium text-dark-medium">{{ $payments->name }}</td>
                                </tr>
                                <tr>
                                    <td>Curso:</td>
                                    <td class="font-medium text-dark-medium">{{ $payments->name }}</td>
                                </tr>

                                <tr>
                                    <td>Valor Pago:</td>
                                    <td class="font-medium text-dark-medium">{{ $payments->name }}</td>
                                </tr>
                                <tr>
                                    <td>Mês do Pagamento:</td>
                                    <td class="font-medium text-dark-medium">{{ $payments->month }}</td>
                                </tr>

                                <tr>
                                    <td>Forma de Pagamento:</td>
                                    <td class="font-medium text-dark-medium">{{ $payments->paymentForm }}</td>
                                </tr>
                                <tr>
                                    <td>Ano Lectivo:</td>
                                    <td class="font-medium text-dark-medium">{{ $payments->academic_years->name }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Student Details Area End Here -->







@endsection
