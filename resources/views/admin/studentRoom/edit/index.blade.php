@extends('layouts.merge.dashboard')
@section('titulo', 'Editar Dormitório')
@section('content')







            <form action="{{ route('admin.student_rooms.update',$student_rooms->id) }}" method="POST" class="new-added-form">
                @method('PUT')
                @csrf
               @include('forms._formStudentRoom.index')
            </form>
        </div>
    </div>

</div>
@endsection
