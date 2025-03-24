@extends('layouts.merge.dashboard')
@section('titulo', 'Editar o Estudante no Dormitório')
@section('content')





            <form action="{{ route('admin.room_academic_years.update',$room_academic_years->id) }}" method="POST" class="new-added-form">
                @method('PUT')
                @csrf
               @include('forms._formRoomAcademicYear.index')
            </form>
        </div>
    </div>
</div>

@endsection

