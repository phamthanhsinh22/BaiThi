<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class pages extends Controller
{
    function trangchu1(){
    	$query=DB::table("theloai");
    	$query=$query->orderBy("idTL");
    	$query=$query->select("*");
    	$data = $query->paginate(15);
    	return view('index', $data);
    }
}
