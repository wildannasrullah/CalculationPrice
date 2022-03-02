<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Klise;

class KliseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $klise = Klise::all();
        return view('modul.master.klise.index',compact('klise'));
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
        $klise = Klise::create($request->all());
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
        $klise = Klise::where('id_klise',$request->id_klise)->update([
            'id_klise'        =>$request->id_klise,
            'klise_name'      =>$request->klise_name,
            'klise_harga'     =>$request->klise_harga,
            'klise_ket'       =>$request->klise_ket ]);
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
        $klise = Klise::where('id_klise', $request->id_klise)->delete();
        return back()->with('delete', 'Deleted Successfully.');
    }
}
