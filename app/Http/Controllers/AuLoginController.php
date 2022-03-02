<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use Session;

class AuLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('auth.login');
    }

    public function auCheck(Request $request) 
    {

        $user = $request->input('username');
        $pass = $request->input('password');        

        $users = DB::table('users')->where(['username'=> $user])->first();
        
                if(count(array($users))==0){
        
                   return redirect('/kalkulasi/login')->with('failed','Login gagal');
        
                } else{
                    
                    if (Hash::check($pass, optional($users)->password)) {
                        
                    // Session::put('login', 'Selamat anda berhasil login');
                            Session::put('name',$users->name);
                            Session::put('username',$users->username);
                            Session::put('level',$users->level);
                            Session::put('login',TRUE);
                            
                            return redirect('/kalkulasi');
            
                    } else {
                        
                    return redirect('/kalkulasi/login')->with('failed','Login gagal');
            
                    }
                }
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
