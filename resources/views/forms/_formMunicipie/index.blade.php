       <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Adicionar Novo Municipio</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.municipe.index') }}">Ver a Listagem de Municipio</a>
                                </li>
                            </ul>
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

                                <div class="col-12 ">
                                    <div class="form-group local-forms">
                                        <label>Nome do Municipio<span class="login-danger"></span></label>
                                        <input required type="text" name="municipeName"class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <textarea required rows="5" cols="5" name="obs"class="form-control" placeholder="Descrição sobre o Municipio"></textarea>
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
