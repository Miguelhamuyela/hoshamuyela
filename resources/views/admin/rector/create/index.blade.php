@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastro de Reitor')
@section('content')
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>ADICIONAR NOVO REITOR</h3>
            </div>
            <br><br>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form enctype="multipart/form-data" action="{{ route('admin.rectors.store') }}" method="POST" class="new-added-form">
            @csrf
            @include('forms._FormRector.index')
        </form>
    </div>
    </div>

    </div>




@endsection
