<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AppetizerAcademicYear;
use App\Models\Partner;
use App\Models\Rector;
use Illuminate\Http\Request;
use PDF;
class AppetizerAcademicYearController extends Controller
{

    public function index()
    {
        $response['appetizer_academic_years'] = AppetizerAcademicYear::with('rectors')->get();
        return view('admin.appetizerAcademicYear.list.index', $response);
    }

    public function GetSubCatAgainstMain($id)
    {
        echo json_encode(Rector::where('id', $id)->get());
    }


    public function create()
    {
        $response['partners'] = Partner::get();
        $response['appetizer_academic_years'] = AppetizerAcademicYear::get();
        return view('admin.appetizerAcademicYear.create.index', $response);
    }


    public function appetizer_academic_years_seach(Request $request)
    {
       return redirect("admin/donativo-anual/seachResult/{$request->startYear}");
    }

    public function seachResult($startYear)
    {
        $response['appetizer_academic_years'] = AppetizerAcademicYear::with('rectors')->where('startYear', $startYear)->get();
        return view('admin.appetizerAcademicYear.list.index', $response);
    }

    public function sendStartYear(Request $request)
    {
        return redirect("admin/donativo-anual/recibo/{$request->startYear}");
    }

    public function print($startYear)
    {
        $response['appetizer_academic_years'] = AppetizerAcademicYear::with('rectors')->where('startYear', $startYear)->get();
        $pdf = PDF::loadview('admin.pdf.appetizerAcademicYear.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf');
    }


    public function store(Request $request)
    {
        AppetizerAcademicYear::create([
            'fk_rectors_id' => $request->fk_rectors_id,
            'fk_partners_id' => $request->fk_partners_id,
            'startYear' => $request->startYear,
            'Productname' => $request->Productname,
            'qty' => $request->qty,
            'obs' => $request->obs,
        ]);

        return redirect()->route('admin.appetizer_academic_years.create')->with('create', 1);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
