<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\PlasticGroup;

class PlasticGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plasticgroup = PlasticGroup::all();
        return view('modul.master.plastic.index',compact('plasticgroup'));
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
        $plasticgroup = PlasticGroup::create($request->all());
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
        $plasticgroup = PlasticGroup::where('id_laminating_group',$request->id_laminating_group)->update([
            'laminating_group_name'     =>$request->laminating_group_name,
            'info_laminating_group'     =>$request->info_laminating_group ]);
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
        $plasticgroup = PlasticGroup::where('id_laminating_group', $request->id_laminating_group)->delete();
        return back()->with('delete', 'Deleted Successfully.');
    }
}
