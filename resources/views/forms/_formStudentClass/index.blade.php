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
                                        <a href="{{ route("admin.student_classes.create") }}" class="active">Adicionar o Estudante</a>
                                    </li>
                                    <li>
                                        <a href="{{ route("admin.student_classes.index") }}" class="active">Estudante Adicionado
                                            Numa Turma</a>
                                    </li>
                                    <li>
                                        <a href="{{ route("admin.student_classes.report") }}" class="active">Imprimir a Turma</a>
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
                                        <span></span>
                                    </h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Nº do Estudante
                                            <span class="login-danger"></span></label>
                                        <input value="{{ isset($students->name) ? $students->name : old('name') }}"
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
                                        <label>
                                            <span class="login-danger"></span></label>
                                        <select name="fk_course_id" class="form-control"
                                            aria-label="Default select example">
                                            <option disabled></option>
                                            @foreach ($courses as $item)
                                                <option value="{{ $item->id }}">{{ $item->courseName }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Ano Lectivo
                                            <span class="login-danger"></span></label>
                                        <select name="fk_academic_years_id" class="form-control"
                                            aria-label="Default select example">
                                            <option disabled></option>
                                            @foreach ($academic_years as $item)
                                                <option value="{{ $item->id }}">{{ $item->startYear }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Nome da Turma
                                            <span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($student_classes->classeName) ? $student_classes->classeName : old('classeName') }}"
                                            type="text" name="classeName"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Inicio de Aula
                                            <span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($student_classes->startTime) ? $student_classes->startTime : old('startTime') }}"
                                            type="text" name="startTime"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Fim de Aula
                                            <span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($student_classes->endTime) ? $student_classes->endTime : old('endTime') }}"
                                            type="text" name="endTime"class="form-control" />
                                    </div>
                                </div>


                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Periódo de Aula
                                            <span class="login-danger"></span></label>
                                        <select
                                            value="{{ isset($exams->period) ? $teachers->period : old('period') }} "name="period"
                                            class="form-control border-secondary" name="select">
                                            @if (isset($examTipy))
                                                <option disabled  selected value="{{ $period->period }}">{{ $period->period }}
                                                </option>
                                            @endif
                                            @if (isset($period) && $period->period != 'Tipo de exame')
                                                <option value="">Selecionar o Periódo...</option>
                                                <option value="Manha">Manha</option>
                                                <option value="Tarde">Tarde</option>
                                                <option value="Noite">Noite</option>
                                                <option value="Sabado">Sabado</option>
                                            @else
                                                <option value="">Selecionar o Periódo...</option>
                                                <option value="Manha">Manha</option>
                                                <option value="Tarde">Tarde</option>
                                                <option value="Noite">Noite</option>
                                                <option value="Sabado">Sabado</option>
                                            @endif

                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Nome do Departamento ou Secção<span class="login-danger"></span></label>
                                        <select required name="fk_departaments_id" class="form-control"
                                            aria-label="Default select example">
                                            <option disabled>Selecione o Departamento ou Secção</option>
                                            @foreach ($departaments as $item)
                                                <option value="{{ $item->id }}">{{ $item->departamentName }}</option>
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
