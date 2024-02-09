<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Editor;
use App\Models\Super_admin;
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

    public function change_password(){
        $admin = Super_admin::first();
        return view('backend.Admin.change_password', compact('admin'));
    }

    public function forget_password(Request $request, $id){
        $admin = Super_admin::findOrFail($id);
        // dd($request->password);
        $this->validate($request,[
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required'],
            'password' => ['required','min:6', 'max:9'],
        ]);
        // dd($request->all());
        if($request->hasFile('image')){
            $image = $this->file_update($request->file('image'),'backend/admin_img/',$admin->image);
        }else{
            $image = $admin->image;
        }
        $data = $admin->update([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'view_password'=>$request->password,
            'image'=>$image,
            'login_at' => now()
        ]);

        if($data){
            return redirect()->back()->with('success','Admin Updated');
        }else{
            return redirect()->back()->with('error','Something Error');
        }
    }
}
