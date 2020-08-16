<?php

namespace App\Http\Controllers\Admin;

use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class LoginController extends BaseController
{
    public function login(){
        return view('admin.login');
    }
    public function logins(Request $request){
        $user_name=$request->input('user_name');
        $user_pwd=$request->input('user_pwd');
        
    }
}
