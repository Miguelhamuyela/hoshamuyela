<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicLivel;
use App\Models\AcademicYear;
use App\Models\Classe;
use App\Models\Course;
use App\Models\Departament;
use App\Models\Student;
use App\Models\StudentClass;
use App\Models\Teacher;
use Illuminate\Http\Request;
use PDF;

class StudentClassController extends Controller
{

    public function index()
    {

        $response['student_classes'] =  StudentClass::with('students')->get();
        return view('admin.studentClass.list.index', $response);
    }

    public function GetSubCatAgainstMain($id)
    {
        echo json_encode(Student::where('id', $id)->get());
    }

    public function create()
    {
        $response['departaments'] = Departament::get();
        $response['classes'] = Classe::get();
        $response['courses'] = Course::get();
        $response['academic_years'] = AcademicYear::get();
        return view('admin.studentClass.create.index', $response);
    }

    public function store(Request $request)
    {
        StudentClass::create([
            'fk_students_id' => $request->fk_students_id,
            'fk_departaments_id' => $request->fk_departaments_id,
            'fk_course_id' => $request->fk_course_id,
            'fk_academic_years_id' => $request->fk_academic_years_id,
            'classeName' => $request->classeName,
            'startTime' => $request->startTime,
            'endTime' => $request->endTime,
            'period' => $request->period,
        ]);

        return redirect()->route('admin.student_classes.create')->with('create', 1);
    }


    public function student_classes_seach(Request $request)
    {
        return redirect("admin/student_classes/seachResult/{$request->classeName}");
    }

    public function seachResult($classeName)
    {
        $response['student_classes'] = StudentClass::with('students')->where('classeName', $classeName)->get();
        return view('admin.studentClass.list.index', $response);
    }

    public function show($id)
    {
        $response['student_classes'] = StudentClass::find($id);
        $pdf = PDF::loadview('admin.pdf.studentClass.index', $response);
        return $pdf->setPaper('a4')->stream('pdf');
        return view('admin.studentClass.details.index', $response);
    }


    public function edit($id)
    {
        $response['academic_years'] = AcademicYear::get();
        $response['courses'] = Course::get();
        $response['departaments'] = Departament::get();
        $response['student_classes'] = StudentClass::find($id);
        return view('admin.studentClass.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        StudentClass::find($id)->update($request->all());
        return redirect()->route('admin.student_classes.index')->with('edit', 1);
    }

    public function print(Request $request)
    {
        $response['student_classes'] = StudentClass::where('origin', $request->origin);
        $pdf = PDF::loadview('admin.pdf.studentClass.index', $response);
        return $pdf->setPaper('a4')->stream('pdf');
    }

    public function destroy($id)
    {
        StudentClass::find($id)->delete();
        return redirect()->back();
    }
}
