<?php

namespace App\Http\Controllers;
use App\Models\Machine;
use App\Models\Plat;
Use App\Models\PlatGroup;
use Gate;
use DB;

use Illuminate\Http\Request;

class PlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $machine    = Machine::all();
        $platgroup  = PlatGroup::all();
        $platlist   = DB::table('tb_plat')
                        ->leftJoin('tb_mesin', 'tb_plat.id_mesin','=','tb_mesin.id_mesin')
                        ->leftJoin('tb_plat_group', 'tb_plat.id_plat_group','=','tb_plat_group.id_plat_group')
                        ->select('*')
                        ->get();
        return view('modul.master.plat.index',compact(['machine','platgroup','platlist']));
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
        Plat::create($request->all());
        return back()->with('tambah_plat', 'Great! Added Successfully.');
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
        $platlist = Plat::where('id_plat',$request->id_plat)->update(['id_mesin'        =>$request->id_mesin,
                                                                      'plat_name'       =>$request->plat_name,
                                                                      'harga_plat'      =>$request->harga_plat,
                                                                      'info_plat'       =>$request->info_plat,
                                                                      'id_plat_group'   =>$request->id_plat_group,
                                                                      'begda'           =>$request->begda,
                                                                      'endda'           =>$request->endda,
                                                                      'length_plat'     =>$request->length_plat,
                                                                      'width_plat'      =>$request->width_plat]);
        return back()->with('edit_plat', 'Good! Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $platlist = Plat::where('id_plat', $request->id_plat)->delete();
        return back()->with('delete_plat', 'Deleted Successfully.');
    }
}
