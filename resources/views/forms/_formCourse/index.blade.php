<div class="page-wrapper" style="min-height: 714px;">
    <div class="card invoices-tabs-card border-0">


        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Adicionar Novo Curso </h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.course.index') }}">Ver a Lista dos Cursos Cadastrado</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <br><br>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Nome do Curso<span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($courses->courseName) ? $courses->courseName : old('courseName') }}"type="text"
                                            name="courseName"class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Duração do Curso<span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($courses->duration) ? $courses->duration : old('duration') }}"type="text"
                                            name="duration" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Selecionar o Director do Curso<span class="login-danger"></span></label>
                                        <select  name="fk_users_id" class="form-control"
                                            aria-label="Default select example">
                                            <option disabled>Selecionar o Director do Curso</option>
                                            @foreach ($users as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Selecionar a Secção ou Departamento<span class="login-danger"></span></label>
                                        <select
                                            value="{{ isset($departaments->departamentName) ? $departaments->departamentName : old('departamentName') }}"
                                            name="fk_departaments_id" class="form-control"
                                            aria-label="Default select example">
                                            <option disabled>Selecionar o Nome do Departamento</option>
                                            @foreach ($departaments as $item)
                                                <option value="{{ $item->id }}">{{ $item->departamentName }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Inicio do Curso<span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($courses->start) ? $courses->start : old('start') }}"type="text"
                                            name="start"class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Descrição sobre o Curso<span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($courses->obs) ? $courses->obs : old('obs') }}"name="obs"
                                            type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <br>
                                    <div class="student-submit">
                                        <button type="submit" class="btn btn-primary">GUARDAR</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
