@extends('layouts.merge.dashboard')
@section('titulo', 'Editar Exame')
@section('content')





            <form action="{{ route('admin.payment_academic_years.update',$exams->id) }}" method="POST" class="new-added-form">
                @method('PUT')
                @csrf
               @include('forms._formPaymentAcademicYear.index')
            </form>
        </div>
    </div>

</div>


@endsection

