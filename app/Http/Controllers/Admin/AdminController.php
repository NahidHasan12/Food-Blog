<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login_from(){
        return view('Admin.login');
    }
    public function login(Request $request){
        $input =$request->all();
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required|min:6'
        ]);
        if(Auth::guard('admin')->attempt(['email' => $input['email'], 'password' => $input['password']])){
            return redirect('/admin');
        }else{
            return redirect()->back()->with('error','Username or Password Ivalid');
        }
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
