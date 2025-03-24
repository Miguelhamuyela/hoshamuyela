<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicLivel;
use App\Models\AcademicYear;
use App\Models\Classe;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\StarStudentAcademicYear;
use App\Models\Student;
use Illuminate\Http\Request;
use PDF;

class StarStudentAcademicYearController extends Controller
{

    public function index()
    {
        $response['star_student_academic_years'] =  StarStudentAcademicYear::with('students')->get();
        return view("admin.starStudentAcademicYear.list.index", $response);
    }

    public function GetSubCatAgainstMain($id)
    {
        echo json_encode(Student::where('id', $id)->get());
    }
    public function create()
    {
        $response['courses'] = Course::get();
        $response['students'] = Student::get();
        return view('admin.starStudentAcademicYear.create.index', $response);
    }


    public function store(Request $request)
    {

        $validation = $request->validate([

            'startYear' => 'required|max:255',
            'tel' => 'required|max:255',
            'bedroom' => 'required|max:255',

        ]);

        $file = $request->file('image')->store('StarStudentAcademicYear');
        StarStudentAcademicYear::create([
            'startYear' => $request->startYear,
            'fk_students_id' => $request->fk_students_id,
            'fk_course_id' => $request->fk_course_id,
            'email' => $request->email,
            'tel' => $request->tel,
            'bedroom' => $request->bedroom,
            'bedNumber' => $request->bedNumber,
            'image' => $file,

        ]);

        return redirect()->route('admin.star_student_academic_years.create')->with('create', 1);
    }

    public function star_student_academic_years_seach(Request $request)
    {
        return redirect("admin/star_student_academic_years/seachResult/{$request->startYear}");
    }

    public function seachResult($startYear)
    {
        $response['star_student_academic_years'] = StarStudentAcademicYear::with('students')->where('startYear', $startYear)->get();
        return view('admin.starStudentAcademicYear.list.index', $response);
    }


    public function show($id)
    {
        $response['star_student_academic_years'] = StarStudentAcademicYear::find($id);
        $pdf = PDF::loadview('admin.pdf.StarStudentAcademicYear.index', $response);
        return $pdf->setPaper('a4')->stream('pdf');
        return view('admin.starStudentAcademicYear.details.index', $response);
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
