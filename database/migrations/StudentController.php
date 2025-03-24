<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\StudentAcademicYear as AdminStudentAcademicYear;
use App\Http\Controllers\Controller;
use App\Models\AcademicLivel;
use App\Models\AcademicYear;
use App\Models\Classe;
use App\Models\Course;
use App\Models\Municipe;
use App\Models\Province;
use App\Models\Student;
use App\Models\StudentAcademicYea;
use App\Models\StudentAcademicYear;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class StudentController extends Controller
{


    public function index()
    {
       // $response['students'] = Student::get();
        $response['students'] = Student::paginate(12);
        return view("admin.students.list.index", $response);
    }

    public function seach(Request $request)
    {
        return redirect("admin/estudantes/seachResult/{$request->startYear}");
    }

    public function seachResult($name)
    {
        $response['students'] = Student::with('academic_years')->get();
        return view("admin.students.list.index", $response)->with('destroy', 1);
    }
    public function create()
    {

        $response['courses'] = Course::get();
        $response['provinces'] = Province::get();
        $response['municipies'] = Municipe::get();
        $response['academic_years'] = AcademicYear::get();
        $response['academic_livels'] = AcademicLivel::get();
        return view('admin.students.create.index', $response);
    }


    public function store(Request $request)
    {


        $validation = $request->validate([

            'name' => 'required|max:255',
            'father' => 'required|max:255',
            'mather' => 'required|max:255',
            'borthday' => 'required|max:255',
            'baptismDate' => 'required|max:255',
            'confirmLocation' => 'required|max:255',
            'confirmDate' => 'required|max:255',
            'address' => 'required|max:255',
            'inCharge' => 'required|max:255',
            'tel' => 'required|max:255',
            'originParish' => 'required|max:255',
            'receseciament' => 'required|max:255',
            'genro' => 'required|max:255',
            'censusdate' => 'required|max:255',
            'arquivIdentification' => 'required|max:255',
            'dateIssue' => 'required|max:255',
            'fk_course_id' => 'required|max:255',
            'fk_provinces_id' => 'required|max:255',
            'fk_municipies_id' => 'required|max:255',
            'fk_academic_years_id' => 'required|max:255',
            'image' => 'required|',


        ]);

        $file = $request->file('image')->store('students');
        Student::create([

            'name' => $request->name,
            'father' => $request->father,
            'mather' => $request->mather,
            'borthday' => $request->borthday,
            'identification' => $request->identification,
            'arquivIdentification' => $request->arquivIdentification,
            'placeBaptism' => $request->placeBaptism,
            'baptismDate' => $request->baptismDate,
            'confirmLocation' => $request->confirmLocation,
            'confirmDate' => $request->confirmDate,
            'address' => $request->address,
            'inCharge' => $request->inCharge,
            'tel' => $request->tel,
            'originParish' => $request->originParish,
            'receseciament' => $request->receseciament,
            'genro' => $request->genro,
            'dateIssue' => $request->dateIssue,
            'censusdate' => $request->censusdate,
            'fk_course_id' => $request->fk_course_id,
            'fk_provinces_id' => $request->fk_provinces_id,
            'fk_municipies_id' => $request->fk_municipies_id,
            'fk_academic_years_id' => $request->fk_academic_years_id,
            'image' => $file,


        ]);

        return redirect()->route('admin.students.create')->with('create', 1);
    }


    public function show($id)
    {

        $response['students'] = Student::with('procinces', 'municipies', 'courses')->find($id);
        $pdf = PDF::loadview('admin.pdf.student.index', $response);
        return $pdf->setPaper('a4')->stream('pdf');
        return view('admin.students.details.index', $response);



    }


    public function edit($id)
    {


        $response['students'] = Student::find($id);
        $response['courses'] = Course::get();
        $response['municipies'] = Municipe::get();
        $response['provinces'] = Province::get();
        $response['academic_years'] = AcademicYear::get();
        return view('admin.students.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        Student::find($id)->update($request->all());
        return redirect()->route('admin.students.index')->with('edit', 1);
    }


    public function destroy($id)
    {
        Student::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
