<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Papergroup2;
use App\Models\Papergroup1;
use Gate;
use DB;

class Papergroup2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $papergroup1 = Papergroup1::all();
        $papergroup2 = DB::table('tb_paperg2')
                        ->join('tb_paperg1', 'tb_paperg1.id_pg1','=','tb_paperg2.id_pg1')
                        ->select('tb_paperg2.id_pg2','tb_paperg2.id_pg1','tb_paperg1.paper_name','tb_paperg2.pg2_name','tb_paperg2.info_pg2')
                        ->get();
        return view('modul.master.paper.group2.index',compact('papergroup2','papergroup1'));
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
        Papergroup2::create($request->all());
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
        $pg2 = Papergroup2::where('id_pg2',$request->id_pg2)->update(['id_pg1'=>$request->id_pg1, 
                                                                      'pg2_name'=>$request->pg2_name,
                                                                      'info_pg2'=>$request->info_pg2]);
       
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
         $pg2 = Papergroup2::where('id_pg2', $request->id_pg2)->delete();

        return back()->with('delete', 'Deleted Successfully.');
    }
}
