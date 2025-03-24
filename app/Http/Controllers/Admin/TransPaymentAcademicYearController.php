<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicYear;
use App\Models\Course;
use App\Models\Student;
use App\Models\TransPaymentAcademicYear;
use Illuminate\Http\Request;
use PDF;
class TransPaymentAcademicYearController extends Controller
{

    public function index()
    {
        $response['trans_payment_academic_years'] = TransPaymentAcademicYear::with('students')->paginate(7);
        return view('admin.transPaymentAcademicYear.list.index', $response);
    }


    public function GetSubCatAgainstMain($id)
    {
        echo json_encode(Student::where('id', $id)->get());
    }

    public function trans_payment_academic_years_seach(Request $request)
    {
        return redirect("admin/pagamento-transporte/seachResult/{$request->startYear}");
    }

    public function seachResult($startYear)
    {
        $response['trans_payment_academic_years'] = TransPaymentAcademicYear::with('students')->where('startYear', $startYear)->get();
        return view('admin.transPaymentAcademicYear.list.index', $response);
    }

    public function sendStartYear(Request $request)
    {
        return redirect("admin/pagamento-transporte/recibo/{$request->startYear}");
    }

    public function print($startYear)
    {
        $response['trans_payment_academic_years'] = TransPaymentAcademicYear::with('students')->where('startYear', $startYear)->get();
        $pdf = PDF::loadview('admin.pdf.transPaymentAcademicYear.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf');
    }


    public function create()
    {
        $response['courses'] = Course::get();
        $response['academic_years'] = AcademicYear::get();
        $response['students'] = Student::get();
       return view("admin.transPaymentAcademicYear.create.index",$response);
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'startYear' => 'required|max:255',
        ]);

        TransPaymentAcademicYear::create([
            'fk_students_id' => $request->fk_students_id,
            'fk_course_id' => $request->fk_course_id,
            'startYear' => $request->startYear,
            'reference' => $request->reference,
            'month' => $request->month,
            'paymentForm' => $request->paymentForm,
            'payment' => $request->payment,
            'paymentDetails' => $request->paymentDetails,

        ]);

        return redirect()->route('admin.trans_payment_academic_years.create')->with('create', 1);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {

        $response['students'] = Student::find($id);
        $response['courses']= Course::find($id);
        return view('admin.course.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        TransPaymentAcademicYear::find($id)->update($request->all());
        return redirect()->route('admin.trans_payment_academic_years.index')->with('edit', 1);
    }

    public function destroy($id)
    {
        TransPaymentAcademicYear::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
