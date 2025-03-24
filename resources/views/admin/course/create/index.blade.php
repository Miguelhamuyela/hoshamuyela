@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastro de Curso')
@section('content')
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>Cadastro da Provincia</h3>
            </div>
            <br><br>
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

        <form action="{{ route('admin.course.store') }}" enctype="multipart/form-data" method="POST" class="new-added-form">
            @csrf
            @include('forms._formCourse.index')
        </form>
    </div>
    </div>
    <br><br> <br><br>
    </div>
@endsection
