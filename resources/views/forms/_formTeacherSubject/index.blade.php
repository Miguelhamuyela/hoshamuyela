<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <li class="breadcrumb-item">
                        <a href="{{ route("admin.teacher_subjects.index") }}">LISTA DOS PROFESSORES POR DISCIPLINA</a>
                    </li>
                    <ul class="breadcrumb">

                        <li class="breadcrumb-item active"></li>
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
                                        <span>ADICIONAR O PROFESSOR NUMA DISCIPLINA</span>
                                    </h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>
                                            <span class="login-danger">Nº DO PROFESSOR</span></label>
                                        <input value="{{ isset($teachers->name) ? $teachers->name : old('name') }}"
                                            id="bi" name="bi" type="text"
                                            placeholder="Código do Estudante" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>
                                            <span class="login-danger">SELECIONAR O NOME DO PROFESSOR</span></label>
                                        <select id="fullName" name="fk_teachers_id" placeholder="Nome do Estudane"
                                            class="form-control ">
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>
                                            <span class="login-danger">Selecione o CursoGG</span></label>
                                        <select required name="fk_course_id" class="form-control"
                                            aria-label="Default select example">
                                            <option>Selecione o Curso</option>
                                            @foreach ($courses as $item)
                                                <option value="{{ $item->id }}">{{ $item->courseName }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>
                                            <span class="login-danger">Selecione a Turma</span></label>
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
                                        <label>
                                            <span class="login-danger">Selecione a Sala</span></label>
                                        <select required name="fk_classrooms_id" class="form-control"
                                            aria-label="Default select example">
                                            <option>Selecione a sala de Aula</option>
                                            @foreach ($classrooms as $item)
                                                <option value="{{ $item->id }}">{{ $item->classRoomName }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>
                                            <span class="login-danger">Nome da Disciplina</span></label>
                                        <input required
                                            value="{{ isset($teacher_subjects->subjectName) ? $teacher_subjects->subjectName : old('subjectName') }}"
                                            type="text" name="subjectName" placeholder=""
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>
                                            <span class="login-danger">Email</span></label>
                                        <input required
                                            value="{{ isset($teacher_subjects->email) ? $teacher_subjects->email : old('email') }}"
                                            type="text" name="email" placeholder="" class="form-control">
                                    </div>

                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>
                                            <span class="login-danger">Contactos</span></label>
                                        <input required
                                            value="{{ isset($teacher_subjects->phone) ? $teacher_subjects->phone : old('phone') }}"
                                            type="text" name="phone" placeholder="" class="form-control">
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>
                                            <span class="login-danger">Nível Académico</span></label>
                                        <select required name="fk_academic_livels_id" class="form-control"
                                            aria-label="Default select example">
                                            <option disabled>Selecione o Nível Académico
                                                @foreach ($academic_livels as $item)
                                            <option value="{{ $item->id }}">{{ $item->academicLeveisName }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-8">
                                    <div class="form-group local-forms">
                                        <label>
                                            <span class="login-danger">Alguns Detalhes</span></label>
                                        <input required
                                            value="{{ isset($teacher_subjects->detail) ? $teacher_subjects->detail : old('detail') }}"
                                            type="text" name="detail" placeholder="" class="form-control">
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
