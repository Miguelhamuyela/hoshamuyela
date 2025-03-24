<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Municipe;
use Illuminate\Http\Request;

class MunicipeController extends Controller
{

    public function index()
    {
    
        $response['municipies']=Municipe::paginate(7);
        return view("admin.Municipe.list.index", $response)->with('destroy',1);

    }


    public function create()
    {

        $response['municipies']=Municipe::get();
      //  return view('admin.municipe.create.index',$response);
        return view('admin.municipe.create.index', $response);

    }


    public function store(Request $request)
    {
            $validation = $request->validate([
                'municipeName' => 'required|max:255',

            ]);
            Municipe::create([
                'municipeName'=>$request->municipeName,
                'obs'=>$request->obs,
                ]);

                return redirect()->route('admin.municipe.create')->with('create',1);

    }


    public function show($id)
    {
        $response['municipies']= Municipe::find($id);
        return view('admin.municipe.details.index',$response);
    }


    public function edit($id)
    {

      $response['municipies']= Municipe::find($id);
      return view('admin.municipe.edit.index',$response);

    }


    public function update(Request $request, $id)
    {

        Municipe::find($id)->update($request->all());
        return redirect()->route('admin.municipe.index')->with('edit',1);

    }


    public function destroy($id)
    {
        Municipe::find($id)->delete();
       return redirect()->back()->with('destroy', '1');
    }
}
