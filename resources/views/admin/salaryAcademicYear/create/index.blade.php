@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastro de Disciplina')
@section('content')


<div class="card-body">
    <div class="heading-layout1">
        <div class="item-title">
            <h3>Cadastro de Disciplina</h3>
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



            <form action="{{ route('admin.salary_academic_years.store') }}" method="POST" class="new-added-form">
                 @csrf
               @include('forms._formSalaryAcademicYear.index')
            </form>
        </div>
    </div>

</div>




@endsection
