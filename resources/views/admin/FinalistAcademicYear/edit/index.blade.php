@extends('layouts.merge.dashboard')
@section('titulo', 'Editar Finalista')
@section('content')







            <form action="{{ route('admin.finalist_academic_years.update',$finalist_academic_years->id) }}" method="POST" class="new-added-form">
                @method('PUT')
                @csrf
               @include('forms._formFinalistAcademicYear.index')
            </form>
        </div>
    </div>

</div>
@endsection

