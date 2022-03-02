<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inline;

class InlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inline = Inline::all();
        return view('modul.master.inline.index',compact('inline'));
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
        $inline = Inline::create($request->all());
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
        $inline = Inline::where('id_inline',$request->id_inline)->update([
            'name_inline'       =>$request->name_inline,
            'kategori_inline'   =>$request->kategori_inline,
            'harga_inline'      =>$request->harga_inline,
            'keterangan'        =>$request->keterangan,
            'inline_variable'   =>$request->inline_variable ]);
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
        $inline = Inline::where('id_inline', $request->id_inline)->delete();
        return back()->with('delete', 'Deleted Successfully.');
    }
}
