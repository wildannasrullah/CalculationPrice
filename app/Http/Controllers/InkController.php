<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ink;
use App\Models\InkList;
use Gate;
use DB;

class InkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $inkgroup = Ink::all();
        $inklist = InkList::all();
        $inklist = DB::table('tb_tinta_t')
                        ->join('tb_tinta', 'tb_tinta.id_tinta','=','tb_tinta_t.id_tinta')
                        ->select('*')
                        ->get();
         return view('modul.master.ink.index',compact(['inkgroup','inklist']));
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
        Ink::create($request->all());
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
        $inkgroup = Ink::where('id_tinta',$request->id_inkgroup)->update(['name_tinta'  =>$request->name_tinta,
                                                                          'info'        =>$request->info]);
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
        $inkgroup = Ink::where('id_tinta', $request->id_inktype)->delete();
        return back()->with('delete', 'Deleted Successfully.');
    }
}
