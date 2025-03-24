<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Adicionar Novo Departmento ou Secção</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.departments.index') }}">Ver a Lista dos Departamento ou Secção</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title">

                                    </h5>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Nome do Departamento ou Secção<span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($departaments->departamentName) ? $departaments->departamentName : old('departamentName') }}"
                                            type="text" name="departamentName"class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Chefe do Departamento ou Secção<span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($departaments->headDepartment) ? $departaments->headDepartment : old('headDepartment') }}"
                                            type="text" name="headDepartment"class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <textarea required value="{{ isset($departaments->obs) ? $departaments->obs : old('obs') }}" rows="5"
                                        cols="5" name="obs"class="form-control" placeholder="Descrição sobre o Departamento"></textarea>
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
