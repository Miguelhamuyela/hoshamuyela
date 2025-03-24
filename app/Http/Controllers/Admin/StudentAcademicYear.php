<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicLivel;
use App\Models\AcademicYear;
use App\Models\Classe;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Province;
use App\Models\Student;
use App\Models\StudentAcademicYea;
use App\Models\Test;
use Illuminate\Http\Request;
use PDF;

class StudentAcademicYear extends Controller
{

    public function index()
    {
        $response['studentAcademicYeas'] =  StudentAcademicYea::with('students')->get();
        return view('admin.studentAcademicYear.list.index', $response);

    }



    public function GetSubCatAgainstMain($id)
    {
        echo json_encode(Student::where('id', $id)->get());
    }


    public function create()
    {
        $response['classrooms'] = Classroom::get();
        $response['classes'] = Classe::get();
        $response['courses'] = Course::get();
        $response['students'] = Student::get();
        $response['academicYears'] = AcademicYear::get();
        return view('admin.studentAcademicYear.create.index', $response);
    }

    public function store(Request $request)
    {

        $validation = $request->validate([
            'startYear' => 'required|',
            'email' => 'required|',
            'phone' => 'required|',
            'detail' => 'required|',
            'typeStudent' => 'required|',
            'fk_course_id' => 'required|max:255',
            'fk_students_id' => 'required|max:255',
            'fk_classes_id' => 'required|max:255',
            'fk_classrooms_id' => 'required|max:255',
        ]);

        StudentAcademicYea::create([
            'startYear' =>  $request->startYear,
            'fk_students_id' => $request->fk_students_id,
            'fk_course_id' => $request->fk_course_id,
            'typeStudent' => $request->typeStudent,
            'fk_classes_id' => $request->fk_classes_id,
            'fk_classrooms_id' => $request->fk_classrooms_id,
            'timeStudent' => $request->timeStudent,
            'email' => $request->email,
            'phone' => $request->phone,
            'detail' => $request->detail,

        ]);


        return redirect()->route('admin.student_academic_years.create')->with('create', 1);
    }




    public function student_academic_years_seach(Request $request)
    {
       return redirect("admin/ano-academico-estudantes/seachResult/{$request->startYear}");
    }


    public function seachResult($startYear)
    {

      $response['studentAcademicYeas'] = StudentAcademicYea::with('students')->where('startYear', $startYear)->get();
      return view('admin.studentAcademicYear.list.index', $response);
    }


    public function sendStartYear(Request $request)
    {
        return redirect("admin/ano-academico-estudantes/recibo/{$request->startYear}");
    }





    public function print($startYear)
    {
         $response['studentAcademicYeas'] = StudentAcademicYea::with('students')->where('startYear', $startYear)->get();
        $pdf = PDF::loadview('admin.pdf.studentAcademicYear.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf');
    }




    public function show($id)
    {
        $response['student_academic_years'] = StudentAcademicYea::with('students', 'courses')->get();
        $pdf = PDF::loadview('admin.pdf.studentAcademicYear.index', $response);
        return $pdf->setPaper('a4')->stream('pdf');
        return view('admin.studentAcademicYear.details.index', $response);
    }

    public function edit($id)
    {

        $response['provinces'] = Province::get();
        $response['courses'] = Course::get();
        $response['classes'] = Classe::get();
        $response['classrooms'] = Classroom::get();
        $response['students'] = Student::get();
        $response['student_academic_years'] = StudentAcademicYea::find($id);
        return view('admin.studentAcademicYear.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        StudentAcademicYea::find($id)->update($request->all());
        return redirect()->route('admin.student_academic_years.index')->with('edit', 1);
    }

    public function destroy($id)
    {
        StudentAcademicYea::find($id)->delete();
        return redirect()->back();
    }
}
