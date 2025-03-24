<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\PaymentAcademicYear;
use App\Models\Student;
use Illuminate\Http\Request;
use PDF;
class PaymentAcademicYearController extends Controller
{

    public function index()
    {
        $response['payment_academic_years'] = PaymentAcademicYear::with('students')->paginate(7);
        return view('admin.paymentAcademicYear.list.index', $response);
    }

    public function GetSubCatAgainstMain($id)
    {
        echo json_encode(Student::where('id', $id)->get());
    }

    public function create()
    {
        $response['courses'] = Course::get();
        $response['payment_academic_years'] = PaymentAcademicYear::get();
        return view("admin.paymentAcademicYear.create.index", $response);
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'startYear' => 'required|max:255',
        ]);

        PaymentAcademicYear::create([
            'fk_students_id' => $request->fk_students_id,
            'fk_course_id' => $request->fk_course_id,
            'startYear' => $request->startYear,
            'reference' => $request->reference,
            'month' => $request->month,
            'paymentForm' => $request->paymentForm,
            'payment' => $request->payment,
          //  'paymentDescription' => $request->paymentDescription,

        ]);

        return redirect()->route('admin.payment_academic_years.create')->with('create', 1);
    }



    public function payment_academic_years_seach(Request $request)
    {
        return redirect("admin/estudante-pagamento/seachResult/{$request->startYear}");
    }


    public function seachResult($startYear)
    {
        $response['payment_academic_years'] = PaymentAcademicYear::with('students')->where('startYear', $startYear)->get();
        return view('admin.paymentAcademicYear.list.index', $response);
    }


    public function sendStartYear(Request $request)
    {
        return redirect("admin/estudante-pagamento/recibo/{$request->startYear}");
    }

    public function print($startYear)
   {
        $response['payment_academic_years'] = PaymentAcademicYear::with('students')->where('startYear', $startYear)->get();
       $pdf = PDF::loadview('admin.pdf.PaymentAcademicYear.index', $response);
       return $pdf->setPaper('a4', 'landscape')->stream('pdf');
    }


   // public function print(Request $request)
    //{
      //  $response['payment_academic_years'] = PaymentAcademicYear::where('origin', $request->origin);
 // $pdf = PDF::loadview('admin.pdf.PaymentAcademicYear.index', $response);
     // return $pdf->setPaper('a4', 'landscape')->stream('pdf');
 //  }

    public function show($id)
    {
       // $response['payment_academic_years'] = PaymentAcademicYear::with('students', 'courses')->find($id);
      //  $pdf = PDF::loadview('admin.pdf.PaymentAcademicYear.index', $response);
      //  return $pdf->setPaper('a4')->stream('pdf');
     //   return view('admin.PaymentAcademicYear.details.index', $response);


        $response['payment_academic_years'] = PaymentAcademicYear::find($id);
        return view('admin.PaymentAcademicYear.details.index', $response);
    }


    public function edit($id)
    {
        $response['students'] = Student::get();
        $response['courses'] = Course::get();
        $response['payment_academic_years'] = PaymentAcademicYear::find($id);
        return view('admin.paymentAcademicYear.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
