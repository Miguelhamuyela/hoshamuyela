@extends('layouts.merge.dashboard')
@section('titulo', 'Pagamento de Propina')
@section('content')




<div class="dashboard-content-one">
    <div class="card height-auto">

        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Pagamento de Propina</h3>
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


            <form action="{{ route('admin.payment.store') }}" method="POST" class="new-added-form" enctype="multipart/form-data">
                 @csrf
               @include('forms._formPayments.index')
            </form>
        </div>
    </div>

</div>

@endsection

