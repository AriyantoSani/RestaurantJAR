<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

class foodController extends Controller
{
    public function detailOrder(Request $req, $id)
    {
        $orderDetail = DB::table('orderdetail')
            ->where('orderdetail.order_id', $id)

            ->where('orderdetail.status', '!=', 2)
            ->join('food', 'orderdetail.food_id', 'food.id')
            ->select('food.*', 'orderdetail.*')
            ->get();
        // return $orderDetail;
        return view('waiter.detailWaiter', ['order' => $orderDetail]);
    }
    public function detailOrderCashier(Request $req, $id)
    {
        $orderDetail = DB::table('orderdetail')
            ->where('orderdetail.order_id', $id)
            ->join('food', 'orderdetail.food_id', 'food.id')
            ->select('food.*', 'orderdetail.*')
            ->get();
        // return $orderDetail;
        return view('cashier.detailCashier', ['order' => $orderDetail]);
    }
    public function antarOrder(Request $req, $id)
    {
        DB::table('orderdetail')->where('id', $id)->update(['status' => 1]);
        return back();
    }
    public function changeStock(Request $req, $id)
    {
        $food = DB::table('food')->where('id', $id)->first();
        $status = $food->status;
        if ($status == 0) {
            DB::table('food')->where('id', $id)->update(['status' => 1]);
        } else {
            DB::table('food')->where('id', $id)->update(['status' => 0]);
        }

        return redirect()->back();
    }
    public function checkout(Request $req, $order_id)
    {
        $order = DB::table('order')->where('id', $order_id)->first();
        $id = $order->table_id;
        $bill = DB::table('bill')->where('bill.order_id', $order_id)->update(['user_id' => $id, 'status' => 0]);
        DB::table('order')->where('id', $order_id)->update(['status' => 0]);
        DB::table('table')->where('id', $id)->update(['status' => 0]);
        return redirect()->back();
    }
    public function printorderCashier(Request $req, $id)
    {
        $orderDetail = DB::table('orderdetail')
            ->where('orderdetail.order_id', $id)
            ->join('food', 'orderdetail.food_id', 'food.id')
            ->select('food.*', 'orderdetail.*')
            ->get();
        // return $orderDetail;
        return view('cashier.printCashier', ['order' => $orderDetail]);
    }
    public function checkoutOrder(Request $req)
    {
        $user = session::get('id');
        $orderid = $req->order_id;
        $pembayaran = $req->pembayaran;
        $order = DB::table('order')
            ->where('id', $orderid)
            ->where('status', 1)
            ->first();
        DB::table('bill')->insert(['amount' => $order->amount, 'order_id' => $orderid, 'user_id' => $user, 'paymentMethod_id' => $pembayaran]);
        DB::table('order')->where('id', $orderid)->update(['status' => 0]);
        $order = DB::table('order')->where('id', $orderid)->first();
        $id = $order->table_id;
        DB::table('table')->where('id', $id)->update(['status' => 0]);
        return redirect()->back();
    }
    public function splitOrder(Request $req, $id)
    {
        $orderDetail = DB::table('orderdetail')
            ->where('orderdetail.order_id', $id)
            ->where('orderdetail.status', '!=', 2)
            ->join('food', 'orderdetail.food_id', 'food.id')
            ->select('food.*', 'orderdetail.*', 'food.id AS foodid')
            ->get();
        // return $orderDetail;
        return view('waiter.splitWaiter', ['order' => $orderDetail, 'id' => $id]);
    }
    public function splitOrderAction(Request $req, $id)
    {
        $split = $req->split;

        $order = DB::table('order')->where('order.id', $id)->leftjoin('orderdetail', 'order.id', 'orderdetail.order_id')->first();
        $total = 0;
        $totalq = 0;
        foreach ($split as $s) {
            $orders = DB::table('orderdetail')->join('food', 'orderdetail.food_id', 'food.id')->where('orderdetail.id', $s)->first();
            // DB::table('orderdetail')->where('orderdetail.id', $s)->update('status',2);
            $total = $total + $orders->price * $orders->quantity;
            $totalq = $totalq + $orders->quantity;
        }
        $newOrder = DB::table('order')->insertGetId(['total_price' => $total, 'amount' => $totalq, 'status' => 0, 'table_id' => $order->table_id]);
        $totalprice = $order->total_price - $total;
        $totalamount = $order->amount - $totalq;
        DB::table('order')->where('order.id', $id)->update(['total_price' => $totalprice, 'amount' => $totalamount]);
        foreach ($split as $s) {
            $orders = DB::table('orderdetail')->join('food', 'orderdetail.food_id', 'food.id')->where('orderdetail.id', $s)->select('food.*', 'orderdetail.*')->first();
            DB::table('orderdetail')->insert(['order_id' => $newOrder, 'status' => $orders->status, 'food_id' => $orders->food_id, 'quantity' => $orders->quantity]);
            DB::table('orderdetail')->where('orderdetail.id', $s)->update(['status' => 2]);
        }
        $user = session::get('id');
        $orderid = $newOrder;
        // $pembayaran = $req->pembayaran;
        $order = DB::table('order')
            ->where('id', $orderid)
            ->first();
        $a = $order->amount;
        DB::table('bill')->insert(['amount' => $a, 'order_id' => $orderid, 'user_id' => $user, 'paymentMethod_id' => 1]);
        // DB::table('order')->where('id', $id)->update(['status' => 2]);
        return redirect()->back();
    }
}
