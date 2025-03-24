@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes do Curso')
@section('content')



<div class="dashboard-content-one">

    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Detalhes do Curso -> {{ $course->name }}</h3>
                </div>

                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">...</a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('admin.course.delete',$course->id) }}"><i
                                class="fas fa-times text-orange-red"></i>Elimir</a>
                        <a class="dropdown-item" href="{{ route('admin.course.edit',$course->id) }}"><i
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

                <b>Nome do Curso:</b> <strong>{{ $academicLivel->name }}</strong>
                <b>ID do Curso:</b> <strong>{{ $course->id }}</strong>




            </div>
            <b >Data de inserção:</b> <strong style="margin-right: 90px;">{{ $course->created_at }}</strong>
            <b>Descrição do Curso:</b> <strong>Uhfbefkbasfbeksuerferfefdsfgrdgdrsfdrgwfesfetgrgsgtrgtrgstgtrgtrgtrgr.</strong>
        </div>
    </div>

</div>







@endsection
