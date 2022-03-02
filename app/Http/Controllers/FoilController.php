<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Foil;
Use App\Models\FoilGroup;
use Gate;
use DB;

class FoilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foilgroup = FoilGroup::all();
        $foil      = DB::table('tb_foil')
                        ->join('tb_foilgroup', 'tb_foilgroup.id_foilgroup','=','tb_foil.id_foilgroup')
                        ->select('*')
                        ->get();
        return view('modul.master.foil.index',compact(['foilgroup','foil']));
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
        $foil = Foil::create($request->all());
        return back()->with('tambah_foil', 'Great! Added Successfully.');
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
        $foil = Foil::where('id_foil',$request->id_foil)->update([
            'id_foilgroup'  =>$request->id_foilgroup,
            'foil_name'     =>$request->foil_name,
            'f_panjang'     =>$request->f_panjang,
            'f_lebar'       =>$request->f_lebar,
            'f_harga'       =>$request->f_harga,
            'f_ket'         =>$request->f_ket,
            'begda'         =>$request->begda,
            'endda'        =>$request->endda ]);
        return back()->with('edit_foil', 'Good! Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $foil = Foil::where('id_foil', $request->id_foil)->delete();
        return back()->with('delete_foil', 'Deleted Successfully.');
    }
}
