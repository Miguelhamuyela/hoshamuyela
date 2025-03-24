@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastro de Habilitação Literária')
@section('content')



    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>Cadastro de Habilitação Literária</h3>
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

        <form action="{{ route('admin.academicLivel.store') }}" method="POST" class="new-added-form">
            @csrf
            @include('forms._formAcademicLivel.index')
        </form>
    </div>
    </div>

    </div>




@endsection
