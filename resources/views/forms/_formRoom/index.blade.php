<div class="page-wrapper">
    <div class="page-header">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                </div>
                <div class="col-auto text-end float-end ms-auto download-grp">
                    <a href="{{ route('admin.rooms.index') }}" class="btn btn-primary"><i
                            class="">LISTA DE DORMITÓRIO</i></a>
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
                            <br><br>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Novo Dormitório<span class="login-danger"></span></label>
                                <input required
                                value="{{ isset($rooms->name) ? $rooms->name : old('name') }}" type="text" name="name"class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Nº de Estudante no Dormitório<span class="login-danger"></span></label>
                                <input required
                                value="{{ isset($rooms->numberStudent) ? $rooms->numberStudent : old('numberStudent') }}" type="text" name="numberStudent"class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Número de Cama<span class="login-danger"></span></label>
                                <input required
                                value="{{ isset($rooms->numberBad) ? $rooms->numberBad : old('numberBad') }}" type="text" name="numberBad"class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <textarea required
                            value="{{ isset($rooms->description) ? $rooms->description : old('description') }}" rows="5" cols="5" name="description"class="form-control"
                                placeholder="Descrição sobre o Dormitório"></textarea>
                        </div>
                        <div class="col-12">
                            <br>
                            <div class="student-submit">
                                <button type="submit" class="btn btn-primary">GUARDAR</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
