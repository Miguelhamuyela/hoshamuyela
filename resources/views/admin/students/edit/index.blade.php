@extends('layouts.merge.dashboard')
@section('titulo', 'Editar Dormitório')
@section('content')







            <form action="{{ route('admin.students.update',$students->id) }}" method="POST" class="new-added-form">
                @method('PUT')
                @csrf
               @include('forms._formStudent.index')
            </form>
        </div>
    </div>

</div>
@endsection

