@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes de exame')
@section('content')

    <!-- Student Details Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Detalhe do Estudante </h3>
                </div>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('admin.exams.delete', $exams->id) }}"><i
                                class="fas fa-times text-orange-red"></i>Elimir</a>
                        <a class="dropdown-item" href="{{ route('admin.exams.edit', $students->id) }}"><i
                                class="fas fa-cogs text-dark-pastel-green"></i>Editar</a>

                    </div>
                </div>
            </div>
            <div class="single-info-details">
                <div class="item-img">
                    <img src="/storage/{{ $exams->examName }}" alt="student">
                </div>
                <div class="item-content">
                    <div class="header-inline item-header">
                        <!-- Student Details Area End Here -->
                        <h3 class="text-dark-medium font-medium">{{ $exams->examName }}</h3>
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
                                    <td class="font-medium text-dark-medium">{{ $exams->examName}}</td>
                                </tr>
                                <tr>
                                    <td>Nome do Pai:</td>
                                    <td class="font-medium text-dark-medium">{{ $exams->examName }}</td>
                                </tr>
                                <tr>
                                    <td>Nome da Mãe:</td>
                                    <td class="font-medium text-dark-medium">{{$exams->examName }}</td>
                                </tr>
                                <tr>
                                    <td>Identificação:</td>
                                    <td class="font-medium text-dark-medium">{{ $exams->examName }}</td>
                                </tr>
                                <tr>
                                    <td>Data de Emissão:</td>
                                    <td class="font-medium text-dark-medium">{{ $exams->examName }}</td>
                                </tr>
                                <tr>
                                    <td>Data de Nascimento:</td>
                                    <td class="font-medium text-dark-medium">{{ $exams->examName }}</td>
                                </tr>
                                <tr>
                                    <td>Local do Baptismo:</td>
                                    <td class="font-medium text-dark-medium">{{$exams->examName}}</td>
                                </tr>
                                <tr>
                                    <td>Data do Baptismo:</td>
                                    <td class="font-medium text-dark-medium">{{ $exams->examName}}</td>
                                </tr>

                                <tr>
                                    <td>Local da Confirmação:</td>
                                    <td class="font-medium text-dark-medium">{{ $exams->examName }}</td>
                                </tr>
                                <tr>
                                    <td>Data da Confirmação:</td>
                                    <td class="font-medium text-dark-medium">{{ $exams->examName }}</td>
                                </tr>
                                <tr>
                                    <td>Responsavel:</td>
                                    <td class="font-medium text-dark-medium">{{ $exams->examName }}</td>
                                </tr>
                                <tr>
                                    <td>Endereço:</td>
                                    <td class="font-medium text-dark-medium">{{ $exams->examName }}</td>
                                </tr>

                                <tr>
                                    <td>Contactos:</td>
                                    <td class="font-medium text-dark-medium">{{ $exams->examName }}</td>
                                </tr>

                                <tr>
                                    <td>Origem/Paróquia:</td>
                                    <td class="font-medium text-dark-medium">{{ $exams->examName }}</td>
                                </tr>
                                <tr>
                                    <td>Nº de Receseciamento:</td>
                                    <td class="font-medium text-dark-medium">{{ $exams->examName }}</td>
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
