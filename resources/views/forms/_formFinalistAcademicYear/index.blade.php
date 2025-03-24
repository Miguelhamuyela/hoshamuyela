<div class="page-wrapper" style="min-height: 714px;">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title"></h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.finalist_academic_years.index') }}">Listagem dos Finalista</a>
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
                                        <span>Adicionar Novo Finalista</span>
                                    </h5>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Nº do Estudante
                                            <span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($students->name) ? $students->name : old('name') }}"
                                            id="bi" name="name" type="text"
                                            placeholder="Código do Estudante" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Selecione o Nome do Estudante
                                            <span class="login-danger"></span></label>
                                        <select id="fullName" name="fk_students_id" placeholder="Nome do Estudane"
                                            class="form-control ">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Ano Lectivo
                                            <span class="login-danger"></span></label>
                                        <input type="text" name="startYear"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms ">
                                        <label>Selecione o Curso
                                            <span class="login-danger"></span></label>
                                        <select name="fk_course_id" class="form-control"
                                            aria-label="Default select example">
                                            <option disabled>Selecione o Curso</option>
                                            @foreach ($courses as $item)
                                                <option value="{{ $item->id }}">{{ $item->courseName }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Selecione o Tipo de Aproveitamento
                                            <span class="login-danger"></span></label>
                                        <select name="fk_aproveitaments_id" class="form-control"
                                            aria-label="Default select example">
                                            <option disabled>Selecione o Tipo de Aproveitamento</option>
                                            @foreach ($aproveitaments as $item)
                                                <option value="{{ $item->id }}">{{ $item->aproveitamentsName }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Naturalidade
                                            <span class="login-danger"></span></label>
                                        <input type="text" name="naturalness"class="form-control" />
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
