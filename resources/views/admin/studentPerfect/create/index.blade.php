@extends('layouts.merge.dashboard')
@section('titulo', 'Perfecto dos Estudos')
@section('content')


<div class="card-body">
    <div class="heading-layout1">
        <div class="item-title">
            <h3>Perfecto dos Estudos</h3>

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







            <form enctype="multipart/form-data" action="{{ route('admin.student_perfects.store') }}" method="POST" class="new-added-form">
                 @csrf
               @include('forms._formStudentPerfect.index')
            </form>
        </div>
    </div>

</div>




@endsection

