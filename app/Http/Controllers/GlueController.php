<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Glue;

class GlueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $glue = Glue::all();
        return view('modul.master.glue.index',compact('glue'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $glue = Glue::create($request->all());
        return back()->with('tambah', 'Great! Added Successfully.');
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
        $glue = Glue::where('id_glue',$request->id_glue)->update([
            'id_glue'        =>$request->id_glue,
            'glue_name'      =>$request->glue_name,
            'glue_variable'  =>$request->glue_variable,
            'glue_ket'       =>$request->glue_ket,
            'glue_harga'     =>$request->glue_harga,
            'glue_proses'    =>$request->glue_proses ]);
        return back()->with('edit', 'Good! Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $glue = Glue::where('id_glue', $request->id_glue)->delete();
        return back()->with('delete', 'Deleted Successfully.');
    }
}
