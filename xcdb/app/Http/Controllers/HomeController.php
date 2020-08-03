<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class = DB::select('select * from SET_CLASS');
        $depart = DB::select('select * from V_CONST_DEPART t where t.is_ubtz=1 order by ex_report_no');
        $month = DB::select('select * from V_CONST_MONTH');
        return view('salary',compact('class', 'depart','month'));
    }
}
