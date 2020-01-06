<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

class indexController extends Controller
{
    public function indexCashier()
    {
        $order = DB::table('order')
            ->join('table', 'table.id', 'order.table_Id')
            ->where('order.status', 1)
            ->select('table.*', 'order.*')
            ->get();
        $orderb = DB::table('order')
            ->join('table', 'table.id', 'order.table_Id')
            ->where('order.status', 0)
            ->select('table.*', 'order.*')
            ->get();
        return view('cashier.indexCashier', ['order' => $order,'orderb'=>$orderb]);
    }
    public function indexWaiter()
    {
        $order = DB::table('order')
            ->join('table', 'table.id', 'order.table_Id')
            ->where('order.status', 1)
            ->select('order.id as order_id', 'order.*', 'table.*')
            ->get();
        // return $order;
        return view('waiter.indexWaiter', ['order' => $order]);
    }
    public function indexKitchen()
    {
        $order = DB::table('orderDetail')
            ->leftjoin('order', 'orderDetail.order_id', 'order.id')
            ->leftjoin('food', 'orderDetail.food_id', 'food.id')
            ->join('table', 'table.id', 'order.table_Id')
            ->where('orderdetail.status', '!=', 1)
            ->select('order.id as order_id', 'order.*', 'table.*', 'orderDetail.*', 'food.name', 'food.price')

            ->get();
        $food = DB::table('food')
            ->get();
        // return $order;
        return view('kitchen.indexKitchen', ['order' => $order, 'food' => $food]);
    }
    public function detailOrder(Request $req, $id)
    {
        $orderDetail = DB::table('orderdetail')
            ->where('orderdetail.order_id', $id)
            ->join('food', 'orderdetail.food_id', 'food.id')
            ->select('food.*', 'orderdetail.*')
            ->get();
        // return $orderDetail;
        return view('waiter.detailWaiter', ['order' => $orderDetail]);
    }
    public function antarOrder(Request $req, $id)
    {
        DB::table('orderdetail')->where('id', $id)->update(['status' => 1]);
        return back();
    }
}
