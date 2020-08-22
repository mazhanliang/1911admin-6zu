<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Model\Users;
use App\Model\Classify;

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
    public function classify(){
        return view('admin.classify');
    }
    public function ajaxclassify(Request $request){
        $classify_name=$request->input('classify_name');
        $classify_show=$request->input('classify_show');
        $name=Classify::where(['classify_name'=>$classify_name])->first();
        if($name){
            echo 102;exit;
        }
        $where=[
            'classify_name'=>$classify_name,
            'classify_show'=>$classify_show
            ];
        $str=Classify::insert($where);
        if($str){
            echo 100;
        }else{
            echo 101;
        }
    }
    public function classifylist(){
        $arr=Classify::where(['classify_show'=>'1'])->get();
        return view('admin.classifylist',['arr'=>$arr]);
    }
    public function classifydel(Request $request){
        $id=$request->input('id');
        $t=Classify::where(['id'=>$id])->delete();
        if($t){
            echo 1;
        }else{
            echo 0;
        }
    }
    public function classifyupdate($id){
        $arr=Classify::where(['id'=>$id])->first();
        return view('admin.classifyupdate',['arr'=>$arr]);
    }
    public function ajaxclassifyupdate(Request $request){
        $id=$request->input('id');
        $classify_name=$request->input('classify_name');
        $classify_show=$request->input('classify_show');
        $r=Classify::where(['id'=>$id])->update(['classify_name'=>$classify_name,'classify_show'=>$classify_show]);
        if($r){
            echo 100;
        }else{
            echo 101;
        }
    }
}
