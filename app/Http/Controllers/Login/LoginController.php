<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Model\UserModel;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    //登录
    public function login(){
        return view("login.login");
    }
    //登录执行
    public function logindo(Request $request){
        $name=request()->name;
        $pwd=request()->pwd;
        $where=UserModel::where("name",$name)->first();
        if($pwd!=$where['pwd']){
            return redirect("login/login")->with("msg","用户或密码错误");
        }
        if($where){
            session(['res'=>$where]);
            return redirect("user/index");
        }else{
            return redirect("login/login")->with("msg","用户或密码错误");
        }

    }
}
