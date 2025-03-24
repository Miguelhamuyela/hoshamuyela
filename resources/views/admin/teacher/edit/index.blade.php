@extends('layouts.merge.dashboard')
@section('titulo', 'Editar Professor')
@section('content')







            <form action="{{ route('admin.teachers.update',$teachers->id) }}" method="POST" class="new-added-form">
                @method('PUT')
                @csrf
               @include('forms._formTeacher.index')
            </form>
        </div>
    </div>

</div>
@endsection

