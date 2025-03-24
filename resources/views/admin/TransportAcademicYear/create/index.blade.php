@extends('layouts.merge.dashboard')
@section('titulo', 'Adicionar Estudante do Transporte')
@section('content')



    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>ADICIONAR ESTUDANTE NO TRANSPORTE</h3>
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

        <form enctype="multipart/form-data" action="{{ route('admin.transport_academic_years.store') }}" method="POST" class="new-added-form">
            @csrf
            @include('forms._formTransAcademicYear.index')
        </form>
    </div>
    </div>

    </div>




@endsection
