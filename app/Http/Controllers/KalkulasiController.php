<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulasiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // if(!Session::get('/kalkulasi/login')){
        //     return redirect('login')->with('alert','Kamu harus login dulu');
        // }else{
        //     return view('kalkulasi');
        // }
    }
    
}
