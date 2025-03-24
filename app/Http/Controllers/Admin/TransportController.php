<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transport;
use Illuminate\Http\Request;
use PDF;
class TransportController extends Controller
{

    public function index()
    {
        $response['transports'] = Transport::get();
        return view("admin.Transport.list.index", $response);
    }


    public function create()
    {
        return view('admin.Transport.create.index');
    }
    public function store(Request $request)
    {
        Transport::create([
            'mark' => $request->mark,
            'model' => $request->model,
            'color' => $request->color,
            'plate' => $request->plate,
            'fuel' => $request->fuel,
            'acquired' => $request->acquired,
            'obs' => $request->obs,
        ]);

        return redirect()->route('admin.transports.create')->with('create', 1);
    }


    public function show($id)
    {
        $response['transports'] = Transport::get();
        //Logger
        $this->Logger->log('info', 'Visualizou um Transporte com o identificador ' . $id);
        $pdf = PDF::loadview('admin.pdf.transports.index', $response);
        return $pdf->setPaper('a4')->stream('pdf');
        return view('admin.transports.details.index', $response);
    }


    public function edit($id)
    {
        $response['transports']= Transport::find($id);
        return view('admin.transports.edit.index',$response);
    }


    public function update(Request $request, $id)
    {
        Transport::find($id)->update($request->all());
        return redirect()->route('admin.transports.index')->with('edit',1);
    }


    public function destroy($id)
    {
        Transport::find($id)->delete();
        // Teacher::find($request->id)->delete();
         $this->Logger->log('info', 'Eliminou um Doctor');
         return redirect()->back()->with('destroy', '1');
    }
}
