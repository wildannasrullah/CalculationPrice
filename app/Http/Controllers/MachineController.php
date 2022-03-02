<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machine;
Use App\Models\Machinegroup;
use Gate;
use DB;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $machinegroup = Machinegroup::all();
        $machine      = DB::table('tb_mesin')
                        ->join('tb_mesingroup', 'tb_mesingroup.id_group','=','tb_mesin.id_group')
                        ->select('*')
                        ->get();
        return view('modul.master.machine.index',compact(['machinegroup','machine']));
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
        $machine = Machine::create($request->all());
        return back()->with('tambah_machine', 'Great! Added Successfully.');
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
        $machine = Machine::where('id_mesin',$request->id_mesin)->update([
            'id_group'      =>$request->id_group,
            'name_mesin'    =>$request->name_mesin,
            'jum_warna'     =>$request->jum_warna,
            'max_panjang'   =>$request->max_panjang,
            'max_lebar'     =>$request->max_lebar,
            'kapasitas'     =>$request->kapasitas,
            'harga_p_jam'   =>$request->harga_p_jam,
            'inline'        =>$request->inline,
            'max_pjg_plat'  =>$request->max_pjg_plat,
            'max_lbr_plat'  =>$request->max_lbr_plat,
            'aktif'         =>$request->aktif ]);
        return back()->with('edit_machine', 'Good! Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $machine = Machine::where('id_mesin', $request->id_mesin)->delete();
        return back()->with('delete_machine', 'Deleted Successfully.');
    }
}
