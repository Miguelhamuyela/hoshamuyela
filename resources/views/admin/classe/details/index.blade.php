@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes do Turma')
@section('content')



<div class="dashboard-content-one">

    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Detalhes da Turma -> {{ $classes->name }}</h3>
                </div>



                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">...</a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('admin.classe.delete',$classes->id) }}"><i
                                class="fas fa-times text-orange-red"></i>Elimir</a>
                        <a class="dropdown-item" href="{{ route('admin.classe.edit',$classes->id) }}"><i
                                class="fas fa-cogs text-dark-pastel-green"></i>Editar</a>

                    </div>
                </div>

            </div>

        </div>
    </div>

</div>





<div class="dashboard-content-one">

    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">

                <b>Nome da Turma:</b> <strong>{{ $classes->name }}</strong>
                <br><br><br><br>
                <b>ID do Curso:</b> <strong>{{ $classes->id }}</strong>


            </div>
            <b >Data de inserção:</b> <strong style="margin-right: 90px;">{{ $classes->created_at }}</strong>
            <b>Descrição do Turma:</b> <strong>{{ $classes->descrition }}</strong>
        </div>
    </div>

</div>







@endsection
