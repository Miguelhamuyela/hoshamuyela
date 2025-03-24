<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicYear;
use App\Models\Classe;
use App\Models\Course;
use App\Models\StudentPerfect;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;
class ClasseController extends Controller
{

    public function index()
    {

        $response['classes'] = Classe::paginate(8);
        return view("admin.classe.list.index", $response)->with('destroy', 1);
    }


    public function create()
    {
        $response['courses'] = Course::get();

        return view('admin.classe.create.index', $response);
    }


    public function store(Request $request)
    {

        $validation = $request->validate([
            'classeName' => 'required|max:255',
            'class_director' => 'required|max:255',
            'fk_course_id' => 'required|max:255',

        ]);
        Classe::create([

            'classeName' => $request->classeName,
            'createDate' => $request->createDate,
            'class_director' => $request->class_director,
            'descrition' => $request->descrition,
            'timeStudent' => $request->timeStudent,
            'fk_course_id' => $request->fk_course_id,
            'courseDirector' => $request->courseDirector,
            'timeStudent' => $request->timeStudent,
            'courseDirector' => $request->courseDirector,


        ]);

        return redirect()->route('admin.classe.create')->with('create', 1);
    }

    public function show($id)
    {

        $response['classes'] = Classe::find($id);
        $pdf = PDF::loadview('admin.pdf.class.index', $response);
        return $pdf->setPaper('a4')->stream('pdf');
        return view('admin.classe.details.index', $response);

    }


    public function edit($id)
    {
        $response['courses'] = Course::get();
        $response['classes'] = Classe::find($id);
        return view('admin.classe.edit.index', $response);
    }


    public function update(Request $request, $id)
    {

        Classe::find($id)->update($request->all());
        return redirect()->route('admin.classe.index')->with('edit', 1);
    }


    public function destroy($id)
    {
        Classe::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }


}
