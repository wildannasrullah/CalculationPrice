<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApprovalRange;

class ApprovalRangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apprange = ApprovalRange::all();
        return view('modul.approval.index',compact('apprange'));
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
        $apprange = ApprovalRange::create($request->all());
        return back()->with('tambah_app', 'Great! Added Successfully.');
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
        $apprange = ApprovalRange::where('id_apr',$request->id_apr)->update([
            'min'        =>$request->min,
            'max'        =>$request->max,
            'min_prof'   =>$request->min_prof,
            'max_prof'   =>$request->max_prof,
            'status'     =>$request->status  ]);
        return back()->with('edit_app', 'Good! Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $apprange = ApprovalRange::where('id_apr', $request->id_apr)->delete();
        return back()->with('delete_app', 'Deleted Successfully.');
    }
}
