<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="content container-fluid">
            <div class="page-header">

                <div class="col-auto text-end float-end ms-auto download-grp">
                    <a href="{{ route('admin.room_academic_years.index') }}" class="btn btn-outline-primary me-2"><i
                            class=""></i>Lista dos Estudante Cadastrado no Dormitório Anual</a>
                    <a href="{{ route('admin.room_academic_years.create') }}"></i></a>
                </div>
                <div class="row align-items-center">
                    <div class="col">
                        <hr>
                        <h3 class="page-title">Adicionar Novo Estudente no Dormitório
                            <hr>
                        </h3>
                        <hr>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#"></a>
                            </li>
                        </ul>
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
                                            <label>Seccção de Dormitório<span class="login-danger"></span></label>
                                            <input  required
                                            value="{{ isset($room_academic_years->section) ? $room_academic_years->section : old('section') }}"
                                            type="text" name="section"class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Nome do Responsavel do Dormitório
                                                <span class="login-danger"></span></label>
                                            <input  required
                                            value="{{ isset($room_academic_years->headRoom) ? $room_academic_years->headRoom : old('headRoom') }}"
                                            type="text" name="headRoom"class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms ">
                                            <label>Estado do Dormitório
                                                <span class="login-danger"></span></label>
                                            <input  required
                                            value="{{ isset($room_academic_years->RoomState) ? $room_academic_years->RoomState : old('RoomState') }}"
                                            class="form-control " name="RoomState"type="text"
                                                placeholder="" />
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
                                            <label>Ano Lectivo
                                                <span class="login-danger"></span></label>
                                            <input  required
                                            value="{{ isset($room_academic_years->startYear) ? $room_academic_years->startYear : old('startYear') }}"
                                            type="text" name="startYear"class="form-control" />
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
