@extends('layouts.merge.dashboard')
@section('titulo', 'Pagamento de Diverso')
@section('content')

    <div class="heading-layout1">
        <div class="item-title">
            <h3>Pagamento Diverso</h3>
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

<form action="{{ route('admin.several_academic_years.store') }}" method="POST" class="new-added-form" enctype="multipart/form-data">
    @csrf
  @include('forms._formSeveralAcademicYear.index')
</form>

        </div>
    </div>

</div>
@endsection
