<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Municipe;
use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{

    public function index()
    {

        $response['municipies'] = Municipe::get();
        $response['provinces'] = Province::paginate(8);
        return view("admin.province.list.index", $response)->with('destroy', 1);
    }


    public function create()
    {
        $response['municipies'] = Municipe::get();
        $response['provinces'] = Province::get();
        return view('admin.province.create.index', $response);
    }


    public function store(Request $request)
    {

        Province::create([
            'proviceName' => $request->proviceName,
            'fk_municipes_id' => $request->fk_municipes_id,
            'obs' => $request->obs,

        ]);

        return redirect()->route('admin.province.create')->with('create', 1);
    }


    public function show($id)
    {
        $response['province'] = Province::find($id);
        return view('admin.province.list.index', $response);
    }


    public function edit($id)
    {

        $response['provinces'] = Province::find($id);
        return view('admin.province.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        Province::find($id)->update($request->all());
        return redirect()->route('admin.province.index')->with('edit', 1);
    }


    public function destroy($id)
    {
        Province::find($id)->delete();
        return redirect()->back();
    }
}
