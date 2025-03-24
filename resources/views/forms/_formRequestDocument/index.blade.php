<div class="page-wrapper">
    <div class="card invoices-tabs-card border-0">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Adicionar Novo  Tipo de Documento </h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.request_documents.index') }}">Ver a Lista dos Tipo de Pedido de Documento </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <br><br>
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <div class="form-group local-forms">
                                    <label>Novo tipo de Pedido<span class="login-danger"></span></label>
                                    <input required type="text" name="requestName"class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <textarea required rows="5" cols="5" name="obs"class="form-control" placeholder="Descrição sobre o Pedido"></textarea>
                            </div>
                            <div class="col-12">
                                <br><br>
                                <button type="submit" class="btn btn-primary">
                           GUARDAR
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

