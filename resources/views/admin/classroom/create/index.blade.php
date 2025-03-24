
@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastro de Sala de Aula')
@section('content')


<div class="card-body">
    <div class="heading-layout1">
        <div class="item-title">
            <h3>Cadastro de Sala de Aula</h3>
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


            <form action="{{ route('admin.classroom.store') }}" method="POST" enctype="multipart/form-data" class="new-added-form">
                 @csrf
               @include('forms._formClassroom.index')
            </form>
        </div>
    </div>

</div>




@endsection
