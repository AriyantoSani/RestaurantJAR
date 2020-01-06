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
        Session::put('table', $id);
        $category = DB::table('foodcategory')->get();
        $food = DB::table('food')->get();
        return view('menu', ['id' => $id, 'category' => $category, 'food' => $food]);
    }
    public function buy(Request $req, $id, $item)
    {
        // $food = DB::table('food')->where('id', $item)->first();
        // $foodname = $food->name;
        // $foodprice = $food->price;
        // $newID = DB::table('order')->insertGetId(['total_price' => $foodprice , 'status'=>1 , 'amount' => $foodprice,'table_id'=>$id]);
        // DB::table('orderDetail')->insert(['food_id'=>$item , 'order_id'=>$newID,'quantity'=>+1]);
        Session::push('item',$item);
        // return session::get('item');
        return redirect()->back();
    }
    public function createOrder(Request $req,$id){
        $table = Session::get('table');
        $items = Session::get('item');
        $amount = count(Session::get('item'));
        $totalprice=0;
        foreach($items as $i){
         $itemm  = DB::table('food')->where('id', $i)->first();
         $price = $itemm->price;
         $totalprice = $totalprice + $price;
        }
        $newID = DB::table('order')->insertGetId(['total_price' => $totalprice , 'status'=>1 , 'amount' => $amount,'table_id'=>$id]);
        $newItem = array_count_values($items);
        $itemss = array_unique($items);
        foreach($itemss as $i){
            DB::table('orderDetail')->insert(['food_id'=>$i , 'order_id'=>$newID,'quantity'=>$newItem[$i],'status'=>0]);
        }
        DB::table('table')->where('id',$id)->update(['status' => 1]);
        return redirect()->back();
    }
    public function indexOrder(Request $req, $id)
    {
       $order = DB::table('order')
        ->where('table_id',$id)
        ->where('status',1)
        ->first();

        $detail = DB::table('orderdetail')
        ->where('order_id',$order->id)
        ->join('food','orderdetail.food_id','food.id')
        ->get();

        return view('orderlist', ['id' => $id ,'order'=>$detail,'order_id'=>$order->id]);
    }
    public function checkoutOrder(Request $req,$id,$orderid){
        $order = DB::table('order')
        ->where('id',$orderid)
        ->where('status',1)
        ->first();
        DB::table('bill')->insert(['amount'=>$order->amount, 'order_id'=>$order->id,'user_id'=>NULL,'paymentMethod_id'=>1 ,'status'=>1]);
        Session::flush();
        return redirect()->back();
    }
}
