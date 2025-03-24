<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="salary.html">Lista dos Pagamento</a>
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
                                        <span>Informação do Salário</span>
                                    </h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Nº do Professor
                                            <span class="login-danger"></span></label>
                                        <input value="{{ isset($teachers->name) ? $teachers->name : old('name') }}"
                                            id="bi" name="bi" type="text" placeholder="Código do Professor"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Selecione o Nome do Professor
                                            <span class="login-danger"></span></label>
                                        <select id="fullName" name="fk_teachers_id" placeholder="Nome do Professor"
                                            class="form-control ">
                                        </select>
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
                                    <div class="form-group local-forms calendar-icon">
                                        <label>Data de Vicimento
                                            <span class="login-danger">*</span></label>
                                        <input name="joiningDate"class="form-control datetimepicker" type="date"
                                            placeholder="DD-MM-YYYY" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Valor a Receber <span class="login-danger"></span></label>
                                        <input name="amount"type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>
                                            <span class="login-danger"></span>Selecione o Mês de Pagamento</label>
                                        <select name="month" class="form-control border-secondary" name="select">
                                            @if (isset($month))
                                                <option selected value="{{ $month->month }}">{{ $month->month }}</option>
                                            @endif
                                            @if (isset($month) && $month->month != 'Pagamento')
                                                <option value="">Selecione o Mês de Pagamento...</option>
                                                <option value="Janeiro">Janeiro</option>
                                                <option value="Fevereiro">Fevereiro</option>
                                                <option value="Março">Março</option>
                                                <option value="Abril">Abril</option>
                                                <option value="Maio">Maio</option>
                                                <option value="Junho">Junho</option>
                                                <option value="Julho">Julho</option>
                                                <option value="Agosto">Agosto</option>
                                                <option value="Setembro">Setembro</option>
                                                <option value="Outobro">Outrobro</option>
                                                <option value="Novembro">Novembro</option>
                                                <option value="Dezembro">Dezembro</option>
                                            @else
                                                <option value="">Selecionar o Mês de Pagamento...</option>
                                                <option value="Janeiro">Janeiro</option>
                                                <option value="Fevereiro">Fevereiro</option>
                                                <option value="Março">Março</option>
                                                <option value="Abril">Abril</option>
                                                <option value="Maio">Maio</option>
                                                <option value="Junho">Junho</option>
                                                <option value="Julho">Julho</option>
                                                <option value="Agosto">Agosto</option>
                                                <option value="Setembro">Setembro</option>
                                                <option value="Outobro">Outrobro</option>
                                                <option value="Novembro">Novembro</option>
                                                <option value="Dezembro">Dezembro</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Ano<span class="login-danger"></span></label>
                                        <input name="startYear"type="text" class="form-control" />
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

@section('jQueryAPI')
    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
@endsection
<script src="http://code.jquery.com/jquery-3.4.1.js"></script>
<script src="/dashboard/bundles/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('#bi').on('change', function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            jQuery.support.cors = true;
            $.ajax({
                // …
                crossDomain: true,
            });
            let id = $(this).val();
            $('#fullName').empty();
            $('#fullName').append(`<option value="0" disabled selected>Processando...</option>`);
            let _token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                data: {
                    _token: _token
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                crossDomain: true,
                type: 'GET',


                url: 'estudantes/' + id,
                success: function(response) {
                    var response = JSON.parse(response);
                    $('#fullName').empty();
                    $('#fullName').append(

                    );
                    response.forEach(element => {
                        $('#fullName').append(
                            `<option selected value="${element['id']}">${element['name']}</option>`
                        );
                    });

                    ;
                }
            });
        });
    })
</script>
