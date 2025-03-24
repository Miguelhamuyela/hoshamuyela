@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastro de Novo tipo de Donativo')
@section('content')


            <form action="{{ route('admin.donations.store') }}" method="POST" class="new-added-form">
                 @csrf
               @include('forms._formDonation.index')
            </form>
        </div>
    </div>
</div>
@endsection
