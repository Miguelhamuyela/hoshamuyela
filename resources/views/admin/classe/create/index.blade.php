@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastro de Turma')
@section('content')


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

            <form action="{{ route('admin.classe.store') }}" method="POST" class="new-added-form">
                 @csrf
               @include('forms._formClasse.index')
            </form>
        </div>
    </div>

</div>




@endsection

