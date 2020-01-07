<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

class bookpageController extends Controller
{
    public function index()
    {
        $table = DB::table('table')->get();
        return view('book' , ['table'=>$table]);
    }
}
