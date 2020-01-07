<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Session;

class menupageController extends Controller
{
    public function index(Request $req, $id)
    {
        Session::put('table', $id);
        $category = DB::table('foodcategory')->get();
        $food = DB::table('food')->where('status', 1)->paginate(12);

        $table = DB::table('table')
            ->where('id', $id)
            ->first();

        $s = Session::get('item');
        $array = array();
        if ($s != null) {
            foreach ($s as $i) {
                $foods = DB::table('food')->where('id', $i)->first();
                array_push($array, $foods->name);
            }
        }
        $status = $table->status;
        return view('menu', ['id' => $id, 'category' => $category, 'food' => $food, 'status' => $status, 'cart' => $array]);

    }
    public function buy(Request $req, $id, $item)
    {
        // $food = DB::table('food')->where('id', $item)->first();
        // $foodname = $food->name;
        // $foodprice = $food->price;
        // $newID = DB::table('order')->insertGetId(['total_price' => $foodprice , 'status'=>1 , 'amount' => $foodprice,'table_id'=>$id]);
        // DB::table('orderDetail')->insert(['food_id'=>$item , 'order_id'=>$newID,'quantity'=>+1]);
        Session::push('item', $item);
        // return session::get('item');
        return redirect()->back();
    }
    public function createOrder(Request $req, $id)
    {
        $table = Session::get('table');
        $items = Session::get('item');
        $amount = count(Session::get('item'));
        $totalprice = 0;
        foreach ($items as $i) {
            $itemm = DB::table('food')->where('id', $i)->first();
            $price = $itemm->price;
            $totalprice = $totalprice + $price;
        }
        $newID = DB::table('order')->insertGetId(['total_price' => $totalprice, 'status' => 1, 'amount' => $amount, 'table_id' => $id]);
        $newItem = array_count_values($items);
        $itemss = array_unique($items);
        foreach ($itemss as $i) {
            DB::table('orderDetail')->insert(['food_id' => $i, 'order_id' => $newID, 'quantity' => $newItem[$i], 'status' => 0]);
        }
        DB::table('table')->where('id', $id)->update(['status' => 1]);
        Session::flush();
        return redirect()->back();
    }
    public function indexOrder(Request $req, $id)
    {
        $order = DB::table('order')
            ->where('table_id', $id)
            ->where('status', 1)
            ->first();
        $detail = DB::table('orderdetail')
            ->where('order_id', $order->id)
            ->join('food', 'orderdetail.food_id', 'food.id')
            ->where('orderdetail.status', '!=', 2)
            ->get();

        return view('orderlist', ['id' => $id, 'order' => $detail, 'order_id' => $order->id]);
    }
    public function checkoutOrder(Request $req, $id, $orderid)
    {
        $order = DB::table('order')
            ->where('id', $orderid)
            ->where('status', 1)
            ->first();
        DB::table('bill')->insert(['amount' => $order->amount, 'order_id' => $order->id, 'user_id' => null, 'paymentMethod_id' => 1, 'status' => 1]);
        Session::flush();
        return redirect()->back();
    }
    public function updateOrder(Request $req, $id)
    {
        $order = DB::table('order')->where('table_id', $id)->where('status', 1)->first();
        $items = Session::get('item');
        $amount = count(Session::get('item')) + $order->amount;
        $totalprice = $order->total_price;
        foreach ($items as $i) {
            $itemm = DB::table('food')->where('id', $i)->first();
            $price = $itemm->price;
            $totalprice = $totalprice + $price;
        }
        $newItem = array_count_values($items);
        $itemss = array_unique($items);
        foreach ($itemss as $i) {
            DB::table('orderDetail')->insert(['food_id' => $i, 'order_id' => $order->id, 'quantity' => $newItem[$i], 'status' => 0]);
        }
        DB::table('order')->where('table_id', $id)->where('status', 1)->update(['amount' => $amount, 'total_price' => $totalprice]);
        Session::flush();
        return redirect()->back();
    }
    public function filterindex(Request $req, $id, $category)
    {

        Session::put('table', $id);
        $cat = DB::table('foodcategory')->get();
        $food = DB::table('food')
            ->where('status', 1)
            ->where('food_category_id', $category)
            ->paginate(12);

        $table = DB::table('table')
            ->where('id', $id)
            ->first();

        $s = Session::get('item');
        $array = array();
        if ($s != null) {
            foreach ($s as $i) {
                $foods = DB::table('food')->where('id', $i)->first();
                array_push($array, $foods->name);
            }
        }
        $status = $table->status;
        return view('menu', ['id' => $id, 'category' => $cat, 'food' => $food, 'status' => $status, 'cart' => $array]);
    }
}
