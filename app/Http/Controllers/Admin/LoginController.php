<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Model\Users;

class LoginController extends BaseController
{
    public function login(){
        return view('admin.login');
    }
    public function logins(Request $request){
        $user_name=$request->input('user_name');
        $user_pwd=$request->input('user_pwd');
        $name=Users::where(['users_name'=>$user_name,'user_pwd'=>$user_pwd])->first();
        if($name){
            //echo '登陆成功！';
            return view('admin.list');
        }else{
            return view('admin.login');
        }

    }
    public function ajaxlogin(Request $request){
        $user_name=$request->input('user_name');
        $user_pwd=$request->input('user_pwd');
        $name=Users::where(['users_name'=>$user_name,'user_pwd'=>$user_pwd])->first();
        if($name){
            //echo '登陆成功！';
            echo 0;
        }else{
            echo 1;
        }

    }
    public function list(){
        return view('admin.list');
    }
    public function register(){
        return view('admin.register');
    }
    public function adminreg(){
        return view('admin.adminreg');
    }
}
