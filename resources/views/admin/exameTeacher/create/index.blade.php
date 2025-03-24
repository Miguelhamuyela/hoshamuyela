@extends('layouts.merge.dashboard')
@section('titulo', 'Inscriçâo de Exame')
@section('content')

    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>Inscrição de Exame</h3>


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

        <form enctype="multipart/form-data" action="{{ route('admin.teacher_exames.store') }}" method="POST" class="new-added-form">
            @csrf
            @include('forms._formExamTeacher.index')
        </form>
    </div>

    </div>
    </div>




@endsection
