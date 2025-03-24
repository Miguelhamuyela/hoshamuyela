@extends('layouts.merge.dashboard')
@section('titulo', 'Editar Dormitório')
@section('content')





            <form action="{{ route('admin.rooms.update',$rooms->id) }}" method="POST" class="new-added-form">
                @method('PUT')
                @csrf
               @include('forms._formRoom.index')
            </form>
        </div>
    </div>

</div>




@endsection

