@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastro de Pedido de Documento')
@section('content')
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>Cadastro da Pedido de Documento</h3>
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

        <form action="{{ route('admin.resquest_academic_years.store') }}" enctype="multipart/form-data" method="POST" class="new-added-form">
            @csrf
            @include('forms._formResquestAcademicYear.index')
        </form>
    </div>
    </div>
    <br><br> <br><br>
    </div>
@endsection
