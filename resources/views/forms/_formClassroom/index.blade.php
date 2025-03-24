<div class="page-wrapper" style="min-height: 714px;">
    <div class="card invoices-tabs-card border-0">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Adicionar Nova Salade Aula </h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.classroom.index') }}">Ver a Lista de Sala de Aula</a>
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
                                        <label>Nome da Sala<span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($classrooms->classRoomName) ? $classrooms->classRoomName : old('classRoomName') }}"
                                            name="classRoomName" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Número de carteira<span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($classrooms->spacenumber) ? $classrooms->spacenumber : old('spacenumber') }}"
                                            name="spacenumber" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <textarea required
                                    value="{{ isset($classrooms->descrition) ? $classrooms->descrition : old('descrition') }}"
                                        rows="5" cols="5" name="obs"class="form-control" placeholder="Descrição a sobre Nova Sala de Aula"></textarea>
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
