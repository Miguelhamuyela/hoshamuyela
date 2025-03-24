<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Adicionar Transporte</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.transports.index') }}">Adicionar Novo Transporte</a>
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
                                    <h5 class="form-title">
                                        <span>Informações de Transporte
                                        </span>
                                    </h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Marca
                                            <span class="login-danger"></span></label>
                                        <input type="text" name="mark"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Modelo
                                            <span class="login-danger"></span></label>
                                        <input type="text" name="model"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Cor
                                            <span class="login-danger"></span></label>
                                        <input type="text" name="color"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Matricula
                                            <span class="login-danger"></span></label>
                                        <input type="text" name="plate"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Combustivel
                                            <span class="login-danger"></span></label>
                                        <input type="text" name="fuel"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Aquisição
                                            <span class="login-danger"></span></label>
                                            <select required
                                            value="{{ isset($acquired->acquired) ? $acquired->acquired : old('acquired') }}"name="acquired" class="form-control border-secondary" name="select">
                                                @if (isset($acquired))
                                                    <option selected value="{{ $acquired->acquired }}">{{ $acquired->acquired }}
                                                    </option>
                                                @endif
                                                @if (isset($acquired) && $acquired->acquired != 'Pago')
                                                    <option value="">Selecionar a Forma de Aquisição...</option>
                                                    <option value="Comprado">Comprado</option>
                                                    <option value="Doado">Doado</option>
                                                @else
                                                    <option value="">Selecionar a Forma de Aquisição...</option>
                                                    <option value="Comprado">Comprado</option>
                                                    <option value="Doado">Doado</option>
                                                @endif
                                            </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <textarea required rows="5" cols="5" name="obs"class="form-control"
                                        placeholder="Descrição sobre a Viatura"></textarea>
                                </div>
                                <div class="col-12">
                                    <div class="student-submit">
                                    <br><br>
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
