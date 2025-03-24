@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes da Confirmação')
@section('content')









    <!-- Student Details Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Detalhe da Confirmação </h3>
                </div>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('admin.registration.delete', $registrations->id) }}"><i
                                class="fas fa-times text-orange-red"></i>Elimir</a>
                        <a class="dropdown-item" href="{{ route('admin.registration.edit', $registrations->id) }}"><i
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
                        <h3 class="text-dark-medium font-medium">{{ $registrations->name }}</h3>
                        <div class="header-elements">
                          
                        </div>
                    </div>
                    <hr>
                    <div class="info-table table-responsive">
                        <table class="table text-nowrap">
                            <tbody>
                                <tr>
                                    <td>Name Completo:</td>
                                    <td class="font-medium text-dark-medium">{{ $registrations->name }}</td>
                                </tr>
                                <tr>
                                    <td>Origem do Estudante:</td>
                                    <td class="font-medium text-dark-medium">{{ $registrations->from }}</td>
                                </tr>

                                <tr>
                                    <td>Curso:</td>
                                    <td class="font-medium text-dark-medium">{{ $registrations->courses->name }}</td>
                                </tr>

                                <tr>
                                    <td>Turma:</td>
                                    <td class="font-medium text-dark-medium">{{ $registrations->classes->name }}</td>
                                </tr>

                                <tr>
                                    <td>Nível Académico:</td>
                                    <td class="font-medium text-dark-medium">{{ $registrations->academic_livels->name }}</td>
                                </tr>
                                <tr>
                                    <td>Ano Lectivo:</td>
                                    <td class="font-medium text-dark-medium">{{ $registrations->academic_years->name }}</td>
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
