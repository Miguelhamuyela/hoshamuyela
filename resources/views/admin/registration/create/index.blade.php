
@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastro de Confirmaão')
@section('content')




<div class="dashboard-content-one">
    <div class="card height-auto">
        <div class="dashboard-content-one">
            <div class="card height-auto">
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Cadastro de Confirmação</h3>
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




            <form    enctype="multipart/form-data" action="{{ route('admin.registration.store') }}" method="POST" class="new-added-form">
                 @csrf
               @include('forms._formRegistration.index')
            </form>
        </div>
    </div>
</div>






@endsection
