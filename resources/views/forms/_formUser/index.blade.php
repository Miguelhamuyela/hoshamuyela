<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.user.index') }}">Clica aqui para Ver a dos Lista dos Usuario</a>
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
                                        <span>Adicionar Novo Usuario do Sistema</span>
                                    </h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Nome
                                            <span class="login-danger"></span></label>
                                            <input type="text" class="form-control" placeholder="Nome" id="name" name="name"
                                            value="{{ isset($user->name) ? $user->name : old('name') }}" required autofocus />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Email
                                            <span class="login-danger"></span></label>
                                            <input type="email" class="form-control" placeholder="Email" id="email" name="email"
                                            value="{{ isset($user->email) ? $user->email : old('email') }}" required />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Nivel de Acesso<span class="login-danger"></span></label>
                                        <select name="level" id="level" class="form-control" required>
                                            @if (isset($user->level))
                                                <option value="{{ $user->level }}" class="text-primary h6" selected>
                                                    {{ $user->level }}
                                                </option>
                                            @else
                                                <option disabled selected>selecione o nivel de acesso</option>
                                            @endif
                                            @if (Auth::user()->level == 'Administrador')
                                            <option value="Administrador">Administrador(a)</option>
                                            <option value="funcionario">Professor</option>
                                            <option value="professor">professor </option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" class="form-control" name="password"
                                                autocomplete="new-password" placeholder="Password" required />
                                        </div>

                                        <div class="form-group">
                                            <label for="password_confirmation">Confirmar Password</label>
                                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                                                placeholder="Confirmar Password" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b class="mb-2 text-dark">Requisitos de senhas</b>
                                        <p class="small text-dark mb-2"> Para criar uma nova senha, você deve atender a todos os seguintes requisitos:
                                        </p>
                                        <ul class="small text-dark pl-4 mb-0">
                                            <li>Mínimo 8 caracteres</li>
                                            <li>Pelo menos um caracter especial</li>
                                            <li>Pelo menos um numero</li>
                                            <li>Não pode ser igual à senha anterior</li>
                                        </ul>
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
</div>
