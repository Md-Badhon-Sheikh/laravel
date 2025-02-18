<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\View\View;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = DB::table('employees')->get();
 
        return view('pages.relation.dbRelation', ['employee' => $employee]);
    }
}
