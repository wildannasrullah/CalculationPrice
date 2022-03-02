<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\LaserPertinax;

class LaserPertinaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $laserpertinax = LaserPertinax::all();
        return view('modul.master.laserpertinax.index',compact('laserpertinax'));
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
        $laserpertinax = LaserPertinax::create($request->all());
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
        $laserpertinax = LaserPertinax::where('id_laser_pertinax',$request->id_laser_pertinax)->update([
            'laser_pertinax_name'       =>$request->laser_pertinax_name,
            'harga_laser_pertinax'      =>$request->harga_laser_pertinax ]);
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
        $laserpertinax = LaserPertinax::where('id_laser_pertinax', $request->id_laser_pertinax)->delete();
        return back()->with('delete', 'Deleted Successfully.');
    }
}
