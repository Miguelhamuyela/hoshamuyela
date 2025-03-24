@extends('layouts.merge.dashboard')
@section('titulo', ' professor numa turma')
@section('content')
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>Inscrição do Estudante</h3>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form enctype="multipart/form-data" action="{{ route('admin.teacher_classes.store') }}" method="POST" class="new-added-form">
            @csrf
            @include('forms._formTeacherClasse.index')
        </form>
    </div>
    </div>
    </div>
@endsection
