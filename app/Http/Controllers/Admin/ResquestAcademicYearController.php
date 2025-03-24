<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\AcademicYear;
use App\Models\Course;
use App\Models\RequestDocument;
use App\Models\ResquestAcademicYear;
use App\Models\Student;
use Illuminate\Http\Request;
use PDF;

class ResquestAcademicYearController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }


    public function index()
    {
        $response['resquest_academic_years'] = ResquestAcademicYear::with('students')->get();
        //Logger
        $this->Logger->log('info', 'Listou os estudantes');

        return view('admin.resquestAcademicYear.list.index', $response);
    }

    public function GetSubCatAgainstMain($id)
    {
        echo json_encode(Student::where('id', $id)->get());
    }

    public function create()
    {
        $response['request_documents'] = RequestDocument::get();
        $response['courses'] = Course::get();
        $response['students'] = Student::get();
        $response['academicYears'] = AcademicYear::get();
        return view('admin.resquestAcademicYear.create.index', $response);
    }

    public function resquest_academic_years_seach(Request $request)
    {
        return redirect("admin/pedido-documento/seachResult/{$request->startYear}");
    }
    public function seachResult($startYear)
    {
        $response['resquest_academic_years'] = ResquestAcademicYear::with('students')->where('startYear', $startYear)->get();
        return view('admin.resquestAcademicYear.list.index', $response);
    }
    public function sendStartYear(Request $request)
    {
        return redirect("admin/pedido-documento/recibo/{$request->startYear}");
    }

    public function print($startYear)
    {
        $response['resquest_academic_years'] = ResquestAcademicYear::with('students')->where('startYear', $startYear)->get();
        $pdf = PDF::loadview('admin.pdf.resquestAcademicYear.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf');
    }

    public function store(Request $request)
    {
        ResquestAcademicYear::create([
            'startYear' =>  $request->startYear,
            'fk_students_id' => $request->fk_students_id,
            'fk_course_id' => $request->fk_course_id,
            'fk_request_documents_id' => $request->fk_request_documents_id,
            'phone' => $request->phone,
            'phoneAlt' => $request->phoneAlt,
            'document' => $request->document,
            'startYear' => $request->startYear,
            'documentLivel' => $request->documentLivel,

        ]);

        return redirect()->route('admin.resquest_academic_years.create')->with('create', 1);
    }


    public function show($id)
    {
        $response['resquest_academic_years'] = ResquestAcademicYear::with('students', 'courses')->get();
        $pdf = PDF::loadview('admin.pdf.resquestAcademicYear.index', $response);
        return $pdf->setPaper('a4')->stream('pdf');
        return view('admin.resquestAcademicYear.details.index', $response);


    }

    public function edit($id)
    {
        $response['request_documents'] = RequestDocument::get();
        $response['courses'] = Course::get();
        $response['students'] = Student::get();
        $response['academicYears'] = AcademicYear::find();
        return view('admin.resquestAcademicYear.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        RequestDocument::find($id)->update($request->all());
        return redirect()->route('admin.resquest_academic_years.index')->with('edit', 1);
    }

    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um Estudante com o identificador ' . $id);
        RequestDocument::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
