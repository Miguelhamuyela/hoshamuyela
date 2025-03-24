<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{

    public function index()
    {
        $response['donations'] = Donation::paginate(10);
        return view("admin.donation.list.index", $response)->with('destroy', 1);
    }


    public function create()
    {
        $response['donations'] = Donation::get();
        return view('admin.donation.create.index', $response);
    }


    public function store(Request $request)
    {
        $validation = $request->validate([
            'nameDonation' => 'required|max:255',
        ]);
        Donation::create([

            'nameDonation' => $request->nameDonation,
            'obs' => $request->obs,
        ]);

        return redirect()->route('admin.donations.create')->with('create', 1);
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
