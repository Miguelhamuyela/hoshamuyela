<div class="page-wrapper" style="min-height: 714px;">
    <div class="card invoices-tabs-card border-0">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Adicionar Novo Pedido de Documento Cadastrado </h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.resquest_academic_years.index') }}">Ver a Lista dos  Pedido de documento Cadastrado</a>
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
                    <div class="row">
                        <div class="col-12">
                            <h5 class="form-title">
                                <span>Adicionar Novo Pedido de Documento</span>
                            </h5>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Nº do Estudante
                                    <span class="login-danger"></span></label>
                                <input required value="{{ isset($students->name) ? $students->name : old('name') }}"
                                    id="bi" name="bi" type="text" placeholder="Código do Estudante"
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
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Tipo de Documento
                                    <span class="login-danger"></span></label>
                                <select required name="fk_request_documents_id" class="form-control"
                                    aria-label="Default select example">
                                    <option disabled>Selecione o Curso</option>
                                    @foreach ($request_documents as $item)
                                        <option value="{{ $item->id }}">{{ $item->requestName }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Ano Lectivo
                                    <span class="login-danger"></span></label>
                                <input type="text"name="startYear" class="form-control" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Telefone<span class="login-danger"></span></label>
                                <input type="text" name="phone"class="form-control" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Telefone Altenativo<span class="login-danger"></span></label>
                                <input type="text" name="phoneAlt"class="form-control" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Selecione o Nível de Documento <span class="login-danger"></span></label>
                                <select required
                                    value="{{ isset($documentLivel->documentLivel) ? $documentLivel->documentLivel : old('documentLivel') }}"name="documentLivel"
                                    class="form-control border-secondary" name="select">
                                    @if (isset($documentLivel))
                                        <option selected value="{{ $documentLivel->documentLivel }}">{{ $documentLivel->documentLivel }}
                                        </option>
                                    @endif
                                    @if (isset($documentLivel) && $documentLivel->documentLivel != 'Pago')
                                        <option value="">Selecionar o Nível de Documento...</option>
                                        <option value="Urgente">Urgente</option>
                                        <option value="Muito Urgente">Muito Urgente</option>
                                    @else
                                        <option value="">Selecionar o Nível de Documento...</option>
                                        <option value="Urgente">Urgente</option>
                                        <option value="Muito Urgente">Muito Urgente</option>
                                    @endif
                                </select>
                            </div>
                        </div>


                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Selecione o Estado do Documento <span class="login-danger"></span></label>
                                <select required
                                    value="{{ isset($document->document) ? $obs->obs : old('document') }}"name="document"
                                    class="form-control border-secondary" name="select">
                                    @if (isset($document))
                                        <option selected value="{{ $document->document }}">{{ $document->document }}
                                        </option>
                                    @endif
                                    @if (isset($document) && $document->document != 'Documento')
                                        <option value="">Selecionar o Estado do Documento...</option>
                                        <option value="pedente">pedente</option>
                                        <option value="Entregue">Entregue</option>
                                        <option value="Em Processo">Em Processo</option>
                                    @else
                                        <option value="">Selecionar o Estado do Documento...</option>
                                        <option value="pedente">pedente</option>
                                        <option value="Entregue">Entregue</option>
                                        <option value="Em Processo">Em Processo</option>
                                    @endif
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
