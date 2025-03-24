<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aproveitament;
use App\Models\Course;
use App\Models\FinalistAcademicYear;
use App\Models\Student;
use Illuminate\Http\Request;
use PDF;
class FinalistAcademicYearsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['finalist_academic_years'] = FinalistAcademicYear::with('students')->get();
        return view('admin.FinalistAcademicYear.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response['aproveitaments'] = Aproveitament::get();
        $response['courses'] = Course::get();
        $response['students'] = Student::get();
        $response['finalist_academic_years'] = FinalistAcademicYear::get();
        return view('admin.FinalistAcademicYear.create.index', $response);

    }

    public function GetSubCatAgainstMain($id)
    {
        echo json_encode(Student::where('id', $id)->get());
    }

    public function store(Request $request)
    {

        FinalistAcademicYear::create([
            'fk_students_id' => $request->fk_students_id,
            'fk_course_id' => $request->fk_course_id,
            'name' => $request->name,
            'startYear' => $request->startYear,
            'naturalness' => $request->naturalness,
            'fk_aproveitaments_id' => $request->fk_aproveitaments_id,

        ]);

        return redirect()->route('admin.finalist_academic_years.create')->with('create', 1);
    }


    
    public function finalist_academic_years_seach(Request $request)
    {
       return redirect("admin/finalista-estudantes/seachResult/{$request->startYear}");
    }

    public function seachResult($startYear)
    {

      $response['finalist_academic_years'] =FinalistAcademicYear::with('students')->where('startYear', $startYear)->get();
      return view('admin.FinalistAcademicYear.list.index', $response);
    }


    public function sendStartYear(Request $request)
    {
        return redirect("admin/finalista-estudantes/recibo/{$request->startYear}");
    }


    public function print($startYear)
    {
         $response['finalist_academic_years'] = FinalistAcademicYear::with('students')->where('startYear', $startYear)->get();
        $pdf = PDF::loadview('admin.pdf.finalistAcademicYear.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf');
    }

    public function show($id)
    {

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
