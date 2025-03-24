<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicYear;
use App\Models\Holiday;
use App\Models\Seminar;
use App\Models\SeminarAcademicYear;
use Illuminate\Http\Request;
use PDF;
class SeminarAcademicYearController extends Controller
{

    public function index()
    {
        $response['seminar_academic_years'] = SeminarAcademicYear::with('holidays')->get();
        return view('admin.seminarAcademicYear.list.index', $response);
    }

    public function GetSubCatAgainstMain($id)
    {
        echo json_encode(Holiday::where('id', $id)->get());
    }

    public function seminar_academic_years_seach(Request $request)
    {
        return redirect("admin/feriado/seachResult/{$request->startYear}");
    }

    public function seachResult($startYear)
    {
        $response['seminar_academic_years'] = SeminarAcademicYear::with('holidays')->where('startYear', $startYear)->get();
        return view('admin.seminarAcademicYear.list.index', $response);
    }

    public function sendStartYear(Request $request)
    {
        return redirect("admin/feriado/recibo/{$request->startYear}");
    }

    public function print($startYear)
    {
        $response['seminar_academic_years'] = SeminarAcademicYear::with('holidays')->where('startYear', $startYear)->get();
        $pdf = PDF::loadview('admin.pdf.seminarAcademicYear.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf');
    }

    public function create()
    {
       $response['academicYears'] = AcademicYear::get();
       $response['seminar_academic_years'] = SeminarAcademicYear::get();
       return view('admin.seminarAcademicYear.create.index', $response);
    }
    public function store(Request $request)
    {
        SeminarAcademicYear::create([
            'startYear' => $request->startYear,
            'startDate' => $request->startDate,
            'endDate' => $request->endDate,
            'typeHoliday' => $request->typeHoliday,
            'fk_holidays_id' => $request->fk_holidays_id,
            'obs' => $request->obs,

        ]);

        return redirect()->route('admin.seminar_academic_years.create')->with('create', 1);
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


    public function destroy($id)
    {
        //
    }
}
