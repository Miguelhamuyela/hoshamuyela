@extends('layouts.merge.dashboard')
@section('titulo', 'Editar o Turma')
@section('content')




<div class="dashboard-content-one">

    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Editar o Turma</h3>
                </div>

            </div>
            <form action="{{ route('admin.classe.update',$classes->id) }}" method="POST" class="new-added-form">
                @method('PUT')
                @csrf
               @include('forms._formClasse.index')
            </form>
        </div>
    </div>

</div>




@endsection
