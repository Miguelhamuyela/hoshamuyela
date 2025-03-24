<div class="page-wrapper">

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title">
                                        <span>Adicionar Novo  Candidato</span>
                                    </h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label> Nome do Professor ou Candidato<span class="login-danger"></span></label>
                                        <input required
                                        value="{{ isset($teachers->name) ? $teachers->name : old('name') }}" type="text" name="name"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Apelido<span class="login-danger"></span></label>
                                        <input required
                                        value="{{ isset($teachers->lastName) ? $teachers->lastName : old('lastName') }}"
                                        type="text" name="lastName"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Genero
                                            <span class="login-danger"></span></label>
                                            <select
                                            name="genro"
                                       class="form-control border-secondary" name="select">
                                       @if (isset($genro))
                                           <option  disabled selected value="{{ $genro->genro }}">{{ $genro->genro }}
                                           </option>
                                       @endif
                                       @if (isset($genro) && $payment->genro != 'Genero')
                                           <option value="">Selecionar o Genero...</option>
                                           <option value="Masculino">Masculino</option>
                                           <option value="Femenino">Femenino</option>
                                           <option value="Outros">Outros</option>
                                       @else
                                           <option value="">Selecionar o Genero...</option>
                                           <option value="Masculino">Masculino</option>
                                           <option value="Femenino">Femenino</option>
                                           <option value="Outros">Outros</option>
                                       @endif

                                   </select>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Data de Nascimento
                                            <span class="login-danger"></span></label>
                                        <input required
                                        value="{{ isset($teachers->birthDate) ? $teachers->birthDate : old('birthDate') }}"
                                        type="date" name="birthDate"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Telefone
                                            <span class="login-danger"></span></label>
                                        <input required
                                        value="{{ isset($teachers->tel) ? $teachers->tel : old('tel') }}"
                                        type="text" name="tel" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Ano do Contrato
                                            <span class="login-danger"></span></label>
                                        <input required
                                        value="{{ isset($teachers->startYear) ? $teachers->startYear : old('startYear') }}"
                                        type="text"name="startYear"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Tipo de Contrato
                                            <span class="login-danger"></span></label>
                                        <input required
                                        value="{{ isset($teachers->typeContract) ? $teachers->typeContract : old('typeContract') }}"
                                        type="text"name="typeContract"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Qualificação
                                            <span class="login-danger"></span></label>
                                        <input required
                                        value="{{ isset($teachers->qualification) ? $teachers->qualification : old('qualification') }}"
                                        type="text" name="qualification"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Experiência
                                            <span class="login-danger"></span></label>
                                        <input required
                                        value="{{ isset($teachers->experience) ? $teachers->experience : old('experience') }}"
                                        type="text"   name="experience"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Email
                                            <span class="login-danger"></span></label>
                                        <input required
                                        value="{{ isset($teachers->email) ? $teachers->email : old('email') }}"
                                        type="text"  name="email"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Endereço
                                            <span class="login-danger"></span></label>
                                        <input required
                                        value="{{ isset($teachers->address) ? $teachers->address : old('address') }}"
                                        type="text"name="address"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>País
                                            <span class="login-danger"></span></label>
                                        <input required
                                        value="{{ isset($teachers->country) ? $teachers->country : old('country') }}"
                                        type="text" name="country"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Provincia ou Cidade
                                            <span class="login-danger"></span></label>
                                        <input required
                                        value="{{ isset($teachers->city) ? $teachers->city : old('city') }}"
                                        type="text"name="city"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Grau Académico
                                            <span class="login-danger"></span></label>
                                        <input required
                                        value="{{ isset($teachers->academicGrau) ? $teachers->academicGrau : old('academicGrau') }}"
                                        type="text"  name="academicGrau"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Especialidade
                                            <span class="login-danger"></span></label>
                                        <input required
                                        value="{{ isset($teachers->especiality) ? $teachers->especiality : old('especiality') }}"
                                        type="text" name="especiality"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Língua
                                            <span class="login-danger"></span></label>
                                        <input required
                                        value="{{ isset($teachers->language) ? $teachers->language : old('language') }}"
                                        type="text"name="language"class="form-control" />
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
