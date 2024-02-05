<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditorController extends Controller
{
    public function index(){
        return view('Editor.dashboard');
    }

    public function login_from(){
        return view('Editor.login');
    }

    public function login(Request $request){

        $input = $request->all();
        // dd($input);
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required|min:6'
        ]);
        if(Auth::guard('editor')->attempt(['email' => $input['email'], 'password' => $input['password']])){
            return view('Editor.dashboard');
        }else{
            return redirect()->back()->with('error','Username or Password Ivalid');
        }
    }

    public function logout(){
        Auth::guard('editor')->logout();
        return redirect('/editor/login');
    }
}
