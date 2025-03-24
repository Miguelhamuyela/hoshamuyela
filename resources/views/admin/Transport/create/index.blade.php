@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastro de Tipo de Transporte')
@section('content')







            <form action="{{ route('admin.transports.store') }}" method="POST" class="new-added-form">
                 @csrf
               @include('forms._formTransport.index')
            </form>
        </div>
    </div>
</div>

@endsection
