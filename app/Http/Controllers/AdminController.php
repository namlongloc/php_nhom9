<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function index(){
        return view('admin_login');
    }
    public function chaomung(){
        return view('admin.chaomung');
    }
    public function chaomungxl(Request $request){
        $emailad= $request->tendn;
        $matkhauad=$request->matkhau;
        $result = DB::table('admin')->where ('emailad', $emailad)->where('matkhauad', $matkhauad)->first();
        if($result){
            Session::put('tenad',$result->tenad);
            Session::put('emailad',$result->emailad);
            return Redirect::to('/chaomung');
        }
        else{
            Session::put('message','Mật khẩu hoặc tài khoản không đúng');
            return Redirect::to('/admin');
        }
    }
    public function logout(){
        Session::put('tenad',null);
        Session::put('emailad',null);
        return Redirect::to('/admin');
    }
}