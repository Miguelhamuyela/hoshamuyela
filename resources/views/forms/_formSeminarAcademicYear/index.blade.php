<div class="page-wrapper" style="min-height: 714px;">
    <div class="card invoices-tabs-card border-0">
        <div class="card-body card-body pt-0 pb-0">
            <div class="invoices-main-tabs">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8">
                        <div class="invoices-tabs">
                            <ul>
                                <li>
                                    <a href="{{ route("admin.seminar_academic_years.create") }}" class="active">Adicionar Feriado</a>
                                </li>
                                <li>
                                    <a href="{{ route("admin.seminar_academic_years.index") }}" class="active">Feriados </a>
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
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title">
                                        <span>Informações de fériados</span>
                                    </h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Codigo do Feriado
                                            <span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($holidays->name) ? $holidays->name : old('name') }}"
                                            id="bi" name="name" type="text"
                                            placeholder="Código do Feriado" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Selecione o Tipo de Feriádo(Tempo Livre)
                                            <span class="login-danger"></span></label>
                                        <select id="fullName" name="fk_holidays_id" placeholder="Tipo de Fériado"
                                            class="form-control ">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Ano Lectivo
                                            <span class="login-danger"></span></label>
                                        <input type="text" name="startYear"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Data de Início do Feriado
                                            <span class="login-danger"></span></label>
                                        <input type="date" name="startDate"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label> Data de Fim do Feriado
                                            <span class="login-danger"></span></label>
                                        <input type="date" name="endDate"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Descrição do  Fériado
                                            <span class="login-danger"></span></label>
                                        <input type="text" name="typeHoliday"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <textarea required rows="5" cols="5" name="obs"class="form-control" placeholder="Descrição sobre o Fériado"></textarea>
                                 </div>
                                <div class="col-12">
                                    <br>
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
