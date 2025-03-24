<div class="page-wrapper">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h5 class="form-title">
                            <span>Inscrição do Aluno</span>
                        </h5>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Nome Completo
                                <span class="login-danger"></span></label>
                            <input required value="{{ isset($students->name) ? $students->name : old('name') }}"
                                type="text" name="name"class="form-control" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Nome do Pai
                                <span class="login-danger"></span></label>
                            <input required value="{{ isset($students->father) ? $students->father : old('father') }}"
                                type="text" name="father"class="form-control" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Nome da Mâe<span class="login-danger"></span></label>
                            <input required value="{{ isset($students->mather) ? $students->mather : old('mather') }}"
                                type="text" name="mather"class="form-control" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Data de Nascimento
                                <span class="login-danger"></span></label>
                            <input required
                                value="{{ isset($students->borthday) ? $students->borthday : old('borthday') }}"
                                type="date" name="borthday"class="form-control" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Nº de Bilhete de identidade
                                <span class="login-danger"></span></label>
                            <input required
                                value="{{ isset($students->identification) ? $students->identification : old('identification') }}"
                                type="text" name="identification"class="form-control" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Arquivo de Identificação<span class="login-danger"></span></label>
                            <input required
                                value="{{ isset($students->arquivIdentification) ? $students->arquivIdentification : old('arquivIdentification') }}"
                                type="text" name="arquivIdentification"class="form-control" />

                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Local de Baptismo
                                <span class="login-danger"></span></label>
                            <input required
                                value="{{ isset($students->placeBaptism) ? $students->placeBaptism : old('placeBaptism') }}"
                                type="text" name="placeBaptism"class="form-control" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Data de Baptismo
                                <span class="login-danger"></span></label>
                            <input required
                                value="{{ isset($students->baptismDate) ? $students->baptismDate : old('baptismDate') }}"
                                type="date" name="baptismDate"class="form-control" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Local de Confirmação ou Crisma<span class="login-danger"></span></label>
                            <input required
                                value="{{ isset($students->confirmLocation) ? $students->confirmLocation : old('confirmLocation') }}"
                                type="text" name="confirmLocation"class="form-control" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Data de Confirmação ou Crisma
                                <span class="login-danger"></span></label>
                            <input required
                                value="{{ isset($students->confirmDate) ? $students->confirmDate : old('confirmDate') }}"
                                type="date" name="confirmDate"class="form-control" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Endereço
                                <span class="login-danger"></span></label>
                            <input required
                                value="{{ isset($students->address) ? $students->address : old('address') }}"
                                type="text" name="address"class="form-control" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Responsável<span class="login-danger"></span></label>
                            <input required
                                value="{{ isset($students->inCharge) ? $students->inCharge : old('inCharge') }}"
                                type="text" name="inCharge"class="form-control" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Telefone
                                <span class="login-danger"></span></label>
                            <input required value="{{ isset($students->tel) ? $students->tel : old('tel') }}"
                                type="text" name="tel"class="form-control" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Paróquia/Missão
                                <span class="login-danger"></span></label>
                            <input required
                                value="{{ isset($students->originParish) ? $students->originParish : old('originParish') }}"
                                type="text" name="originParish"class="form-control" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Nº de Recenseamento<span class="login-danger"></span></label>
                            <input required
                                value="{{ isset($students->receseciament) ? $students->receseciament : old('receseciament') }}"
                                type="text" name="receseciament"class="form-control" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Data de Emissão do Recenseamento
                                <span class="login-danger"></span></label>
                            <input required
                                value="{{ isset($students->censusdate) ? $students->censusdate : old('censusdate') }}"
                                type="date" name="censusdate"class="form-control" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Data de Emissão (Bilhente de Identidade)
                                <span class="login-danger"></span></label>
                            <input required
                                value="{{ isset($students->dateIssue) ? $students->dateIssue : old('dateIssue') }}"
                                type="date" name="dateIssue"class="form-control" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Selecionar o Genero...<span class="login-danger"></span></label>
                            <select required
                                value="{{ isset($genro->genro) ? $genro->genro : old('genro') }}"name="genro"
                                class="form-control border-secondary" name="select">
                                @if (isset($genro))
                                    <option selected value="{{ $genro->genro }}">{{ $genro->genro }}
                                    </option>
                                @endif
                                @if (isset($genro) && $payment->payment != 'Pago')
                                    <option value="">Selecionar o Genero...</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                @else
                                    <option value="">Selecionar o Genero...</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Ano Lectivo
                                <span class="login-danger"></span></label>
                            <input required
                                value="{{ isset($students->startYear) ? $students->startYear : old('startYear') }}"
                                type="text" name="startYear"class="form-control" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Local de Nascimento(Natural)
                                <span class="login-danger"></span></label>
                            <input required
                                value="{{ isset($students->municipeName) ? $students->municipeName : old('municipeName') }}"
                                type="text" name="municipeName"class="form-control" />
                        </div>
                    </div>









                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Selecionar a Provincia<span class="login-danger"></span></label>
                            <select name="fk_provinces_id" class="form-control" aria-label="Default select example">
                                <option disabled>Selecione a Provincia</option>
                                @foreach ($provinces as $item)
                                    <option value="{{ $item->id }}">{{ $item->proviceName }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="col-12 col-sm-12 local-forms">
                        <div class="form-group">
                            <label>Selecione o Curso
                                <span class="login-danger"></span></label>
                            <select name="fk_course_id" class="form-control" aria-label="Default select example">
                                <option disabled>Selecione o Curso</option>
                                @foreach ($courses as $item)
                                    <option value="{{ $item->id }}">{{ $item->courseName }}</option>
                                @endforeach
                            </select>
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
