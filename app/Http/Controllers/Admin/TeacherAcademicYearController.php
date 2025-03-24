<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\AcademicYear;
use App\Models\Classe;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Departament;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\TeacherAcademicYear;
use Illuminate\Http\Request;
use PDF;
class TeacherAcademicYearController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['teacher_academic_years'] =  TeacherAcademicYear::with('teachers')->get();
        return view('admin.TeacherAcademicYear.list.index', $response);
    }

    public function GetSubCatAgainstMain($id)
    {
        echo json_encode(Teacher::where('id', $id)->get());
    }

    public function create()
    {

        $response['teachers'] = Teacher::get();
        $response['courses'] = Course::get();
        $response['subjects'] = Subject::get();
        $response['academicYears'] = AcademicYear::get();
        return view('admin.TeacherAcademicYear.create.index', $response);
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'image' => 'required|mimes:jpg,png,gif,SVG,EPS',
        ]);
        $file = $request->file('image')->store('teachers');
        TeacherAcademicYear::create([
            'fk_teachers_id'=>$request->fk_teachers_id,
            'fk_subjects_id'=>$request->fk_subjects_id,
            'fk_course_id'=>$request->fk_course_id,
            'startYear'=>$request->startYear,
            'startTime'=>$request->startTime,
            'endTime'=>$request->endTime,
            'period'=>$request->period,
            'description'=>$request->description,
            'image' => $file,
            ]);

            return redirect()->route('admin.teacher_academic_years.create')->with('create',1);
    }


    public function teacher_academic_years_seach(Request $request)
    {
        return redirect("admin/ano-academico-professor/seachResult/{$request->startYear}");
    }


    public function seachResult($startYear)
    {
        $response['teacher_academic_years'] = TeacherAcademicYear::with('teachers')->where('startYear', $startYear)->get();
        return view('admin.TeacherAcademicYear.list.index', $response);
    }

    public function sendStartYear(Request $request)
    {
        return redirect("admin/ano-academico-professor/recibo/{$request->startYear}");
    }

    public function print($startYear)
    {
        $response['teacher_academic_years'] = TeacherAcademicYear::with('teachers')->where('startYear', $startYear)->get();
        $pdf = PDF::loadview('admin.pdf.TeacherAcademicYear.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf');
    }

    public function show($id)
    {
        $response['teacher_academic_years'] = TeacherAcademicYear::with('subjects', 'courses')->get();
        //Logger
        $this->Logger->log('info', 'Visualizou um Estudante com o identificador ' . $id);
        $pdf = PDF::loadview('admin.pdf.TeacherAcademicYear.index', $response);
        return $pdf->setPaper('a4')->stream('pdf');
        return view('admin.TeacherAcademicYear.details.index', $response);
    }


    public function edit($id)
    {
        $response['subjects'] = Subject::get();
        $response['classes'] = Classe::get();
        $response['teachers'] = Teacher::get();
        $response['courses'] = Course::get();
        $response['teacher_academic_years'] = TeacherAcademicYear::find($id);
        return view('admin.TeacherAcademicYear.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        TeacherAcademicYear::find($id)->update($request->all());
        return redirect()->route('admin.teacher_academic_years.index')->with('edit', 1);
    }


    public function destroy($id)
    {
        TeacherAcademicYear::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
