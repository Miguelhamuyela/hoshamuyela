<div class="page-wrapper">
    <div class="page-header">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form action="{{ route('admin.teacher_exames.print') }}"
                                method="post">
                                @csrf

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Coloque aqui o
                                            Ano Lectivo
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-lg-10 col-md-4">
                                            <div class="form-group">
                                                <input type="text" name="startYear"
                                                    class="form-control"
                                                    placeholder="Pesquisar por Ano Lectivo ...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Fechar</button>
                                        <button type="submit" class="btn btn-primary">
                                            Imprimir a Lista dos Matriculados</button>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-auto text-end float-end ms-auto download-grp">
                    <a href="{{ route('admin.teacher_exames.index') }}"
                        class="btn btn-outline-primary me-2"><i class=""></i>Clica Aqui Ver a lista de  Prova ou exame</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="form-title">
                                <span></span>
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
                                <label>Nome do Professor
                                    <span class="login-danger"></span></label>
                                <select id="fullName" name="fk_teachers_id" placeholder="Nome do Professor"
                                    class="form-control ">
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Inicio do Exame ou Prova
                                    <span class="login-danger"></span></label>
                                <input required
                                    value="{{ isset($teacher_exames->startTime) ? $teacher_exames->startTime : old('startTime') }}"
                                    type="time" name="startTime"class="form-control" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Fim do Exame ou Prova
                                    <span class="login-danger"></span></label>
                                <input required
                                    value="{{ isset($teacher_exames->endTime) ? $teacher_exames->endTime : old('endTime') }}"
                                    type="time" name="endTime"class="form-control" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
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
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Selecione a Turma
                                    <span class="login-danger"></span></label>
                                <select name="fk_classes_id" class="form-control" aria-label="Default select example">
                                    <option disabled>Selecione a Turma</option>
                                    @foreach ($classes as $item)
                                        <option value="{{ $item->id }}">{{ $item->classeName }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Selecione a sala de Aula
                                    <span class="login-danger"></span></label>
                                <select name="fk_classrooms_id" class="form-control"
                                    aria-label="Default select example">
                                    <option disabled>Selecione a sala de Aula</option>
                                    @foreach ($classrooms as $item)
                                        <option value="{{ $item->id }}">{{ $item->classRoomName }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Selecione a Disciplina
                                    <span class="login-danger"></span></label>
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
                                <label>Ano Lectivo
                                    <span class="login-danger"></span></label>
                                <input required
                                    value="{{ isset($teacher_exames->startYear) ? $teacher_exames->startYear : old('startYear') }}"
                                    type="text" name="startYear" placeholder="" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Data de Inicio
                                    <span class="login-danger"></span></label>
                                <input required
                                    value="{{ isset($teacher_exames->startdate) ? $teacher_exames->startdate : old('startdate') }}"
                                    type="date" name="startdate"class="form-control" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Tipo de Exame ou Prova
                                    <span class="login-danger"></span></label>
                                <select
                                    value="{{ isset($typeExam->typeExam) ? $typeExam->typeExam : old('typeExam') }} "name="typeExam"
                                    class="form-control border-secondary" name="select">
                                    @if (isset($typeExam))
                                        <option selected value="{{ $typeExam->typeExam }}">{{ $typeExam->typeExam }}
                                        </option>
                                    @endif
                                    @if (isset($typeExam) && $typeExam->typeExam != 'Tipo de exame')
                                        <option value="">Selecionar o Semestre ou Trimestre...</option>
                                        <option value="1º-Trimestre">1º-Trimestre</option>
                                        <option value="2º-Trimestre">2º-Trimestre</option>
                                        <option value="3º-Trimestre">3º-Trimestre</option>
                                        <option value="1º-Semestre">1º-Semestre</option>
                                        <option value="2º-Semestre">2º-Semestre</option>
                                        <option value="3º-Semestre">3º-Semestre</option>
                                        <option value="Avaliação Continua">Avaliação Continua</option>
                                    @else
                                        <option value="">Selecionar o Semestre ou Trimestre...</option>
                                        <option value="1º-Trimestre">1º-Trimestre</option>
                                        <option value="2º-Trimestre">2º-Trimestre</option>
                                        <option value="3º-Trimestre">3º-Trimestre</option>
                                        <option value="1º-Semestre">1º-Semestre</option>
                                        <option value="2º-Semestre">2º-Semestre</option>
                                        <option value="3º-Semestre">3º-Semestre</option>
                                        <option value="Avaliação Continua">Avaliação Continua</option>
                                    @endif
                                </select>
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
                                        <option disabled selected value="{{ $period->period }}">{{ $period->period }}
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

                        <div class="col-md-12">
                            <textarea required value="{{ isset($teacher_exames->description) ? $teacher_exames->description : old('obs') }}"
                                rows="5" cols="5" name="description"class="form-control"
                                placeholder="Descrição a sobre Exame ou Prova"></textarea>
                        </div>
                        <div class="col-12">
                            <br><br>
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
