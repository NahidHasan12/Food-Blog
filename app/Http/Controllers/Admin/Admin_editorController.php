<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Editor;
use Illuminate\Http\Request;

class Admin_editorController extends Controller
{
    public function add_editor(){
        $editor = Editor::all();
        return view('backend.Editor.add_editor', compact('editor'));
    }

    public function store_editor(Request $request){
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required','email',
            'password' => 'required|min:6'
        ]);
        // dd($request->all());
        $image = $this->file_upload($request->file('image'),'backend/editor');

        $editor=Editor::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'slug' => 'ed'.uniqid(4),
            'email' => $request->email,
            'password' => bcrypt($request->Password),
            'show_password' => $request->password,
            'image' => $image,
            'login_at' => date('Y-m-d H:i:s'),
        ]);
        if($editor){
            return redirect()->back()->with('success','Editor Created');
        }else{
            return redirect()->back()->with('error','Something Error');
        }
    }
}
