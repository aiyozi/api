<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //个人中心
    public function index(){
        $res=session("res");
        return view("user.index",['res'=>$res]);
    }
	public function lan(){
		echo "我爱吃大米";
	}

}
