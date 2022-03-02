<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use DB;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user   = Users::all();
        $level  = DB::table('tb_level')
                        ->select('*')
                        ->get(); 
        return view('modul.user.index',compact('user','level'));
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
        $input = [];
        $input = $request->all();
        $input['name']      = $request->get('fullname');
        $input['username']  = $request->get('username');
        $input['email']     = $request->get('email');
        //$input['password']  = $request->get('password');
        $input['password']  = Hash::make($request->get('password'));
        $input['level']     = $request->get('level');
        Users::create($input);
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
        if($request->password == NULL){
            $user = Users::where('username',$request->username)->update(['name'=>$request->fullname,'email'=>$request->email,'level'=>$request->level]);
        }else{
            $user = Users::where('username',$request->username)->update(['name'=>$request->fullname,'email'=>$request->email,'password'=>Hash::make($request->password),'level'=>$request->level]);
        }
       
       
        return back()->with('edit', 'Good! Updated Successfully.');
    }

    // public function reset(Request $request, $id)
    // {
    //     //
    //     $user = Users::where('id',$request->id)->update(['password'=>Hash::make('123'));
       
    //     return back()->with('edit', 'Good! Updated Successfully.');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $user = Users::where('id', $request->id)->delete();

        return back()->with('delete', 'Deleted Successfully.');
    }
}
