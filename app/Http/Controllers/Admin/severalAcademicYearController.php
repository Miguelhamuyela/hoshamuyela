<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicYear;
use App\Models\Course;
use App\Models\SeveralAcademicYearAcademicYear;
use App\Models\Student;
use Illuminate\Http\Request;

class severalAcademicYearController extends Controller
{

    public function index()
    {
        $response['several_academic_years'] = SeveralAcademicYearAcademicYear::with('students')->paginate(7);
        return view('admin.severalAcademicYear.list.index', $response);
    }

    public function GetSubCatAgainstMain($id)
    {
        echo json_encode(Student::where('id', $id)->get());
    }

    public function several_academic_years_seach(Request $request)
    {
        return redirect("admin/pagamento-diverso/seachResult/{$request->startYear}");
    }

    public function seachResult($startYear)
    {
        $response['several_academic_years'] = SeveralAcademicYearAcademicYear::with('students')->where('startYear', $startYear)->get();
        return view('admin.severalAcademicYear.list.index', $response);
    }

    public function sendStartYear(Request $request)
    {
        return redirect("admin/pagamento-diverso/recibo/{$request->startYear}");
    }

    public function print($startYear)
    {
        $response['several_academic_years'] = SeveralAcademicYearAcademicYear::with('students')->where('startYear', $startYear)->get();
        $pdf = PDF::loadview('admin.pdf.severalAcademicYear.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf');
    }

    public function create()
    {
        $response['courses'] = Course::get();
        $response['academic_years'] = AcademicYear::get();
        $response['students'] = Student::get();
       return view("admin.severalAcademicYear.create.index",$response);
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'startYear' => 'required|max:255',
        ]);

        SeveralAcademicYearAcademicYear::create([
            'fk_students_id' => $request->fk_students_id,
            'fk_course_id' => $request->fk_course_id,
            'startYear' => $request->startYear,
            'reference' => $request->reference,
            'month' => $request->month,
            'paymentForm' => $request->paymentForm,
            'payment' => $request->payment,
            'material' => $request->material,

        ]);

        return redirect()->route('admin.several_academic_years.create')->with('create', 1);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
