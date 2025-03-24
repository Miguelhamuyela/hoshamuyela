<div class="page-wrapper" style="min-height: 714px;">
    <div class="card invoices-tabs-card border-0">
        <div class="card-body card-body pt-0 pb-0">
            <div class="invoices-main-tabs">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8">
                        <div class="invoices-tabs">
                            <ul>
                                <li>
                                    <a href="{{ route('admin.payment_academic_years.index') }}" class="active">Lista de
                                        Pagamento</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.payment_academic_years.index') }}" class="active">Cadastro
                                        de Novo
                                        Pagamento</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form data-select2-id="8">
                        <div class="row">
                            <div class="col-12">
                                <br><br>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Nº do Estudante
                                        <span class="login-danger"></span></label>
                                    <input required value="{{ isset($students->name) ? $students->name : old('name') }}"
                                        id="bi" name="bi" type="number" placeholder="Código do Estudante"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Selecione o Nome do Estudante
                                        <span class="login-danger"></span></label>
                                    <select id="fullName" name="fk_students_id" placeholder="Nome do Estudane"
                                        class="form-control ">
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Selecione o Curso<span class="login-danger"></span></label>
                                    <select name="fk_course_id" class="form-control"
                                        aria-label="Default select example">
                                        <option disabled>Selecione o Curso</option>
                                        @foreach ($courses as $item)
                                            <option value="{{ $item->id }}">{{ $item->courseName }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                       
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>
                                        <span class="login-danger"></span>Selecione a Forma de Pagamento</label>
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
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>
                                        <span class="login-danger"></span>Referência de Pagamento</label>
                                    <input
                                        value="{{ isset($payment_academic_years->reference) ? $payment_academic_years->reference : old('reference') }}"
                                        name="reference" type="text" placeholder="Referência do Pagamento"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Ano Lectivo
                                        <span class="login-danger"></span></label>
                                    <input required
                                        value="{{ isset($room_academic_years->startYear) ? $room_academic_years->startYear : old('startYear') }}"
                                        type="text" name="startYear"class="form-control" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms ">
                                    <label>
                                        <span class="login-danger"></span>Valor APagar</label>
                                    <input required
                                        value="{{ isset($payment_academic_years->payment) ? $payment_academic_years->payment : old('payment') }}"
                                        name="payment" class="form-control" type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms ">
                                    <label>
                                        <span class="login-danger"></span>Material Adquirir</label>
                                    <input required
                                        value="{{ isset($payment_academic_years->paymentDescription) ? $payment_academic_years->paymentDescription : old('paymentDescription') }}"
                                        name="material" class="form-control" type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="col-12">
                                <br>
                                <div class="student-submit">
                                    <button type="submit" class="btn btn-primary">GUARDAR</button>
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
