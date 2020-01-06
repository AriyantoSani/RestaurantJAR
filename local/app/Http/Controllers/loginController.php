<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

class loginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $req)
    {
        // return $req;
        $username = $req->username;
        $password = $req->pass;

        $data = DB::table('user')->where('username', $username)->first();
        $role = DB::table('role')->where('id', $data->role_id)->first();
        // return $data->username;
        if ($data) { //apakah email tersebut ada atau tidak
            if (md5($password) == $data->password) {

                Session::put('id', $data->id);
                Session::put('username', $data->username);
                Session::put('first_name', $data->first_name);
                Session::put('last_name', $data->last_name);
                Session::put('email', $data->email);
                Session::put('phone_number', $data->phone_number);
                Session::put('role', $role->name);
                Session::put('login', TRUE);
                $jabatan = $role->name;
                if ($jabatan == "Kitchen") {
                    return redirect('homeKitchen');
                } else      if ($jabatan == "Admin") {
                    return redirect('homeAdmin');
                } else      if ($jabatan == "Waiter") {
                    return redirect('homeWaiter');
                }
                else      if ($jabatan == "Cashier") {
                    return redirect('homeCashier');
                }
            } else {
                return redirect('login')->with('alert', 'Password atau Email, Salah !');
            }
        } else {
            return redirect('login')->with('alert', 'Password atau Email, Salah!');
        }
    }
    public function logout()
    {
        session()->forget(['username', 'first_name', 'last_name', 'email', 'phone_number', 'role', 'login']);
        session()->flush();
        return redirect('login');
    }
}
