<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use Illuminate\Http\Request;
use PDF;

class ClassroomController extends Controller
{

    public function index()
    {
       $response['classrooms'] = Classroom::paginate(10);
       return view("admin.classroom.list.index", $response)->with('destroy',1);
    }
    public function create()
    {

        return view('admin.classroom.create.index');
    }


    public function store(Request $request)
    {

        $validation = $request->validate([

            'classRoomName' => 'required|max:255',
            'spacenumber' => 'required|max:255',
            'obs' => 'required|max:255',
        ]);
        Classroom::create([

            'classRoomName' => $request->classRoomName,
            'spacenumber' => $request->spacenumber,
            'obs' => $request->obs,
        ]);

        return redirect()->route('admin.classroom.create')->with('create', 1);

    }


    public function show($id)
    {


        $response['classrooms'] = Classroom::find($id);
        $pdf = PDF::loadview('admin.pdf.classroom.index', $response);
        return $pdf->setPaper('a4')->stream('pdf');
        return view('admin.classroom.details.index', $response);

    }

    public function edit($id)
    {
        $response['classrooms']= Classroom::find($id);
        return view('admin.classroom.edit.index',$response);
    }


    public function update(Request $request, $id)
    {
        Classroom::find($id)->update($request->all());
        return redirect()->route('admin.classroom.index')->with('edit',1);
    }


    public function destroy($id)
    {
       Classroom::find($id)->delete();
       return redirect()->back()->with('destroy', '1');
    }
}
