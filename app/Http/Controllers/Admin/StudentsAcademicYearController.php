<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Student;
use App\Models\StudentsAcademicYear;
use Illuminate\Http\Request;

class StudentsAcademicYearController extends Controller
{

    public function index()
    {
        $response['students_academic_year'] = StudentsAcademicYear::with('students')->get();
        return view('admin.studentsAcademicYear.list.index', $response);
    }


    public function create()
    {

        $response['courses'] = Course::get();
        $response['students'] = Student::get();
        $response['students_academic_year'] = StudentsAcademicYear::get();
        return view('admin.studentAcademicYear.create.index', $response);
    }


    public function GetSubCatAgainstMain($id)
    {
        echo json_encode(Student::where('id', $id)->get());
    }


    public function store(Request $request)
    {
        $validation = $request->validate([
            'startYear' => 'required|max:255',
            'section' => 'required|max:255',
            'fk_students_id' => 'required|max:255',
            'fk_course_id' => 'required|max:255',
        ]);
        StudentsAcademicYear::create([
            'fk_students_id' => $request->fk_students_id,
            'fk_course_id' => $request->fk_course_id,
            'name' => $request->name,
            'startYear' => $request->startYear,
            'headRoom' => $request->headRoom,
            'RoomState' => $request->RoomState,
            'section' => $request->section,

        ]);

        return redirect()->route('admin.students_academic_year.create')->with('create', 1);
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
