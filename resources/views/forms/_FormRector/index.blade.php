<div class="page-wrapper" style="min-height: 714px;">
    <div class="card invoices-tabs-card border-0">
        <div class="card-body card-body pt-0 pb-0">
            <div class="invoices-main-tabs">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8">
                        <div class="invoices-tabs">
                            <ul>
                                <li>
                                    <a href="{{ route('admin.rectors.create') }}" class="active">Adicionar Novo Reitor</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.rectors.index') }}" class="active">Reitor </a>
                                </li>
                            </ul>
                        </div>
                    </div>
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
                                <h5 class="form-title">
                                    <span>Adicionar Novo Reitor</span>
                                </h5>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Nome do Reitor
                                        <span class="login-danger"></span></label>
                                    <input  required
                                    value="{{ isset($rectors->name) ? $rectors->name : old('name') }}" type="text" name="name"class="form-control" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Apelido do Reitor
                                        <span class="login-danger"></span></label>
                                    <input required type="text" name="lastName"class="form-control" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Telefone
                                        <span class="login-danger"></span></label>
                                    <input required type="number" name="phone"class="form-control" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Email
                                        <span class="login-danger"></span></label>
                                    <input required type="email" name="email"class="form-control" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Escolaridade
                                        <span class="login-danger"></span></label>
                                    <input required type="text" name="schooling"class="form-control" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Especialidade
                                        <span class="login-danger"></span></label>
                                    <input required type="text" name="specialty"class="form-control" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Inicio de Madanto
                                        <span class="login-danger"></span></label>
                                    <input required type="date" name="beginning"class="form-control" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Fim do Madanto
                                        <span class="login-danger"></span></label>
                                    <input required type="date" name="end"class="form-control" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Ensino Médio(Apenas o Ano Lectivo)
                                        <span class="login-danger"></span></label>
                                    <input required type="text" name="SecondarySchooling"class="form-control" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Ensino Superior(Apenas o Ano Lectivo)
                                        <span class="login-danger"></span></label>
                                    <input required type="text" name="superior"class="form-control" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Lingua
                                        <span class="login-danger"></span></label>
                                    <input type="text" name="language"class="form-control" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Endereço
                                        <span class="login-danger"></span></label>
                                    <input type="text" name="address"class="form-control" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Data de Nascimento
                                        <span class="login-danger"></span></label>
                                    <input type="date" name="dateBirth"class="form-control" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Foto do Reitor
                                        <span class="login-danger"></span></label>
                                    <input required type="file" name="image"class="form-control" />
                                </div>
                            </div>
                            <div class="col-12">
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
