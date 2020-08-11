<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller {

    static $columns = ['sl_man','','sl_all','sl_base','sl_prize','sl_lifetime','sl_line','sl_harmful',
        'sl_night','sl_weekend','sl_transport','sl_food','sl_balance','sl_annual','sl_balance'];

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $class = DB::select('select * from SET_CLASS');
        $depart = DB::select('select * from V_CONST_DEPART t where t.is_ubtz=1 order by ex_report_no');
        $month = DB::select('select * from V_CONST_MONTH');
        $salary = DB::select('select * from V_SALARY t
        where t.is_aur=0
        and t.ryear=2020
        and t.rmonth=7');
        return view('salary',compact('class', 'depart','month', 'salary'));
    }

    public function update_salary($salary_id, $column, $value) {
        $colName = static::$columns[$column-1];
        $query = 'update salary set '.$colName.'='.$value.' where salary_id='.$salary_id;
        DB::update($query);
        return $query; // for debug
    }
}
