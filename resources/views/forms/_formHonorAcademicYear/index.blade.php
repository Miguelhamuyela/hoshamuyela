<div class="page-wrapper">
    <div class="content container-fluid">
    <div class="card invoices-tabs-card border-0">
        <div class="card-body card-body pt-0 pb-0">
            <div class="invoices-main-tabs">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8">
                        <div class="invoices-tabs">
                            <ul>
                                <li>
                                    <a href="{{ route("admin.honor_academic_years.create") }}" class="active">Nova Inscrição</a>
                                </li>
                                <li>
                                    <a href="{{ route("admin.honor_academic_years.index") }}" class="active"> Lista de Inscrição</a>
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
                        <form>
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title">
                                        <span>Informações Sobre o Quadro de Honra</span>
                                    </h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Nº do Estudante
                                            <span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($students->name) ? $students->name : old('name') }}"
                                            id="bi" name="bi" type="text"
                                            placeholder="Código do Estudante" class="form-control">
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
                                        <label>Selecione o Curso <span class="login-danger"></span></label>
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
                                        <label>Quarto
                                            <span class="login-danger"></span></label>
                                        <input required type="text" name="room"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Ano Lectivo
                                            <span class="login-danger"></span></label>
                                        <input required type="text" name="startYear"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>De onde<span class="login-danger"></span></label>
                                        <input required type="text" name="from"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Sala de Aula
                                            <span class="login-danger"></span></label>
                                            <select required name="fk_classes_id" class="form-control"
                                            aria-label="Default select example">
                                            <option>Selecione a Turma</option>
                                            @foreach ($classes as $item)
                                                <option value="{{ $item->id }}">{{ $item->classeName }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Telefone
                                            <span class="login-danger"></span></label>
                                        <input required type="text" name="phone"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Carregar foto
                                            <span class="login-danger"></span></label>
                                        <input required type="file" name="image"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <textarea required rows="5" cols="5" name="obs"class="form-control" placeholder="Informações Sobre o Quadro de Honra "></textarea>
                                 </div>
                                <div class="col-12">
                                <br><br>
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
