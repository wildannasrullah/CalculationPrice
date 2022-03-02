<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Papergroup2;
use App\Models\Papergramature;
use Gate;
use DB;

class PapergramatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $papergroup2 = Papergroup2::all();
        $papergsm =  Papergramature::all();
        $papergsm = DB::table('tb_papergramature')
                        ->join('tb_paperg2', 'tb_paperg2.id_pg2','=','tb_papergramature.id_pg2')
                        ->select('*')
                        ->get();
        return view('modul.master.paper.gramature.index', compact('papergsm','papergroup2'));
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
        Papergramature::create($request->all());
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
        $papergsm = Papergramature::where('id_gsm',$request->id_gsm)->update(['id_pg2'=>$request->id_pg2, 
                                                                         'gramature'=>$request->gramature,
                                                                         'tumpukan'=>$request->tumpukan]);
       
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
        $papergsm = Papergramature::where('id_gsm', $request->id_gsm)->delete();

        return back()->with('delete', 'Deleted Successfully.');
    }
}
