<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Departament;
use Illuminate\Http\Request;
use PDF;

class DepartamentController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        //  $response['departaments'] = Departament::paginate(10);

        $response['departaments'] = Departament::orderBy('departamentName', 'ASC')->get();
        //Logger
        $this->Logger->log('info', 'Listou o Departamento');
        return view("admin.departament.list.index", $response)->with('destroy', 1);
    }
    public function create()
    {
        $response['departaments'] = Departament::get();
        return view('admin.departament.create.index', $response);
    }


    public function store(Request $request)
    {
        $validation = $request->validate([
            'departamentName' => 'required|max:255',
            'departamentName' => 'required|max:255',
        ]);
        Departament::create([
            'departamentName' => $request->departamentName,
            'headDepartment' => $request->headDepartment,
            'obs' => $request->obs,
        ]);


        return redirect()->route('admin.departments.create')->with('create', 1);
    }

    public function show($id)
    {

        $response['departaments'] = Departament::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou um Departamento com o identificador ' . $id);

        $pdf = PDF::loadview('admin.pdf.departament.index', $response);
        return $pdf->setPaper('a4')->stream('pdf');
        return view('admin.departament.details.index', $response);
    }

    public function edit($id)
    {
        $response['departaments'] = Departament::find($id);
          //Logger
          $this->Logger->log('info', 'Entrou em editar um departamento com o identificador ' . $id);
        return view('admin.departament.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        Departament::find($id)->update($request->all());
          //Logger
          $this->Logger->log('info', 'Editou um Departamento com o identificador ' . $id);
        return redirect()->route('admin.departments.index')->with('edit', 1);
    }



    public function destroy($id)
    {

        Departament::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
