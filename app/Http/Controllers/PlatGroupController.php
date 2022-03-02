<?php

namespace App\Http\Controllers;
Use App\Models\PlatGroup;
use App\Models\Plat;

use Illuminate\Http\Request;

class PlatGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platgroup = PlatGroup::all();
        $plat = DB::table('tb_plat')
                        ->join('tb_mesin', 'tb_plat.id_mesin','=','tb_mesin.id_mesin')
                        ->select('*')
                        ->get();
        return view('modul.master.plat.index',compact(['platgroup','plat']));
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
         PlatGroup::create($request->all());
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
        $platgroup = PlatGroup::where('id_plat_group',$request->id_plat_group)->update([
                                                                      'plat_group_name'      =>$request->plat_group_name,
                                                                      'info_plat_group'      =>$request->info_plat_group,
                                                                      'jumlah_lbr'          =>$request->jumlah_lbr]);
        return back()->with('edit', 'Good! Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $platgroup = PlatGroup::where('id_plat_group', $request->id_plat_group)->delete();
        return back()->with('delete', 'Deleted Successfully.');
    }
}
