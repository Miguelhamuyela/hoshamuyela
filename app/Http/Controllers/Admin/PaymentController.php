<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicLivel;
use App\Models\AcademicYear;
use App\Models\Course;
use App\Models\Payment;
use App\Models\Student;
use Illuminate\Http\Request;
use PDF;

class PaymentController extends Controller
{

    public function index()
    {

        $response['payments'] = Payment::paginate(10);
        return view("admin.payment.list.index", $response)->with('destroy',1);
    }


    public function create()
    {
        $response['payments'] = Payment::with('courses', 'academic_livels', 'academic_years', 'classes')->get();
        $response['courses'] = Course::get();
        $response['academic_years'] = AcademicYear::get();
        return view('admin.payment.create.index', $response);
    }


    public function GetSubCatAgainstMain($id)
    {
        echo json_encode(Student::where('id', $id)->get());
    }


    public function store(Request $request)
    {
        $validation = $request->validate([
            // 'startYear' => 'required|max:255',

        ]);

        Payment::create([
            'reference' => $request->reference,
            'month' => $request->month,
            'paymentForm' => $request->paymentForm,
            'coursePrice' => $request->coursePrice,
            'fk_course_id' => $request->fk_course_id,
            'fk_academic_years_id' => $request->fk_academic_years_id,
            'fk_students_id' => $request->fk_students_id,
            'image' => $request->image,
        ]);

        return redirect()->route('admin.payment.create')->with('create', 1);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['payments'] = Payment::with('academic_years', 'students', 'courses')->find($id);
        $pdf = PDF::loadview('admin.pdf.student.index', $response);
        return $pdf->setPaper('a4')->stream('pdf');
        $response['payments'] = Payment::find($id);
        return view('admin.payment.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['payments'] = Payment::with('courses', 'academic_years', 'classes')->find($id);
        $response['courses'] = Course::get();
        $response['academic_years'] = AcademicYear::get();
        return view('admin.payment.edit.index', $response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function print(Request $request)
    {
        $response['payments'] = Payment::where('origin', $request->origin);

        $pdf = PDF::loadview('admin.pdf.payment.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf');
    }

    public function destroy($id)
    {
        Payment::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
