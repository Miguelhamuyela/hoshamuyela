@extends('layouts.merge.dashboard')
@section('titulo', 'Editar o Professor ao Ano Lectivo')
@section('content')




<div class="dashboard-content-one">

    <div class="card height-auto">
        <div class="card-body">



            <form action="{{ route('admin.teacher_academic_years.update',$teacher_academic_years->id) }}" method="POST" class="new-added-form">
                @method('PUT')
                @csrf
               @include('forms._formTeacherAcademicYear.index')
            </form>
        </div>
    </div>

</div>

@endsection
