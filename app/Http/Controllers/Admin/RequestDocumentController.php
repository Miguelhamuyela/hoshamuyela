<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RequestDocument;
use Illuminate\Http\Request;

class RequestDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['request_documents'] = RequestDocument::paginate(8);
        return view("admin.RequestDocument.list.index", $response)->with('destroy', 1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response['request_documents'] = RequestDocument::get();
        return view('admin.RequestDocument.create.index', $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        RequestDocument::create([
            'requestName' => $request->requestName,
            'obs' => $request->obs,
        ]);

        return redirect()->route('admin.request_documents.create')->with('create', 1);
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
        $response['request_documents'] = RequestDocument::get();
        return view('admin.RequestDocument.edit.index', $response);
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
        RequestDocument::find($id)->update($request->all());
        return redirect()->route('admin.RequestDocument.index')->with('edit',1);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RequestDocument::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
