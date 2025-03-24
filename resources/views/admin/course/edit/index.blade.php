@extends('layouts.merge.dashboard')
@section('titulo', 'Editar o Curso')
@section('content')




<div class="dashboard-content-one">

    <div class="card height-auto">
        <div class="card-body">
           
            <form action="{{ route('admin.course.update',$course->id) }}" method="POST" class="new-added-form">
                @method('PUT')
                @csrf
               @include('forms._formCourse.index')
            </form>
        </div>
    </div>

</div>




@endsection
