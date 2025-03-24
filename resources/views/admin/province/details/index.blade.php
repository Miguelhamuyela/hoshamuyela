@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes da Província')
@section('content')









    <!-- Student Details Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Detalhe do Provincia </h3>
                </div>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('admin.province.create', $provinces->id) }}"><i
                                class="fas fa-times text-orange-red"></i>Eliminar</a>
                        <a class="dropdown-item" href="{{ route('admin.province.edit', $provinces->id) }}"><i
                                class="fas fa-cogs text-dark-pastel-green"></i>Editar</a>

                    </div>
                </div>
            </div>
            <div class="single-info-details">
                <div class="item-img">
                    <img src="/storage/{{ $provinces->image }}" alt="student" width="400">
                </div>
                <div class="item-content">
                    <div class="header-inline item-header">
                        <!-- Student Details Area End Here -->
                        <h3 class="text-dark-medium font-medium">{{ $provinces->name }}</h3>
                        <div class="header-elements">
                            <ul>
                                <li><a href="#">Imprimir<i class="fas fa-print"></i></a></li>
                                <li><a href="#">Baixar<i class="fas fa-download"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="info-table table-responsive">
                        <table class="table text-nowrap">
                            <tbody>
                                <tr>
                                    <td>Name da Provincia:</td>
                                    <td class="font-medium text-dark-medium">{{ $provinces->name }}</td>
                                </tr>
                                <tr>
                                    <td>Data:</td>
                                    <td class="font-medium text-dark-medium">{{ $provinces->created_at }}</td>
                                </tr>

                                <tr>
                                    <td>Apagado:</td>
                                    <td class="font-medium text-dark-medium">{{ $provinces->deleted_at }}</td>
                                </tr>

                                <tr>
                                    <td>Actualidado:</td>
                                    <td class="font-medium text-dark-medium">{{ $provinces->updated_at }}</td>
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
