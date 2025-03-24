<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicLivel;
use App\Models\AcademicYear;
use App\Models\Classe;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\TeacherSubjec;
use App\Models\TeacherSubject;
use Illuminate\Http\Request;

class TeacherSubjectController extends Controller
{

    public function index()
    {
        $response['teacher_subjects'] = TeacherSubject::with('teachers')->get();
        return view('admin.TeacherSubject.list.index', $response);
    }

    public function GetSubCatAgainstMain($id)
    {
        echo json_encode(Teacher::where('id', $id)->get());
    }

    public function create()
    {
        $response['classrooms'] = Classroom::get();
        $response['classes'] = Classe::get();
        $response['academic_livels'] = AcademicLivel::get();
        $response['courses'] = Course::get();
        $response['teachers'] = Teacher::get();
        $response['academicYears'] = AcademicYear::get();
        return view('admin.TeacherSubject.create.index', $response);
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'subjectName' => 'required|',
            'email' => 'required|',
            'phone' => 'required|',
            'detail' => 'required|',
            'fk_course_id' => 'required|max:255',
            'fk_academic_livels_id' => 'required|max:255',
            'fk_classes_id' => 'required|max:255',
            'fk_classrooms_id' => 'required|max:255',
        ]);

        TeacherSubject::create([
            'subjectName' =>  $request->subjectName,
            'fk_teachers_id' => $request->fk_teachers_id,
            'fk_course_id' => $request->fk_course_id,
            'fk_academic_livels_id' => $request->fk_academic_livels_id,
            'fk_classes_id' => $request->fk_classes_id,
            'fk_classrooms_id' => $request->fk_classrooms_id,
            'email' => $request->email,
            'phone' => $request->phone,
            'detail' => $request->detail,

        ]);


        return redirect()->route('admin.teacher_subjects.create')->with('create', 1);
    }

    public function teacher_subjects_seach(Request $request)
    {
        return redirect("admin/disciplina-professor/seachResult/{$request->subjectName}");
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
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
