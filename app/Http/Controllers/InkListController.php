<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InkList;

class InkListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $inklist = InkList::all();
        return view('modul.master.ink.inklist',compact('inklist'));
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
        InkList::create($request->all());
        return back()->with('tambah_ink', 'Great! Added Successfully.');
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
        $inktype = InkList::where('id_tt',$request->id_inklist)->update(['id_tinta'        =>$request->id_tinta,
                                                                         'name_tinta_t'    =>$request->name_tinta_t,
                                                                         'info_t'          =>$request->info_t,
                                                                         'harga_tinta_t'   =>$request->harga_tinta_t,
                                                                         'begda'           =>$request->begda,
                                                                         'endda'           =>$request->endda]);
        return back()->with('edit_ink', 'Good! Updated Ink Type Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $inktype = InkList::where('id_tt', $request->id_inktype)->delete();
        return back()->with('delete_ink', 'Deleted Successfully.');
    }
}
