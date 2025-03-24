@extends('layouts.merge.dashboard')
@section('titulo', 'Finaliste')
@section('content')

    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>FINALISTA</h3>
            </div>
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
        <form enctype="multipart/form-data" action="{{ route('admin.finalists.store') }}" method="POST" class="new-added-form">
            @csrf
            @include('forms._formFinalist.index')
        </form>
    </div>
    </div>
    </div>




@endsection
