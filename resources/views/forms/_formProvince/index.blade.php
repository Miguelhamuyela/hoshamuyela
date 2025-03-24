    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Adicionar Nova Provincia</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.province.index') }}">Ver a Listagem das Provincias</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <br><br>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group local-forms">
                                    <label>Nome da Província<span class="login-danger"></span></label>
                                    <input required type="text" name="proviceName"class="form-control">
                                </div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="form-group local-forms">
                                    <label>Selecionar o Município<span class="login-danger"></span></label>
                                    <select name="fk_municipes_id" class="form-control" aria-label="Default select example">
                                        <option disabled > Selecione o Municipio</option>
                                        @foreach ($municipies as $item)
                                            <option di value="{{ $item->id }}">{{ $item->municipeName }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <textarea required rows="5" cols="5" name="obs"class="form-control" placeholder="Descrição sobre a Província"></textarea>
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

