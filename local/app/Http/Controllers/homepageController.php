<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

class homepageController extends Controller
{
    public function index()
    {
        Session::flush();
        return view('home');
    }
    public function indexMenu()
    {
        return view('menu1');
    }
    public function indexGallery()
    {
        return view('gallery');
    }
    public function indexAbout()
    {
        return view('about');
    }
}
