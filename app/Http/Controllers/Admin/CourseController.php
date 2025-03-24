<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseTime;
use App\Models\Departament;
use App\Models\StudentPerfect;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Author;
use PDF;

class CourseController extends Controller
{

    public function index()
    {
        $response['departaments'] = Departament::get();
        $response['courses'] = Course::where('fk_users_id', Auth::user()->id)->get();
        return view("admin.course.list.index", $response)->with('destroy', 1);
    }
    public function create()
    {

        $response['departaments'] = Departament::get();
        $response['users'] = User::get();
        return view('admin.course.create.index', $response);
    }

    public function store(Request $request)
    {
        $validation = $request->validate([]);

        $course = Course::create([
            'courseName' => $request->courseName,
            'start' => $request->start,
            'duration' => $request->duration,
            'fk_departaments_id' => $request->fk_departaments_id,
            'fk_users_id' => $request->fk_users_id,
            'obs' => $request->obs,
        ]);

        return redirect()->route('admin.course.create')->with('create', 1);
      //  return redirect("admin/curso/show/$course->id")->with('create', '1');

    }


    public function show($id)
    {
        $response['departaments'] = Departament::get();
        $response['users'] = User::find($id);
        $response['course'] = Course::find($id);
        return view('admin.course.details.index', $response);
    }


    public function edit($id)
    {
        $response['departaments'] = Departament::get();
        $response['users'] = User::find($id);
        $response['course']= Course::find($id);
        return view('admin.course.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        Course::find($id)->update($request->all());
        return redirect()->route('admin.course.index')->with('edit', 1);
    }

    public function destroy($id)
    {
        Course::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
