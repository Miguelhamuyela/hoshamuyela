<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\RoomAcademicYear;
use App\Models\Student;
use Illuminate\Http\Request;
use PDF;
class RoomAcademicYearController extends Controller
{

    public function index()
    {
        $response['room_academic_years'] = RoomAcademicYear::with('students')->get();
        return view('admin.roomAcademicYear.list.index', $response);
    }

    public function GetSubCatAgainstMain($id)
    {
        echo json_encode(Student::where('id', $id)->get());
    }

    public function create()
    {
        $response['courses'] = Course::get();
        $response['room_academic_years'] = RoomAcademicYear::get();
        return view("admin.roomAcademicYear.create.index", $response);
    }


    public function store(Request $request)
    {
        $validation = $request->validate([

            'section' => 'required|max:255',
        ]);
        RoomAcademicYear::create([
            'section' => $request->section,
            'headRoom' => $request->headRoom,
            'RoomState' => $request->RoomState,
            'startYear' => $request->startYear,
            'fk_students_id' => $request->fk_students_id,
            'fk_course_id' => $request->fk_course_id,
        ]);

        return redirect()->route('admin.room_academic_years.create')->with('create', 1);
    }



    public function room_academic_years_seach(Request $request)
    {
        return redirect("admin/dormitorio-anual/seachResult/{$request->startYear}");
    }


    public function seachResult($startYear)
    {
        $response['room_academic_years'] = RoomAcademicYear::with('students')->where('startYear', $startYear)->get();
        return view('admin.roomAcademicYear.list.index', $response);
    }


    public function sendStartYear(Request $request)
    {
        return redirect("admin/dormitorio-anual/recibo/{$request->startYear}");
    }

    public function print($startYear)
    {
        $response['room_academic_years'] = RoomAcademicYear::with('students')->where('startYear', $startYear)->get();
        $pdf = PDF::loadview('admin.pdf.roomAcademicYear.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf');
    }




    public function show($id)
    {
        $response['room_academic_years'] = RoomAcademicYear::with('courses','students')->get();
        $pdf = PDF::loadview('admin.pdf.roomAcademicYear.index', $response);
        return $pdf->setPaper('a4')->stream('pdf');
        return view('admin.roomAcademicYear.details.index', $response);
    }


    public function edit($id)
    {
        $response['courses'] = Course::get();
        $response['room_academic_years'] = RoomAcademicYear::find($id);
        return view('admin.roomAcademicYear.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        RoomAcademicYear::find($id)->update($request->all());
        return redirect()->route('admin.room_academic_years.index')->with('edit', 1);
    }


    public function destroy($id)
    {
        RoomAcademicYear::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
