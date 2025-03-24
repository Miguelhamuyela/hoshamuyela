@extends('layouts.merge.dashboard')
@section('titulo', 'Lista dos Cursos')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title"></h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <form action="{{ route('admin.teacher_subjects_seach') }}"method="post">
            <div class="student-group-form">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search by ID ...">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input type="text"  name="subjectName" class="form-control" placeholder="Pesquisa por Disciplina ...">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                            <input type="text"  name="tel"class="form-control" placeholder="Search by Year ...">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="search-student-btn">
                            <button type="btn" class="btn btn-primary">PESQUISA</button>
                        </div>
                    </div>
                </div>
            </div>
            @csrf
        </form>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="page-title">MATRICULADOS</h3>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                        <a href="#" class="btn btn-outline-primary me-2"><i
                                                class="fas fa-download"></i> Download</a>
                                        <a href="{{ route('admin.teacher_subjects.create') }}" class="btn btn-primary"><i
                                                class="fas fa-plus">FAZER MATRICULA</i></a>
                                    </div>
                                </div>
                            </div>
                            <table
                                class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>
                                            <div class="form-check check-tables">
                                                <input class="form-check-input" type="checkbox" value="something">
                                            </div>
                                        </th>
                                        <th>name</th>
                                        <th>Contacto</th>
                                        <th>Curso</th>
                                        <th>Nível <br>Académico</th>
                                        <th>Turma do Aluno</th>
                                        <th>Ano<br> Lectivo</th>
                                        <th class="text-end">Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teacher_subjects as $item)
                                        <tr>
                                            <td>
                                                <div class="form-check check-tables">
                                                    <input class="form-check-input" type="checkbox" value="something">
                                                </div>
                                            </td>
                                            <td>{{ $item->teachers->name }}</td>
                                            <td>{{ $item->teachers->tel }}</td>
                                            <td>{{ $item->courses->courseName }}</td>
                                            <td>{{ $item->startYear }}</td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    <a href="edit-department.html" class="btn btn-sm bg-danger-light">
                                                        <i class="feather-edit"></i>
                                                    </a>
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
        </div>
    </div>
    <footer>
        <p>Copyright © 2023 Direito do Autor.</p>
    </footer>
    </div>
    </div>
@endsection
