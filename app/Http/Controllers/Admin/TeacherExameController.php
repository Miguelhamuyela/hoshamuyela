<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicYear;
use App\Models\Classe;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\TeacherExam;
use Illuminate\Http\Request;
use PDF;
class TeacherExameController extends Controller
{

    public function index()
    {
        $response['teacher_exames'] = TeacherExam::with('teachers')->get();
        return view('admin.exameTeacher.list.index', $response);
    }

    public function GetSubCatAgainstMain($id)
    {
        echo json_encode(Teacher::where('id', $id)->get());
    }


    public function teacher_exames_seach(Request $request)
    {
        return redirect("admin/teacher_exames/seachResult/{$request->startYear}");
    }

    public function seachResult($startYear)
    {
        $response['teacher_exames'] = TeacherExam::with('teachers')->where('startYear', $startYear)->get();
        return view('admin.exameTeacher.list.index', $response);
    }

    public function sendStartYear(Request $request)
    {
        return redirect("admin/teacher_exames/recibo/{$request->startYear}");
    }

    public function print($startYear)
    {
        $response['teacher_exames'] = TeacherExam::with('teachers')->where('startYear', $startYear)->get();
        $pdf = PDF::loadview('admin.pdf.examTeacher.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf');
    }




    public function create()
    {
        $response['teachers'] = Teacher::get();
        $response['classrooms'] = Classroom::get();
        $response['subjects'] = Subject::get();
        $response['classes'] = Classe::get();
        $response['courses'] = Course::get();
        $response['academic_years'] = AcademicYear::get();
        $response['teacher_exames'] = TeacherExam::get();
        return view('admin.exameTeacher.create.index', $response);
    }


    public function store(Request $request)
    {
        TeacherExam::create([
            'fk_teachers_id' => $request->fk_teachers_id,
            'fk_course_id' => $request->fk_course_id,
            'fk_classes_id' => $request->fk_classes_id,
            'fk_subjects_id' => $request->fk_subjects_id,
            'startYear' => $request->startYear,
            'startTime' => $request->startTime,
            'endTime' => $request->endTime,
            'period' => $request->period,
            'typeExam' => $request->typeExam,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.teacher_exames.create')->with('create', 1);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $response['teacher_exames'] = TeacherExam::find($id);
        $response['classes'] = Classe::get();
        $response['courses'] = Course::get();
        $response['classrooms'] = Classroom::get();
        $response['subjects'] = Subject::get();
        return view('admin.exameTeacher.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        TeacherExam::find($id)->update($request->all());
        return redirect()->route('admin.teacher_exames.index')->with('edit',1);
    }


    public function destroy($id)
    {
        TeacherExam::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
