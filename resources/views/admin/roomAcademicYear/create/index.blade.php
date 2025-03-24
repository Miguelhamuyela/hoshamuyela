@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastro do Estudante no Dormitório')
@section('content')
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>Adicionar os Estudante no Dormitório</h3>
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

        <form action="{{ route('admin.room_academic_years.store') }}" method="POST" class="new-added-form">
            @csrf
            @include('forms._formRoomAcademicYear.index')
        </form>
    </div>
    </div>
    </div>
@endsection
