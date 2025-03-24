<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicYear;
use Illuminate\Http\Request;

class AcademicYearController extends Controller
{

    public function index()
    {
    
        $response['academic_years'] = AcademicYear::get();
        return view("admin.academicYear.list.index", $response);
    }

    public function create()
    {

        return view('admin.academicYear.create.index');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'startYear' => 'required|max:255',
        ]);

        AcademicYear::create([
            'startYear' => $request->startYear,
            'obs' => $request->obs,
        ]);

        return redirect()->route('admin.academicYear.create')->with('create', 1);
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $response['academic_years'] = AcademicYear::get();
        return view('admin.academicLivel.edit.index',$response);
    }


    public function update(Request $request, $id)
    {
        AcademicYear::find($id)->update($request->all());
        return redirect()->route('admin.academicYear.index')->with('edit',1);
    }


    public function destroy($id)
    {
        AcademicYear::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
