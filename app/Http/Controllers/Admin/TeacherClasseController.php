<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicLivel;
use App\Models\AcademicYear;
use App\Models\Course;
use App\Models\Departament;
use App\Models\Municipe;
use App\Models\Province;
use App\Models\Teacher;
use App\Models\TeacherClasse;
use Illuminate\Http\Request;

class TeacherClasseController extends Controller
{
    public function index()
    {
        $response['teacher_classes'] = TeacherClasse::with('teachers')->get();
        return view('admin.teacherClasse.list.index', $response);
    }

    public function GetSubCatAgainstMain($id)
    {
        echo json_encode(Teacher::where('id', $id)->get());
    }
    public function create()
    {
        $response['courses'] = Course::get();
        $response['provinces'] = Province::get();
        $response['academic_years'] = AcademicYear::get();
        $response['academic_livels'] = AcademicLivel::get();
        return view('admin.teacherClasse.create.index', $response);
    }

    public function teacher_classes_seach(Request $request)
    {
        return redirect("admin/teacher_classes/seachResult/{$request->classeName}");
    }

    public function seachResult($classeName)
    {
        $response['teacher_classes'] = TeacherClasse::with('teachers')->where('classeName', $classeName)->get();
        return view('admin.teacherClasse.list.index', $response);
    }




    public function store(Request $request)
    {
        $validation = $request->validate([
            'classeName' => 'required|max:255',
        ]);

        TeacherClasse::create([
            'fk_teachers_id' => $request->fk_teachers_id,
            'fk_course_id' => $request->fk_course_id,
            'fk_academic_years_id' => $request->fk_academic_years_id,
            'classeName' => $request->classeName,
            'start' => $request->start,
            'end' => $request->end,
            'period' => $request->period,
            'obs' => $request->obs,
        ]);

        return redirect()->route('admin.teacher_classes.create')->with('create', 1);
    }


    public function show($id)
    {
        $response['teacher_classes'] = TeacherClasse::find($id);
        return view('admin.teacherClasse.list.index', $response);
    }


    public function edit($id)
    {
        $response['courses'] = Course::find($id);
        $response['academic_years'] = AcademicYear::find($id);
        $response['departaments'] = Departament::find($id);
        $response['teacher_classes'] = TeacherClasse::find($id);
        return view('admin.teacherClasse.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        TeacherClasse::find($id)->update($request->all());
        return redirect()->route('admin.teacher_classes.index')->with('edit', 1);
    }


    public function destroy($id)
    {
        //
    }
}
