@extends('layouts.merge.dashboard')
@section('titulo', 'Editar a Matricula')
@section('content')







            <form action="{{ route('admin.student_academic_years.update',$student_academic_years->id) }}" method="POST" class="new-added-form">
                @method('PUT')
                @csrf
               @include('forms._formsStudentAcademicYear.index')
            </form>
        </div>
    </div>

</div>
@endsection
