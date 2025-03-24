@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhe do Pagamento')
@section('content')

     <!-- Student Details Area Start Here -->
     <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Detalhe da Disciplina </h3>
                </div>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('admin.classroom.create', $classrooms->id) }}"><i
                                class="fas fa-times text-orange-red"></i>Elimir</a>
                        <a class="dropdown-item" href="{{ route('admin.classroom.edit', $classrooms->id) }}"><i
                                class="fas fa-cogs text-dark-pastel-green"></i>Editar</a>

                    </div>
                </div>
            </div>
            <div class="single-info-details">
                <div class="item-img">
                    <img src="/img/figure/student1.jpg" alt="student">
                </div>
                <div class="item-content">
                    <div class="header-inline item-header">
                        <!-- Student Details Area End Here -->
                        <h3 class="text-dark-medium font-medium">{{ $classrooms->classRoomName }}</h3>
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
                                    <td>Name Completo:</td>
                                    <td class="font-medium text-dark-medium">{{ $classrooms->classRoomName }}</td>
                                </tr>
                                <tr>
                                    <td>Nome do Pai:</td>
                                    <td class="font-medium text-dark-medium">{{ $classrooms->classRoomName }}</td>
                                </tr>
                                <tr>
                                    <td>Nome da Mãe:</td>
                                    <td class="font-medium text-dark-medium">{{ $classrooms->classRoomName }}</td>
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
