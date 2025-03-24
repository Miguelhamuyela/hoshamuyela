<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aproveitament;
use App\Models\Classe;
use App\Models\Course;
use App\Models\HonorAcademicYear;
use App\Models\Student;
use Illuminate\Http\Request;
use PDF;
class HonorAcademicYearController extends Controller
{

    public function index()
    {
        $response['honor_academic_years'] = HonorAcademicYear::with('students')->get();
        return view('admin.honorAcademicYear.list.index', $response);
    }

    public function create()
    {
        $response['classes'] = Classe::get();
        $response['aproveitaments'] = Aproveitament::get();
        $response['courses'] = Course::get();
        $response['students'] = Student::get();
        $response['honor_academic_years'] = HonorAcademicYear::get();
        return view('admin.honorAcademicYear.create.index', $response);
    }

    public function GetSubCatAgainstMain($id)
    {
        echo json_encode(Student::where('id', $id)->get());
    }

    public function honor_academic_years_seach(Request $request)
    {
       return redirect("admin/quandro-honra/seachResult/{$request->startYear}");
    }

    public function seachResult($startYear)
    {
      $response['honor_academic_years'] = HonorAcademicYear::with('students')->where('startYear', $startYear)->get();
      return view('admin.honorAcademicYear.list.index', $response);
    }

    public function sendStartYear(Request $request)
    {
        return redirect("admin/quandro-honra/recibo/{$request->startYear}");
    }

    public function print($startYear)
    {
        $response['honor_academic_years']=HonorAcademicYear::with('honor_academic_years')->where('startYear', $startYear)->get();
        $pdf = PDF::loadview('admin.pdf.HonorAcademicYear.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf');
    }

    public function store(Request $request)
    {
        HonorAcademicYear::create([
            'room'=>$request->room,
            'phone'=>$request->phone,
            'startYear'=>$request->startYear,
            'from'=>$request->from,
            'fk_students_id'=>$request->fk_students_id,
            'fk_course_id'=>$request->fk_course_id,
            'fk_classes_id'=>$request->fk_classes_id,
            'obs' => $request->obs,
            'image' => $request->image,
            ]);

            return redirect()->route('admin.honor_academic_years.create')->with('create',1);
    }


    public function show($id)
    {
       // $response['honor_academic_years'] = HonorAcademicYear::with('classes', 'courses')->get();
      //  $pdf = PDF::loadview('admin.pdf.HonorAcademicYear.index', $response);
       // return $pdf->setPaper('a4')->stream('pdf');
       // return view('admin.honorAcademicYear.details.index', $response);

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
