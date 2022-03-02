<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Papersize;
use App\Models\Papergramature;
use App\Models\Papergroup2;
use Gate;
use DB;

class PapersizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $papergroup2 = Papergroup2::all();
        $papergsm = Papergramature::all();
        $papersize = Papersize::all();
        $papersize = DB::table('tb_papersize')
                        ->join('tb_papergramature', 'tb_papergramature.id_gsm','=','tb_papersize.id_gsm')
                        ->join('tb_paperg2', 'tb_paperg2.id_pg2','=','tb_papergramature.id_pg2')
                        ->select('*')
                        ->get();
        return view('modul.master.paper.size.index', compact('papersize','papergsm','papergroup2'));
       
    }

    public function fetch(Request $request){
        $select     = $request->get('select');
        $value      = $request->get('value');
        $dependent  = $request->get('dependent');
        $data       = DB::table('tb_papergramature')
                        ->where($select, $value)
                        ->groupBy($dependent)
                        ->get();
        $output = '<option value="">---Select Gramature---</option>';
        foreach($data as $row)
        {
            $output .= '<option value="'.$row->id_gsm.'">'.$row->gramature.'</option>';
        }
        echo $output;
    }

    // function display ukuran GSM
    public function getGsm(Request $request) {
        // $gsm    = DB::table('tb_papergramature')
        //              ->where('id_gsm', $request->id_gsm)
        //              ->get();
      //  $gsm  = Papergramature::all();
        $select     = $request->get('select');
        $value      = $request->get('value');
        $dependent  = $request->get('dependent');
       // $gsm  = Papergramature::where('id_pg2', $request->id_pg2)->pluck('gramature', 'id_gsm');
        $gsm = DB::table('tb_papergramature')
                        ->where('id_pg2', $value)
                        ->groupBy('id_gsm')
                        ->get();
        $output = '<option value="">---Select Gramature---</option>';
        foreach($gsm as $row)
        {
            $output .= '<option value="'.$row->id_gsm.'">'.$row->gramature.'</option>';
        }
        echo $output;
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
        Papersize::create($request->all());
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
