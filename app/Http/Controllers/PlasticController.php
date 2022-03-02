<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Plastic;
Use App\Models\PlasticGroup;
use Gate;
use DB;

class PlasticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plasticgroup = PlasticGroup::all();
        $plastic      = DB::table('tb_laminating')
                        ->join('tb_laminating_group', 'tb_laminating_group.id_laminating_group','=','tb_laminating.id_laminate_group')
                        ->select('*')
                        ->get();
        return view('modul.master.plastic.index',compact(['plasticgroup','plastic']));
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
        $plastic = Plastic::create($request->all());
        return back()->with('tambah_plastic', 'Great! Added Successfully.');
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
        $plastic = Plastic::where('id_laminate',$request->id_laminate)->update([
            'laminate_name'      =>$request->laminate_name,
            'tamper_type'        =>$request->tamper_type,
            'panjang_laminate'   =>$request->panjang_laminate,
            'lebar_laminate'     =>$request->lebar_laminate,
            'laminate_harga'     =>$request->laminate_harga,
            'ket_laminate'       =>$request->ket_laminate,
            'id_laminate_group'  =>$request->id_laminate_group,
            'begda'              =>$request->begda,
            'endda'              =>$request->endda ]);
        return back()->with('edit_plastic', 'Good! Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $plastic = Plastic::where('id_laminate', $request->id_laminate)->delete();
        return back()->with('delete_plastic', 'Deleted Successfully.');
    }
}
