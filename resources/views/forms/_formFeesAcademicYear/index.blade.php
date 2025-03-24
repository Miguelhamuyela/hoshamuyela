<div class="page-wrapper">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Pagamento de Propina</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.payment.index') }}">Listagem de Pagamento</a>
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
                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <label>Codigo do Estudante
                                    <span class="login-danger"></span></label>
                                <input value="{{ isset($students->name) ? $students->name : old('name') }}"
                                    id="bi" name="bi" type="text" placeholder="Nome do Estudante"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <label>Nome do Estudante
                                    <span class="login-danger"></span></label>
                                <select id="fullName" name="fk_students_id" class="form-control ">
                                    @if (isset($students))
                                        <option selected value="{{ $students->id }}">{{ $students->name }}
                                        </option>
                                    @else
                                        <option>selecione uma outra opção</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <label>Valor do Curso
                                    <span class="login-danger"></span></label>
                                <input
                                    value="{{ isset($payments->coursePrice) ? $payments->coursePrice : old('coursePrice') }}"
                                    name="coursePrice" type="number" placeholder="Valor Apagar" class="form-control">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <label>Selecione a Forma de Pagamento
                                    <span class="login-danger"></span></label>
                                <select name="paymentForm" class="form-control border-secondary" name="select">
                                    @if (isset($paymentForm))
                                        <option selected value="{{ $paymentForm->paymentForm }}">
                                            {{ $paymentForm->paymentForm }}</option>
                                    @endif
                                    @if (isset($paymentForm) && $paymentForm->paymentForm != 'Pago')
                                        <option value="">Selecione a Forma de Pagamento...</option>
                                        <option value="T.P.A">T.P.A</option>
                                        <option value="Transferência">Transferência</option>
                                        <option value="Express">Express</option>
                                        <option value="Deposito">Deposito</option>
                                    @else
                                        <option value="">Selecione a Forma de Pagamento...</option>
                                        <option value="T.P.A">T.P.A</option>
                                        <option value="Transferência">Transferência</option>
                                        <option value="Express">Express</option>
                                        <option value="Deposito">Deposito</option>
                                    @endif

                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <label>Selecione o Mês Apagar
                                    <span class="login-danger"></span></label>
                                <select name="month" class="form-control border-secondary" name="select">
                                    @if (isset($month))
                                        <option selected value="{{ $month->month }}">{{ $month->month }}</option>
                                    @endif
                                    @if (isset($month) && $month->month != 'Pagamento')
                                        <option value="">Selecione o Mês ...</option>
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
                                        <option value="">Selecionar o Mês ...</option>
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
                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
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
                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <label>Selecione o Ano LectivoKKKK
                                    <span class="login-danger"></span></label>
                                <input
                                    value="{{ isset($payments->coursePrice) ? $payments->coursePrice : old('coursePrice') }}"
                                    name="coursePrice" type="text" placeholder="" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <label>Selecione o Ano LectivoKKKK
                                    <span class="login-danger"></span></label>
                                <input
                                    value="{{ isset($payments->coursePrice) ? $payments->coursePrice : old('coursePrice') }}"
                                    name="coursePrice" type="text" placeholder=""
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="student-submit">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
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
