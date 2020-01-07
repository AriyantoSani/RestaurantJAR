<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

class adminController extends Controller
{
    public function index(Request $request)
    {
        $dataOrder = DB::table('table')
                    ->join('order', 'order.table_id', '=', 'table.id' )
                    // ->where('order.order_date','=', $request->post('waktu',''))
                    ->get();
        // $datagraph= DB::select('
        // select count(*) from order WHERE order_date >= '.$request->post('tglawal','0-0-0').' AND order_date <= '.$request->post('tglakhir','0-0-0').'GROUP BY  DATEPART(DAY, Timestamp) ');
        
        return view('admin.transaction')
            //  ->with('datagraph', $datagraph)
            ->with('dataOrder', $dataOrder);
    }
    public function indexAccount()
    {
        $dataUser = DB::table('role')
                        ->join('User', 'user.role_id', '=', 'role.id' )
                        ->get();
        $dataRole = DB::table('role')
                    ->get();
        return view('admin.account')
            ->with('dataRole', $dataRole)
            ->with('dataUser', $dataUser);
    }
    public function indexMenuMaster()
    {
        $dataMenu = DB::table('foodcategory')
                        ->join('food', 'food_category_id', '=', 'foodcategory.id' )
                        ->get();
        $dataCatFood = DB::table('foodcategory')
                    ->get();
        return view('admin.menuMaster')
            ->with('dataMenu', $dataMenu)
            ->with('dataCatFood', $dataCatFood);
    }
    public function insertAccount(Request $req)
  {
        
        // dd($req->input('namaPertemuan'));
        $firstName = $req->input('FirstName');
        $lastName= $req->input('LastName');
        $username= $req->input('Username');
        $password= $req->input('Password');
        $email= $req->input('Email');
        $phone= $req->input('Phone');
        $role= $req->input('Role');
        $account = DB::table('user')->insert([
          'first_name' => $firstName, 
          'last_name' => $lastName, 
          'username' => $username,
          'password' => md5($password),
          'email' => $email,
          'phone_number' => $phone,
          'role_id' => $role
        ]);

        if($account){

          $req->session()->flash('message', 'Berhasil menambahkan Account');
        } else{
          $req->session()->flash('error','Account Tidak Berhasil Ditambahkan');
        }return redirect()->back() ;
  }
  public function deleteAccount($id)
  {
    echo $id;
    DB::delete('delete from user where id = ?',[$id]);
    return redirect()->back() ;
  }

  public function editnamadepan(Request $req,$id)
  {
    DB::table('user')
        ->where('id', $id)
        ->update(['first_name' => $req->value]);
    return redirect()->back() ;
  }

  public function editnamabelakang(Request $req,$id)
  {
    DB::table('user')
        ->where('id', $id)
        ->update(['last_name' => $req->value]);
    return redirect()->back() ;
  }  
  
  public function editusername(Request $req,$id)
  {
    DB::table('user')
        ->where('id', $id)
        ->update(['username' => $req->value]);
    return redirect()->back() ;
  }  
  
  public function editpassword(Request $req,$id)
  {
    DB::table('user')
        ->where('id', $id)
        ->update(['password' => $req->value]);
    return redirect()->back() ;
  }  
  
  public function editemail(Request $req,$id)
  {
    DB::table('user')
        ->where('id', $id)
        ->update(['email' => $req->value]);
    return redirect()->back() ;
  }  
  
  public function editphone(Request $req,$id)
  {
    DB::table('user')
        ->where('id', $id)
        ->update(['phone_number' => $req->value]);
    return redirect()->back() ;
  }  
  
  public function editrole(Request $req,$id)
  {
    DB::table('user')
        ->where('id', $id)
        ->update(['role_id' => $req->value]);
    return redirect()->back() ;
  }  

  ///--------------------------------------

  public function insertMenuMaster(Request $req)
  {
        
        // dd($req->input('namaPertemuan'));
        $name = $req->input('Name');
        $price = $req->input('Price');
        $status = $req->input('Status');
        $link= $req->input('Link');
        $desc= $req->input('Description');
        $catfood= $req->input('Food_Category');

        $menumaster = DB::table('food')->insert([
          'name' => $name, 
          'price' => $price, 
          'status' => $status,
          'link' => $link,
          'description' => $desc,
          'food_category_id' => $catfood
        ]);

        if($menumaster){

          $req->session()->flash('message', 'Berhasil menambahkan Account');
        } else{
          $req->session()->flash('error','Account Tidak Berhasil Ditambahkan');
        }return redirect()->back() ;
  }
  public function deleteMenuMaster
  ($id)
  {
    echo $id;
    DB::delete('delete from food where id = ?',[$id]);
    return redirect()->back() ;
  }

  public function editnamamenu(Request $req,$id)
  {
    DB::table('food')
        ->where('id', $id)
        ->update(['name' => $req->value]);
    return redirect()->back() ;
  }

  public function editprice(Request $req,$id)
  {
    DB::table('food')
        ->where('id', $id)
        ->update(['price' => $req->value]);
    return redirect()->back() ;
  }  
  
  public function editstatus(Request $req,$id)
  {
    DB::table('food')
        ->where('id', $id)
        ->update(['status' => $req->value]);
    return redirect()->back() ;
  }  
  
  public function editlink(Request $req,$id)
  {
    DB::table('food')
        ->where('id', $id)
        ->update(['link' => $req->value]);
    return redirect()->back() ;
  }  
  
  public function editdescription(Request $req,$id)
  {
    DB::table('food')
        ->where('id', $id)
        ->update(['description' => $req->value]);
    return redirect()->back() ;
  }  
  
  public function editFoodCat(Request $req,$id)
  {
    DB::table('food')
        ->where('id', $id)
        ->update(['food_category_id' => $req->value]);
    return redirect()->back() ;
  }  

}
