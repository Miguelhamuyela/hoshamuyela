<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicLivel;
use Illuminate\Http\Request;

class AcademicLivelController extends Controller
{
    public function index()
    {

        $response['academic_livels'] = AcademicLivel::get();
        return view("admin.academicLivel.list.index", $response)->with('destroy',1);

    }
    public function create()
    {

        return view('admin.academicLivel.create.index');
    }


    public function store(Request $request)
    {

        AcademicLivel::create([
            'academicLeveisName'=>$request->academicLeveisName,
            'obs'=>$request->obs,
            ]);

            return redirect()->route('admin.academicLivel.create')->with('create',1);
    }


    public function show($id)
    {

    }

    public function edit($id)
    {
        $response['academic_livels']= AcademicLivel::find($id);
      return view('admin.academicLivel.edit.index',$response);
    }


    public function update(Request $request, $id)
    {
        AcademicLivel::find($id)->update($request->all());
        return redirect()->route('admin.academicLivel.index')->with('edit',1);
    }


    public function destroy($id)
    {
        AcademicLivel::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
