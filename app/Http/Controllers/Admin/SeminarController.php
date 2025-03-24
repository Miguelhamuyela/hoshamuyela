<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Seminar;
use Illuminate\Http\Request;
use PDF;
class SeminarController extends Controller
{

    public function index()
    {
        $response['seminars'] = Seminar::paginate(10);
        return view("admin.seminar.list.index", $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.seminar.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Seminar::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'site' => $request->site,
            'detail' => $request->detail,
        ]);

        return redirect()->route('admin.seminars.create')->with('create', 1);
    }

  
    public function show($id)
    {
        $response['seminars'] = Seminar::find($id);
        $pdf = PDF::loadview('admin.pdf.seminar.index', $response);
        return $pdf->setPaper('a4')->stream('pdf');
        return view('admin.seminar.detail.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['seminars'] = Seminar::find($id);
        return view('admin.seminar.edit.index', $response);
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
        Seminar::find($id)->update($request->all());
        return redirect()->route('admin.seminars.index')->with('edit', 1);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Seminar::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
