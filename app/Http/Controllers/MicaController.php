<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mica;

class MicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mica = Mica::all();
        return view('modul.master.mica.index',compact('mica'));
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
        $mica = Mica::create($request->all());
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
        $mica = Mica::where('id_mika',$request->id_mika)->update([
            'mika_name'         =>$request->mika_name,
            'tamper_mika_type'  =>$request->tamper_mika_type,
            'mika_harga'        =>$request->mika_harga,
            'panjang_mika'      =>$request->panjang_mika,
            'lebar_mika'        =>$request->lebar_mika,
            'mika_ket'          =>$request->mika_ket ]);
        return back()->with('edit', 'Good! Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mica = Mica::where('id_mika', $request->id_mika)->delete();
        return back()->with('delete', 'Deleted Successfully.');
    }
}
