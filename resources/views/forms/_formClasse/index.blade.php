<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="card invoices-tabs-card border-0">


            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Adicionar Nova Turma </h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.classe.index') }}">Ver a Lista das Turmas</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                            <div class="row">
                                <div class="col-12">

                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Adicionar Nova Turma<span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($classes->classeName) ? $classes->classeName : old('classeName') }}"
                                            type="text" name="classeName"class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Nome do Director de Turma<span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($classes->class_director) ? $classes->class_director : old('class_director') }}"
                                            type="text" name="class_director"class="form-control">
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Escplher o Periodo do Curso<span class="login-danger"></span></label>
                                        <select name="timeStudent" class="form-control"
                                            aria-label="Default select example">
                                            <option disabled>Selecione o Periodo</option>
                                            <option>Manhã</option>
                                            <option>Tarde</option>
                                            <option>Noite</option>
                                            @foreach ($courses as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Selecionar o Curso<span class="login-danger"></span></label>
                                        <select required name="fk_course_id" class="form-control"
                                            aria-label="Default select example"required>
                                            <option disabled>Selecione o Curso</option>
                                            @foreach ($courses as $item)
                                                <option value="{{ $item->id }}">{{ $item->courseName }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Nome do Director do Curso<span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($classes->courseDirector) ? $classes->courseDirector : old('courseDirector') }}"
                                            type="text" name="courseDirector"class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Data da Criação da Turma<span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($classes->createDate) ? $classes->createDate : old('createDate') }}"
                                            type="date" name="createDate"class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <textarea required rows="5" cols="5" name="descrition"class="form-control"
                                        placeholder="Descrição sobre a Turma"></textarea>
                                </div>
                                <div class="col-12">
                                    <br><br>
                                    <div class="student-submit">
                                        <button type="submit" class="btn btn-primary">
                                            GUARDAR
                                        </button>
                                    </div>
                                </div>
                            </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
