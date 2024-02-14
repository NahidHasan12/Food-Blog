<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Editor;
use App\Models\Post;
use Illuminate\Http\Request;

class Admin_editorController extends Controller
{
    public function add_editor(){
        $editor = Editor::all();
        $search_editor = Editor::all();
        return view('backend.Editor.add_editor', compact('editor','search_editor'));
    }

    public function search_employe(Request $request){
        $editor = Editor::where('id', $request->search_employe)->get();
        if($editor->isNotEmpty()){
            $search_editor = Editor::all();
        }else{
            $editor = Editor::all();
            $search_editor = Editor::all();
        }
        return view('backend.Editor.add_editor', compact('editor','search_editor'));
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
            'password' => bcrypt($request->password),
            'show_password' => $request->password,
            'image' => $image,
            'login_at' => now(),
        ]);
        if($editor){
            return redirect()->back()->with('success','Editor Created');
        }else{
            return redirect()->back()->with('error','Something Error');
        }
    }

    public function edit_editor($id){
        // dd($id);
        $editor_data = Editor::findOrFail($id);
        return view('backend.Editor.edit', compact('editor_data'));
    }

    public function update_editor(Request $request, $id){
        $editor = Editor::findOrFail($id);

        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required','email',
            'password' => 'required|min:6'
        ]);
        // dd($request->all());
        if($request->hasFile('image')){
            $image = $this->file_update($request->file('image'),'backend/editor/',$editor->image);
        }else{
            $image = $editor->image;
        }

        $data=$editor->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'show_password' => $request->password,
            'image' => $image,
            'login_at' => now(),
        ]);
        if($data){
            return redirect()->back()->with('success','Editor Updated');
        }else{
            return redirect()->back()->with('error','Something Error');
        }
    }

    public function delete_editor($id){
        $editor = Editor::findOrFail($id)->first();
        // dd($editor->image);
        if (file_exists('backend/editor/' . $editor->image)) {
            if (!unlink('backend/editor/' . $editor->image)) {
                return redirect()->back()->with('error', 'Failed to delete post image');
            }
        }
        $editor->delete();
        if($editor){
            return redirect()->back()->with('success','Editor Deleted');
        }else{
            return redirect()->back()->with('error','Something Error');
        }
    }

    // Editor Activities
    public function editor_activities(){
        $editor = Editor::all();
        return view('backend.Editor.editor_activities', compact('editor'));
    }
    public function editor_post($id){
        $post = Post::where('user_id', $id)->get();
        $count_post = Post::where('user_id', $id)->count();
        return view('backend.Editor.editor_post', compact('post','count_post'));
    }
}
