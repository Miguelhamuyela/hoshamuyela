@extends('layouts.merge.dashboard')
@section('titulo', 'Lista da Confirmação')
@section('content')
    <div class="card height-auto">

        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">

                <ul>
                    <li>
                        <a href="{{ route('admin.home') }}"><h3>Inicio</h3></a>
                    </li>
                    <li> <h3>Lista de Confirmação</h3></li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->



            <!-- Student Table Area Start Here -->
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
                                    <th>Foto</th>
                                    <th>Nome</th>
                                    <th>Origem</th>
                                    <th>Curso</th>
                                    <th>Turma</th>
                                    <th>Nível Académico</th>
                                    <th>Ano Lectivo</th>


                                    <th></th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($registrations as $item)
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">{{ $item->id }}</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="/img/figure/student6.png" alt="student"></td>
                                        <td>{{ $item->student->name }}</td>
                                        <td>{{ $item->from }}</td>
                                        <td>{{ $item->courses->name }}</td>
                                        <td>{{ $item->classes->name }}</td>
                                        <td>{{ $item->academic_livels->name }}</td>
                                        <td>{{ $item->academic_years->name }}</td>


                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.registration.delete', $item->id) }}"><i
                                                            class="fas fa-times text-orange-red"></i>Eliminar</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.registration.edit', $item->id) }}"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Editar</a>

                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.registration.show', $item->id) }}"><i
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
