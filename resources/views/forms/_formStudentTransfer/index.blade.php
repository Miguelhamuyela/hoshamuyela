<div class="page-wrapper">
        <div class="card invoices-tabs-card border-0">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Adicionar Novo Pedido de  Transferência </h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.student_transfers.index') }}">Ver a Lista dos Estudantes Transferência</a>
                            </li>
                        </ul>
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

                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Nº do Estudante
                                            <span class="login-danger"></span></label>
                                        <input value="{{ isset($students->name) ? $students->name : old('name') }}"
                                            id="bi" name="bi" type="text"
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
                                        <label>Selecione o Curso
                                            <span class="login-danger"></span></label>
                                        <select required name="fk_course_id" class="form-control"
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
                                        <label>Selecione a Turma
                                            <span class="login-danger"></span></label>
                                        <select required name="fk_classes_id" class="form-control"
                                            aria-label="Default select example">
                                            <option disabled>Selecione a Turma</option>
                                            @foreach ($classes as $item)
                                                <option value="{{ $item->id }}">{{ $item->classeName }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Selecione o tipo de Transfrência ou Motivo(Causa)
                                            <span class="login-danger"></span></label>
                                        <select required name="fk_transfers_id" class="form-control"
                                            aria-label="Default select example">
                                            <option disabled>Selecione o tipo de Transfrência ou Motivo(Causa)</option>
                                            @foreach ($transfers as $item)
                                                <option value="{{ $item->id }}">{{ $item->nameTransfer }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Tipo de Estudante
                                            <span class="login-danger"></span></label>
                                        <select required
                                            value="{{ isset($typeStudent->typeStudent) ? $typeStudent->typeStudent : old('typeStudent') }}"name="typeStudent"
                                            class="form-control border-secondary" name="select">
                                            @if (isset($typeStudent))
                                                <option selected value="{{ $student_transfers->typeStudent }}">
                                                    {{ $student_transfers->typeStudent }}
                                                </option>
                                            @endif
                                            @if (isset($typeStudent) && $typeStudent->typeStudent != 'Tipo de Estudante')
                                                <option value="">Selecionar o Tipo de Aluno ou Estudante...
                                                </option>
                                                <option value="Interno">Interno</option>
                                                <option value="Externo">Externo</option>
                                            @else
                                                <option value="">Selecionar o Tipo de Aluno ou Estudante...
                                                </option>
                                                <option value="Interno">Interno</option>
                                                <option value="Externo">Externo</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Ano Lectivo
                                            <span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($student_transfers->startYear) ? $student_transfers->startYear : old('startYear') }}"
                                            type="text" name="startYear" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Quarto do Estudante
                                            <span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($student_transfers->bedroom) ? $student_transfers->bedroom : old('bedroom') }}"
                                            type="text" name="bedroom" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <div class="form-group local-forms">
                                        <label>Número da Cama
                                            <span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($student_transfers->bedNumber) ? $student_transfers->bedNumber : old('bedNumber') }}"
                                            type="text" name="bedNumber" placeholder="" class="form-control">
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
