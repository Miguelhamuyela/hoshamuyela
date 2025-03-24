<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicYear;
use App\Models\Course;
use App\Models\Student;
use App\Models\TransportAcademicYear;
use Illuminate\Http\Request;
use PDF;
class TransportAcademicYearController extends Controller
{

    public function index()
    {
        $response['transport_academic_years'] = TransportAcademicYear::with('students')->get();
        return view('admin.TransportAcademicYear.list.index', $response);
    }
    public function GetSubCatAgainstMain($id)
    {
        echo json_encode(Student::where('id', $id)->get());
    }
    public function create()
    {
        $response['courses'] = Course::get();
        $response['students'] = Student::get();
        $response['academicYears'] = AcademicYear::get();
        return view('admin.TransportAcademicYear.create.index', $response);
    }

    public function transport_academic_years_seach(Request $request)
    {
        return redirect("admin/estudante-transporte/seachResult/{$request->startYear}");
    }

    public function seachResult($startYear)
    {
        $response['transport_academic_years'] = TransportAcademicYear::with('students')->where('startYear', $startYear)->get();
        return view('admin.TransportAcademicYear.list.index', $response);
    }

    public function sendStartYear(Request $request)
    {
        return redirect("admin/estudante-transporte/recibo/{$request->startYear}");
    }

    public function print($startYear)
    {
        $response['transport_academic_years'] = TransportAcademicYear::with('students')->where('startYear', $startYear)->get();
        $pdf = PDF::loadview('admin.pdf.TransportAcademicYear.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf');
    }



    public function store(Request $request)
    {
        TransportAcademicYear::create([
            'startYear' =>  $request->startYear,
            'fk_students_id' => $request->fk_students_id,
            'fk_course_id' => $request->fk_course_id,
            'routeName' =>  $request->routeName,
            'tel_student' =>  $request->tel_student,
            'drive_tel' =>  $request->drive_tel,
            'driverName' =>  $request->driverName,
            'mark_mark' =>  $request->mark_mark,
        ]);

        return redirect()->route('admin.transport_academic_years.create')->with('create', 1);
    }
    public function show($id)
    {
        $response['transport_academic_years'] = TransportAcademicYear::find($id);
        $pdf = PDF::loadview('admin.pdf.TransportAcademicYear.index', $response);
        return $pdf->setPaper('a4')->stream('pdf');
        return view('admin.TransportAcademicYear.detail.index', $response);
    }

    public function edit($id)
    {
        $response['courses'] = Course::get();
        $response['students'] = Student::get();
        $response['student_transfers'] = TransportAcademicYear::find($id);
        return view('admin.TransportAcademicYear.edit.index', $response);
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
