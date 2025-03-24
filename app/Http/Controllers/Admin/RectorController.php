<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rector;
use Illuminate\Http\Request;
use PDF;
use file;
class RectorController extends Controller
{

    public function index()
    {
        $response['rectors'] = Rector::paginate(8);
        return view("admin.rector.list.index", $response)->with('destroy', 1);
    }

    public function create()
    {
        $response['rectors'] = Rector::get();
        return view('admin.rector.create.index', $response);
    }


    public function store(Request $request)
    {
       $file = $request->file('image')->store('rectors');
        Rector::create([
            'name' => $request->name,
            'lastName' => $request->lastName,
            'phone' => $request->phone,
            'email' => $request->email,
            'schooling' => $request->schooling,
            'specialty' => $request->specialty,
            'beginning' => $request->beginning,
            'end' => $request->end,
            'superior' => $request->superior,
            'SecondarySchooling' => $request->SecondarySchooling,
            'language' => $request->language,
            'address' => $request->address,
            'dateBirth' => $request->dateBirth,
            'image' => $file,

        ]);

        return redirect()->route('admin.rectors.create')->with('create', 1);
    }


    public function show($id)
    {
        $response['rectors']= Rector::find($id);
        return view('admin.rector.detail.index',$response);
    }


    public function edit($id)
    {
        $response['rectors'] = Rector::get();
        return view('admin.rector.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        Rector::find($id)->update($request->all());
        return redirect()->route('admin.rector.index')->with('edit',1);
    }


    public function destroy($id)
    {
        Rector::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
