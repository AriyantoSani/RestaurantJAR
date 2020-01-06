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
    public function changeStock(Request $req,$id){
        $food = DB::table('food')->where('id',$id)->first();
        $status = $food->status;
        if($status ==0){
            DB::table('food')->where('id',$id)->update(['status'=>1]);
        }
        else{
            DB::table('food')->where('id',$id)->update(['status'=>0]);
        }
        return redirect()->back();
    }
}
