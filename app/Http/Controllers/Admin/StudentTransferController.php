<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\AcademicYear;
use App\Models\Classe;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Student;
use App\Models\StudentAcademicYea;
use App\Models\StudentTransfer;
use App\Models\Transfer;
use Illuminate\Http\Request;
use PDF;

class StudentTransferController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }


    public function index()
    {

        $response['student_transfers'] = StudentTransfer::with('students')->get();
        //Logger
        $this->Logger->log('info', 'Listou os estudantes');

        return view('admin.studentTransfer.list.index', $response);
    }


    public function GetSubCatAgainstMain($id)
    {
        echo json_encode(Student::where('id', $id)->get());
    }


    public function create()
    {
        $response['classrooms'] = Classroom::get();
        $response['transfers'] = Transfer::get();
        $response['classes'] = Classe::get();
        $response['courses'] = Course::get();
        $response['students'] = Student::get();
        $response['academicYears'] = AcademicYear::get();
        return view('admin.studentTransfer.create.index', $response);
    }



    public function student_transfers_seach(Request $request)
    {
        return redirect("admin/estudante-transferido/seachResult/{$request->startYear}");
    }


    public function seachResult($startYear)
    {
        $response['student_transfers'] = StudentTransfer::with('students')->where('startYear', $startYear)->get();
        return view('admin.studentTransfer.list.index', $response);
    }


    public function sendStartYear(Request $request)
    {
        return redirect("admin/estudante-transferido/recibo/{$request->startYear}");
    }




    public function print($startYear)
    {
        $response['student_transfers'] = StudentTransfer::with('students')->where('startYear', $startYear)->get();
        $pdf = PDF::loadview('admin.pdf.studentTransfer.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf');
    }




    public function store(Request $request)
    {
        $validation = $request->validate([
            'startYear' => 'required|',
        ]);

        StudentTransfer::create([
            'startYear' =>  $request->startYear,
            'fk_students_id' => $request->fk_students_id,
            'fk_course_id' => $request->fk_course_id,
            'fk_transfers_id' => $request->fk_transfers_id,
            'tel' => $request->tel,
            'email' => $request->email,
            'bedroom' => $request->bedroom,
            'bedNumber' => $request->bedNumber,
            'typeStudent' => $request->typeStudent,
            'fk_classes_id' => $request->fk_classes_id,
            'bedNumber' => $request->bedNumber,
            'parishMission' => $request->parishMission,
            'detail' => $request->detail,
        ]);

        return redirect()->route('admin.student_transfers.create')->with('create', 1);
    }


    public function show($id)
    {
        $response['student_transfers'] = StudentTransfer::with('transfers', 'courses', 'classes', 'students')->get();
        $pdf = PDF::loadview('admin.pdf.studentTransfer.index', $response);
        return $pdf->setPaper('a4')->stream('pdf');
        return view('admin.studentTransfer.details.index', $response);
    }


    public function edit($id)
    {
        $response['transfers'] = Transfer::get();
        $response['courses'] = Course::get();
        $response['classes'] = Classe::get();
        $response['classrooms'] = Classroom::get();
        $response['students'] = Student::get();
        $response['student_transfers'] = StudentTransfer::find($id);
        return view('admin.studentTransfer.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um Estudante com o identificador ' . $id);
        StudentTransfer::find($id)->update($request->all());
        return redirect()->route('admin.student_transfers.index')->with('edit', 1);
        
    }


    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um Estudante com o identificador ' . $id);
        StudentTransfer::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
