<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class xulilogin extends Controller
{
    public function login1(){
    	return view('login');
    }
    // xử lí đăng nhập
    public function postlogin(Request $request){
    	$username = $request['username'];
    	$password = $request['password'];
    	$notification = 'Đăng Nhập thất bại';
    }
    //kiểm tra đăng nhập


}
