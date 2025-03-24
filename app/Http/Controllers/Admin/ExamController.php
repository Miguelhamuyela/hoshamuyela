<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['exams'] = Exam::paginate(10);
        return view("admin.exams.list.index", $response);
    }


    public function create()
    {
        $response['exams'] = Exam::get();
        return view('admin.exams.create.index', $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    
    {


        Exam::create([
            'examName' => $request->examName,
            'typeExam' => $request->typeExam,
            'obs' => $request->obs,
        ]);

        return redirect()->route('admin.exams.create')->with('create', 1);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $response['exams'] = Exam::get();
        return view('admin.exams.list.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['exams'] = Exam::get();
        return view('admin.exams.edit.index', $response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Exam::find($id)->update($request->all());
        return redirect()->route('admin.exams.index')->with('edit', 1);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Exam::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
