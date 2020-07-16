<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\UserModel;
class RegisterController extends Controller
{
    //注册
    public function register(){
        return view("register.register");
    }
    //注册执行
    public function registerdo(Request $request){

        $name=request()->name;
        $pwd=request()->pwd;
        $key=md5($name.$pwd.time());
        $key=substr($key,2,16);

        $appid=uniqid();

//        var_dump($accid);die;
        $request->validate([
            "name"=>"required|unique:user",
            "pwd"=>"required|max:6"
        ],[
            "name.required"=>"手机号或邮箱必填",
            "name.unique"=>"手机号或改邮箱已有",
            "pwd.required"=>"密码必填",
            "pwd.max"=>"密码最少6位"
        ]);
        $data=[
            "name"=>$name,
            "pwd"=>$pwd,
            "key"=>$key,
            "appid"=>$appid
        ];
        $res=UserModel::insert($data);
        if($res){
            return redirect("login/login");
        }else{
            return redirect("register/register");
        }
    }
}
