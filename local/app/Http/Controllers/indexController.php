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
        $payment = DB::table('paymentmethod')->get();
        return view('cashier.indexCashier', ['order' => $order,'orderb'=>$orderb ,'payment' =>$payment]);
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

}
