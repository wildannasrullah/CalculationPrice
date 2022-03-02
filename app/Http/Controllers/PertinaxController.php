<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Pertinax;

class PertinaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pertinax = Pertinax::all();
        return view('modul.master.pertinax.index',compact('pertinax'));
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
        $pertinax = Pertinax::create($request->all());
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
        //
        $pertinax = Pertinax::where('id_pertinax',$request->id_pertinax)->update([
            'pertinax_name'       =>$request->pertinax_name,
            'harga_pertinax'      =>$request->harga_pertinax ]);
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
        //
        $pertinax = Pertinax::where('id_pertinax', $request->id_pertinax)->delete();
        return back()->with('delete', 'Deleted Successfully.');
    }
}
