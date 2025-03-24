<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicYear;
use App\Models\Course;
use App\Models\Student;
use App\Models\StudentRoom;
use Illuminate\Http\Request;

class StudentRoomController extends Controller
{

    public function index()
    {
        $response['student_rooms'] =  StudentRoom::with('students')->get();
       return view("admin.studentRoom.list.index",$response)->with('destroy', 1);
    }

    public function create()
    {
        $response['courses'] = Course::get();
        $response['academic_years'] = AcademicYear::get();
        $response['students'] = Student::get();
       return view("admin.studentRoom.create.index",$response);

    }

    public function GetSubCatAgainstMain($id)
    {
        echo json_encode(Student::where('id', $id)->get());
    }

    public function student_rooms_seach(Request $request)
    {
        return redirect("admin/student_rooms/seachResult/{$request->name}");
    }

    public function seachResult($name)
    {
        $response['student_rooms'] = StudentRoom::with('students')->where('name', $name)->get();
        return view('admin.studentRoom.list.index', $response);
    }

    public function store(Request $request)
    {
        $validation = $request->validate([

            'name' => 'required|max:255',
            'section' => 'required|max:255',
            'headRoom' => 'required|max:255',

        ]);
        StudentRoom::create([
            'name' => $request->name,
            'section' => $request->section,
            'headRoom' => $request->headRoom,
            'fk_students_id' => $request->fk_students_id,
            'fk_course_id' => $request->fk_course_id,
            'fk_academic_years_id' => $request->fk_academic_years_id,

        ]);

        return redirect()->route('admin.student_rooms.create')->with('create', 1);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $response['courses'] = Course::get();
        $response['academic_years'] = AcademicYear::get();
        $response['students'] = Student::get();
        return view('admin.studentRoom.edit.index', $response);
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
