<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\AcademicYear;
use App\Models\Classe;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Student;
use App\Models\StudentAcademicYear;
use App\Models\Subject;
use Illuminate\Http\Request;
use PDF;

class StudentAcademicYearController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['student_academic_years'] = StudentAcademicYear::with('students')->paginate(8);
        //Logger
        $this->Logger->log('info', 'Listou os estudantes');

        return view('admin.studentAcademicYear.list.index', $response);
    }


    public function GetSubCatAgainstMain($id)
    {
        echo json_encode(Student::where('id', $id)->get());
    }

    public function create()
    {
        $response['subjects'] = Subject::get();
        $response['classes'] = Classe::get();
        $response['courses'] = Course::get();
        $response['students'] = Student::get();
        $response['academicYears'] = AcademicYear::get();
        return view('admin.studentAcademicYear.create.index', $response);
    }


    public function student_academic_years_seach(Request $request)
    {
        return redirect("admin/ano-academico-estudantes/seachResult/{$request->startYear}");
    }


    public function seachResult($startYear)
    {

        $response['student_academic_years'] = StudentAcademicYear::with('students')->where('startYear', $startYear)->get();
        return view('admin.studentAcademicYear.list.index', $response);
    }


    public function sendStartYear(Request $request)
    {
        return redirect("admin/ano-academico-estudantes/recibo/{$request->startYear}");
    }

    public function print($startYear)
    {
        $response['student_academic_years'] = StudentAcademicYear::with('students')->where('startYear', $startYear)->get();
        $pdf = PDF::loadview('admin.pdf.studentAcademicYear.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf');
    }



    public function store(Request $request)
    {
        $validation = $request->validate([
            'startYear' => 'required|max:255',
            'phone' => 'required|max:255',
            'fk_students_id' => 'required|max:255',
            'fk_course_id' => 'required|max:255',
        ]);
        StudentAcademicYear::create([
            'fk_students_id' => $request->fk_students_id,
            'fk_course_id' => $request->fk_course_id,
            'typeStudent' => $request->typeStudent,
            'startYear' => $request->startYear,
            'phone' => $request->phone,
            'phoneAlt' => $request->phoneAlt,
            'period' => $request->period,
            'academiclevel' => $request->academiclevel,
        ]);

        return redirect()->route('admin.student_academic_years.create')->with('create', 1);
    }

    public function show($id)
    {

        $response['student_academic_years'] = StudentAcademicYear::with('students', 'courses')->get();
        $pdf = PDF::loadview('admin.pdf.studentAcademicYear.index', $response);
        return $pdf->setPaper('a4')->stream('pdf');
        return view('admin.studentAcademicYear.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['courses'] = Course::get();
        $response['students'] = Student::get();
        $response['student_academic_years'] = StudentAcademicYear::find($id);
        return view('admin.studentAcademicYear.edit.index', $response);
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
        StudentAcademicYear::find($id)->update($request->all());
        return redirect()->route('admin.student_academic_years.index')->with('edit', 1);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um Estudante com o identificador ' . $id);
        StudentAcademicYear::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
