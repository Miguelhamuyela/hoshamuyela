<div class="page-wrapper">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Adicionar  Professores Para  Ano Lectivo</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.teacher_academic_years.index') }}">Clica aqui para a Lista dos
                            Professores Selecionado</a>
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
                            <h5 class="form-title"><span></span></h5>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Nº do Professor
                                    <span class="login-danger"></span></label>
                                <input value="{{ isset($teachers->name) ? $teachers->name : old('name') }}"
                                    id="bi" name="bi" type="text" placeholder="Código do Estudante"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Selecione o Nome do Professor
                                    <span class="login-danger"></span></label>
                                <select id="fullName" name="fk_teachers_id" placeholder="Nome do Estudane"
                                    class="form-control ">
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Escreva o Ano Lectivo<span class="login-danger"></span></label>
                                <input required
                                value="{{ isset($teacher_academic_years->startYear) ? $teacher_academic_years->startYear : old('startYear') }}"
                                type="text" name="startYear" placeholder="" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Selecione a Disciplina<span class="login-danger"></span></label>
                                <select name="fk_subjects_id" class="form-control" aria-label="Default select example">
                                    <option disabled>Selecione a Disciplina</option>
                                    @foreach ($subjects as $item)
                                        <option value="{{ $item->id }}">{{ $item->subjectName }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Selecione o Curso<span class="login-danger"></span></label>
                                <select name="fk_course_id" class="form-control" aria-label="Default select example">
                                    <option disabled>Selecione o Curso</option>
                                    @foreach ($courses as $item)
                                        <option value="{{ $item->id }}">{{ $item->courseName }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Inicio de Aula
                                    <span class="login-danger"></span></label>
                                <input  required
                                value="{{ isset($teacher_academic_years->startTime) ? $teacher_academic_years->startTime : old('startTime') }}"
                                name="startTime"type="time" class="form-control" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Fim de Aula<span class="login-danger"></span></label>
                                <input  required
                                value="{{ isset($teacher_academic_years->endTime) ? $teacher_academic_years->endTime : old('endTime') }}"
                                name="endTime"type="time" class="form-control" />
                            </div>
                        </div>

                        <div class="col-12 col-sm-4 ">
                            <div class="form-group local-forms">
                                <label>Selecione o Periódo do Professor<span class="login-danger"></span></label>
                                <select
                                    value="{{ isset($exams->period) ? $teachers->period : old('period') }} "name="period"
                                    class="form-control border-secondary" name="select">
                                    @if (isset($examTipy))
                                        <option selected value="{{ $period->period }}">{{ $period->period }}
                                        </option>
                                    @endif
                                    @if (isset($period) && $period->period != 'Tipo de exame')
                                        <option value="">Selecionar o Periódo...</option>
                                        <option value="Manha">Manha</option>
                                        <option value="Tarde">Tarde</option>
                                        <option value="Noite">Manha</option>
                                        <option value="Sabado">Sabado</option>
                                    @else
                                        <option value="">Selecionar o Periódo...</option>
                                        <option value="Manha">Manha</option>
                                        <option value="Tarde">Tarde</option>
                                        <option value="Noite">Manha</option>
                                        <option value="Sabado">Sabado</option>
                                    @endif

                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Carregar Foto do Professor<span class="login-danger"></span></label>
                                <input rquired name="image"type="file" class="form-control"
                                    placeholder="Repeat Password" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-8 ">
                            <div class="form-group local-forms">
                                <label>Alguns Detalhes<span class="login-danger"></span></label>
                                <input  required
                                value="{{ isset($teacher_academic_years->description) ? $teacher_academic_years->description : old('description') }}"
                                type="text" name="description" placeholder="" class="form-control">
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
