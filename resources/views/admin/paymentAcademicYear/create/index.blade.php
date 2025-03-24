@extends('layouts.merge.dashboard')
@section('titulo', 'Pagamento de Propina')
@section('content')

    <div class="heading-layout1">
        <div class="item-title">
            <h3>Cadastro de Departamento</h3>
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



<form action="{{ route('admin.payment_academic_years.store') }}" method="POST" class="new-added-form" enctype="multipart/form-data">
    @csrf
  @include('forms._formPaymentAcademicYear.index')
</form>

        </div>
    </div>

</div>
@endsection










