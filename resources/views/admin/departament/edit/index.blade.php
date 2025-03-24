@extends('layouts.merge.dashboard')
@section('titulo', 'Editar Departamento')
@section('content')





            <form action="{{ route('admin.departments.update',$departaments->id) }}" method="POST" class="new-added-form">
                @method('PUT')
                @csrf
               @include('forms._formDepartament.index')
            </form>
        </div>
    </div>

</div>




@endsection

