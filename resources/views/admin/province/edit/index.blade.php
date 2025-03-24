@extends('layouts.merge.dashboard')
@section('titulo', 'Editar Provincia')
@section('content')




<div class="dashboard-content-one">

    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Cadastro da Provincia</h3>
                </div>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">...</a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i
                                class="fas fa-times text-orange-red"></i>Close</a>
                        <a class="dropdown-item" href="#"><i
                                class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                        <a class="dropdown-item" href="#"><i
                                class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                    </div>
                </div>
            </div>



            <form action="{{ route('admin.province.update',$provinces->id) }}" method="POST" class="new-added-form">
                @method('PUT')
                @csrf
               @include('forms._formProvince.index')
            </form>
        </div>
    </div>

</div>




@endsection
