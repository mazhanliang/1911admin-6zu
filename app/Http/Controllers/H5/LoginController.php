<?php

namespace App\Http\Controllers\H5;


use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Model\Users;

class LoginController extends BaseController
{
    public function login(){
        return view('admin.login');
    }
    public function logins(Request $request){
        $user_name=$request->input('user_name');
        $user_pwd=$request->input('user_pwd');
        $name=Users::where(['users_name'=>$user_name],['users_pwd'=>$user_pwd])->first();
        if($name){
            echo '登陆成功！';
        }else{
            echo '登陆失败!';
        }

    }
}
