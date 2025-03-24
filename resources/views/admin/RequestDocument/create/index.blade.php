@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastro de Pedido')
@section('content')



    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>ADICIONAR NOVO TIPO DE DOCUMENTO DE DOCUMENTO</h3>
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



        <form enctype="multipart/form-data" action="{{ route('admin.request_documents.store') }}" method="POST" class="new-added-form">
            @csrf
            @include('forms._formRequestDocument.index')
        </form>
    </div>
    </div>
    </div>
@endsection
