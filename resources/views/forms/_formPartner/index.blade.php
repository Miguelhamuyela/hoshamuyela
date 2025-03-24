<div class="page-wrapper" style="min-height: 714px;">
    <div class="card invoices-tabs-card border-0">
        <div class="card-body card-body pt-0 pb-0">
            <div class="invoices-main-tabs">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8">
                        <div class="invoices-tabs">
                            <ul>
                                <li>
                                    <a href="{{ route('admin.partners.create') }}" class="active">Adicionar Novo Parceiro</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.partners.index') }}" class="active">Parceiro </a>
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
                                    <span>Adicionar Novo Parceiro</span>
                                </h5>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Nome do Parceiro
                                        <span class="login-danger"></span></label>
                                    <input  required
                                    value="{{ isset($partners->partnerName) ? $partners->partnerName : old('partnerName') }}" type="text" name="partnerName"class="form-control" />
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
                                    <label>Endereço
                                        <span class="login-danger"></span></label>
                                    <input required type="text" name="address"class="form-control" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Email
                                        <span class="login-danger"></span></label>
                                    <input required type="email" name="email"class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <textarea required rows="5" cols="5" name="obs"class="form-control" placeholder="Descrição sobre o Parceiro"></textarea>
                             </div>
                            <div class="col-12">
                            <br>
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
