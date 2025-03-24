<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;
use PDF;

class SubjectController extends Controller
{

    public function index()
    {
        $response['subjects'] = Subject::get();
        return view("admin.subject.list.index", $response)->with('destroy', 1);
    }


    public function create()
    {
        return view('admin.subject.create.index');
    }

    public function store(Request $request)
    {

        Subject::create([
            'subjectName' => $request->subjectName,
            'obs' => $request->obs,
        ]);

        return redirect()->route('admin.subject.create')->with('create', 1);
    }


    public function show($id)
    {
        $response['subjects'] = Subject::find($id);
        $pdf = PDF::loadview('admin.pdf.subject.index', $response);
        return $pdf->setPaper('a4')->stream('pdf');
        return view('admin.subject.detail.index', $response);
    }


    public function edit($id)
    {

        $response['subjects'] = Subject::find($id);
        return view('admin.subject.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        Subject::find($id)->update($request->all());
        return redirect()->route('admin.subject.index')->with('edit', 1);
    }


    public function destroy($id)
    {
        Subject::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
