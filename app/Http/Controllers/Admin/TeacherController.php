<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Departament;
use App\Models\Teacher;
use Illuminate\Http\Request;
use PDF;

class TeacherController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }


    public function index()
    {
        $response['teachers'] = Teacher::get();
        return view("admin.teacher.list.index", $response)->with('destroy',1);
    }

    public function seach(Request $request)
    {
        return redirect("admin/professor/seachResult/{$request->name}");
    }

    public function print($startYear)
    {
        $response['teachers'] = Teacher::with('teachers')->where('startYear', $startYear)->get();
        $pdf = PDF::loadview('admin.pdf.teacher.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf');
    }
    
    public function teachers_seach(Request $request)
    {
        return redirect("admin/professor/seachResult/{$request->startYear}");
    }
    public function seachResult($startYear)
    {
        $response['teachers'] = Teacher::with('teachers')->where('startYear', $startYear)->get();
        return view('admin.teacher.list.index', $response);
    }

    public function sendStartYear(Request $request)
    {
        return redirect("admin/professor/recibo/{$request->startYear}");
    }


    public function create()
    {
        return view('admin.teacher.create.index');
    }
    public function store(Request $request)
    {

        Teacher::create([
            'name' => $request->name,
            'lastName' => $request->lastName,
            'tel' => $request->tel,
            'email' => $request->email,
            'typeContract' => $request->typeContract,
            'address' => $request->address,
            'genro' => $request->genro,
            'birthDate' => $request->birthDate,
            'qualification' => $request->qualification,
            'experience' => $request->experience,
            'country' => $request->country,
            'city' => $request->city,
            'especiality' => $request->especiality,
            'academicGrau' => $request->academicGrau,
            'startYear' => $request->startYear,
            'language' => $request->language,
        ]);

        return redirect()->route('admin.teachers.create')->with('create', 1);
    }


    public function show($id)
    {

        $response['teachers'] = Teacher::get();
        //Logger
        $this->Logger->log('info', 'Visualizou um Estudante com o identificador ' . $id);
        $pdf = PDF::loadview('admin.pdf.teacher.index', $response);
        return $pdf->setPaper('a4')->stream('pdf');
        return view('admin.teacher.details.index', $response);


    }


    public function edit($id)
    {

        $response['teachers']= Teacher::find($id);
        return view('admin.teacher.edit.index',$response);
    }


    public function update(Request $request, $id)
    {
        Teacher::find($id)->update($request->all());
        return redirect()->route('admin.teachers.index')->with('edit',1);
    }


    public function destroy($id)
    {
        Teacher::find($id)->delete();
       // Teacher::find($request->id)->delete();
        $this->Logger->log('info', 'Eliminou um Doctor');
        return redirect()->back()->with('destroy', '1');
    }
}
