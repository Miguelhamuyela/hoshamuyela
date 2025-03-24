@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastro de Municipio')
@section('content')


            <form action="{{ route('admin.municipe.store') }}" method="POST" class="new-added-form">
                 @csrf
               @include('forms._formMunicipie.index')
            </form>
        </div>
    </div>

</div>




@endsection
