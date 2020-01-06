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
        ->join('table','table.id','order.table_Id')
        ->where('order.status',1)
        ->get();
        return view('cashier.indexCashier' ,['order'=>$order]);
    }
    public function indexWaiter()
    {
        $order = DB::table('order')
        ->join('table','table.id','order.table_Id')
        ->where('order.status',1)
        ->select('order.id as order_id','order.*','table.*')
        ->get();
        // return $order;
        return view('waiter.indexWaiter' ,['order'=>$order]);
    }
public function detailOrder(Request $req , $id){
$orderDetail = DB::table('orderdetail')
->where('orderdetail.order_id',$id)
->join('food','orderdetail.food_id','food.id')
->select('food.*','orderdetail.*')
->get();
// return $orderDetail;
return view('waiter.detailWaiter' ,['order'=>$orderDetail]);
}
public function antarOrder(Request $req,$id){
DB::table('orderdetail')->where('id',$id)->update(['status'=>1]);
return back();
}
}
