<div class="page-wrapper">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Adicionar Novo Exame</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.exams.index') }}">Clica aqui para a Lista de Exame </a>
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
                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <label>Novo Exame<span class="login-danger"></span></label>
                                <input required type="text" name="examName"class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <select
                                       name="typeExam"
                                class="form-control border-secondary" name="select">
                                @if (isset($typeExam))
                                    <option selected value="{{ $typeExam->typeExam }}">{{ $typeExam->typeExam }}
                                    </option>
                                @endif
                                @if (isset($examTipy) && $typeExam->typeExam != 'Tipo de exame')
                                    <option value="">Selecionar o Tipo de exame ou Prova...</option>
                                    <option value="1º-Trimestre">1º-Trimestre</option>
                                    <option value="2º-Trimestre">2º-Trimestre</option>
                                    <option value="3º-Trimestre">3º-Trimestre</option>
                                    <option value="1º-Semestre">1º-Semestre</option>
                                    <option value="2º-Semestre">2º-Semestre</option>
                                    <option value="3º-Semestre">3º-Semestre</option>
                                    <option value="Avaliação Continua">Avaliação Continua</option>
                                @else
                                    <option value="">Selecionar o Tipo de exame ou Prova...</option>
                                    <option value="1º-Trimestre">1º-Trimestre</option>
                                    <option value="2º-Trimestre">2º-Trimestre</option>
                                    <option value="3º-Trimestre">3º-Trimestre</option>
                                    <option value="1º-Semestre">1º-Semestre</option>
                                    <option value="2º-Semestre">2º-Semestre</option>
                                    <option value="3º-Semestre">3º-Semestre</option>
                                    <option value="Avaliação Continua">Avaliação Continua</option>
                                @endif
                            </select>

                            </div>
                        </div>

                        <div class="col-md-12">
                            <textarea required rows="5" cols="5" name="obs"class="form-control" placeholder="Descrição sobre o Exame"></textarea>
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

