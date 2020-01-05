<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

class menupageController extends Controller
{
    public function index(Request $req, $id)
    {
        $category = DB::table('foodcategory')->get();
        $food = DB::table('food')->get();
        return view('menu', ['id' => $id, 'category' => $category, 'food' => $food]);
    }
    public function buy(Request $req, $id, $item)
    {
        $food = DB::table('food')->where('id', $item)->first();
        $foodname = $food->name;
        $foodprice = $food->price;
        // return $foodname;
        $newID = DB::table('order')->insertGetId(['total_price' => $foodprice , 'status'=>1 , 'amount' => $foodprice,'table_id'=>$id]);
        // return $newID;
        DB::table('orderDetail')->insert(['food_id'=>$item , 'order_id'=>$newID,'quantity'=>+1]);
        return redirect()->back();
    }
    public function indexOrder(Request $req, $id)
    {
        return view('orderlist', ['id' => $id]);
    }
}
