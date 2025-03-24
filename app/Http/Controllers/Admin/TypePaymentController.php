<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TypePayment;
use Illuminate\Http\Request;

class TypePaymentController extends Controller
{

    public function index()
    {
        $response['type_pagaments'] = TypePayment::get();
        return view('admin.typePayment.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response['type_pagaments'] = TypePayment::get();
        return view("admin.typePayment.create.index", $response);
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'typePagament' => 'required|max:255',
        ]);

        TypePayment::create([
            'typePagament' => $request->typePagament,
            'obs' => $request->obs,
        ]);

        return redirect()->route('admin.type_payments.create')->with('create', 1);
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
