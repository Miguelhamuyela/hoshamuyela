<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
use PDF;

class RoomController extends Controller
{

    public function index()
    {
        $response['rooms'] = Room::paginate(8);
        return view("admin.room.list.index", $response)->with('destroy', 1);
    }
    public function create()
    {
        return view("admin.room.create.index");
    }
    public function store(Request $request)
    {
        $validation = $request->validate([

            'name' => 'required|max:255',
            'numberStudent' => 'required|max:255',
            'numberBad' => 'required|max:255',
            'description' =>  'required|max:255',
        ]);
        Room::create([
            'name' => $request->name,
            'numberStudent' => $request->numberStudent,
            'numberBad' => $request->numberBad,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.rooms.create')->with('create', 1);
    }
    public function show($id)
    {
        $response['rooms'] = Room::find($id);
        $pdf = PDF::loadview('admin.pdf.room.index', $response);
        return $pdf->setPaper('a4')->stream('pdf');
        return view('admin.room.details.index', $response);
    }
    public function edit($id)
    {
        $response['rooms'] = Room::get();
        return view('admin.room.edit.index', $response);
    }
    public function update(Request $request, $id)
    {
        Room::find($id)->update($request->all());
        return redirect()->route('admin.rooms.index')->with('edit', 1);
    }

    public function destroy($id)
    {
        Room::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
