<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SalaryAcademicYear;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SalaryAcademicYearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['salary_academic_years'] = SalaryAcademicYear::with('teachers')->get();
        return view('admin.salaryAcademicYear.list.index', $response);
    }

    public function GetSubCatAgainstMain($id)
    {
        echo json_encode(Teacher::where('id', $id)->get());
    }

    public function create()
    {
        $response['teachers'] = Teacher::get();
        return view('admin.salaryAcademicYear.create.index', $response);
    }

    public function salary_academic_years_seach(Request $request)
    {
        return redirect("admin/salario-anual/seachResult/{$request->startYear}");
    }

    public function seachResult($startYear)
    {
        $response['salary_academic_years'] = SalaryAcademicYear::with('teachers')->where('startYear', $startYear)->get();
        return view('admin.salaryAcademicYear.list.index', $response);
    }

    public function sendStartYear(Request $request)
    {
        return redirect("admin/salario-anual/recibo/{$request->startYear}");
    }









    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SalaryAcademicYear::create([
            'fk_teachers_id'=>$request->fk_teachers_id,
            'startYear'=>$request->startYear,
            'joiningDate'=>$request->joiningDate,
            'amount'=>$request->amount,
            'month'=>$request->month,
            'genro'=>$request->genro,

            ]);

            return redirect()->route('admin.salary_academic_years.create')->with('create',1);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
