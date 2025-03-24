@extends('layouts.merge.dashboard')
@section('titulo', 'Editar Dormitório')
@section('content')





            <form action="{{ route('admin.rectors.store',$rectors->id) }}" method="POST" class="new-added-form">
                @method('PUT')
                @csrf
               @include('forms._FormRector.index')
            </form>
        </div>
    </div>

</div>




@endsection

