<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

class menupageController extends Controller
{
    public function index()
    {
        return view('menu');
    }
}
