<?php

namespace App\Http\Controllers\Editor;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\PostRequest;
use App\Http\Requests\Editor\editor_postRequest;

class Editor_postController extends Controller
{
    public function index(){
        $category = Category::all();
        $search_post = Post::where('user_id',Auth::guard('editor')->user()->id)->get();
        $post = Post::where('user_id',Auth::guard('editor')->user()->id)->get();
        return view('Editor.Post.post',compact('post','search_post','category'));
    }

    //Search Post
    public function search_post(Request $request){
        $post = Post::where('user_id',Auth::guard('editor')->user()->id)->where('id', $request->post_search)->get();
        if($post->isNotEmpty()){
            $category = Category::all();
            $search_post = Post::where('user_id',Auth::guard('editor')->user()->id)->get();
        }else{
            $category = Category::all();
            $search_post = Post::where('user_id',Auth::guard('editor')->user()->id)->get();
            $post = Post::where('user_id',Auth::guard('editor')->user()->id)->get();
        }

        return view('Editor.Post.post', compact('post','search_post','category'));
    }

    //Search Category Wise Post
    public function cat_wise_post(Request $request){
        $post = Post::where('user_id',Auth::guard('editor')->user()->id)->where('category_id', $request->cat_wise_post)->get();
        if($post->isNotEmpty()){
            $category = Category::all();
            $search_post = Post::where('user_id',Auth::guard('editor')->user()->id)->get();
        }else{
            $category = Category::all();
            $search_post = Post::where('user_id',Auth::guard('editor')->user()->id)->get();
            $post = Post::where('user_id',Auth::guard('editor')->user()->id)->get();
        }
        return view('Editor.Post.post', compact('post','category','search_post'));
    }

    public function post_store(editor_postRequest $request){
        // dd($request->all());
        $image = $this->file_upload($request->file('image'),'backend/post_img');
        $post = Post::create([
            'user_id'=>Auth::guard('editor')->user()->id,
            'category_id'=>$request->category,
            'title'=>$request->title,
            'details'=>$request->details,
            'slug'=>uniqid(),
            'status'=>$request->status,
            'image'=>$image,
        ]);
        if($post){
            return redirect()->back()->with('success','Post has Been Saved');
        }else{
            return redirect()->back()->with('error','Something Error');
        }
    }

    public function post_edit($id){
        $post = Post::findOrFail($id);
        $cat = Category::all();
        return view('Editor.Post.edit', compact('post','cat'));
    }

    public function post_update(Request $request, $id){
        // dd($request->all());
        $post = Post::findOrFail($id);

        $this->validate($request,[
            'title' => ['required', 'max:50', 'min:10'],
            'details' => ['required', 'max:3000', 'min:300'],
            'category' => ['required'],
            'status' => ['required','max:1'],
        ]);

        if($request->hasFile('image')){
            $image = $this->file_update($request->file('image'),'backend/post_img/',$post->image);
        }else{
            $image = $post->image;
        }
        $data = $post->update([
            'category_id'=>$request->category,
            'title'=>$request->title,
            'details'=>$request->details,
            'status'=>$request->status,
            'image'=>$image,
        ]);

        if($data){
            return redirect()->back()->with('success','Post Has Been Updated');
        }else{
            return redirect()->back()->with('error', 'Something Error');
        }

    }

    public function post_view($id){
        $post = Post::findOrFail($id);
        return view('Editor.Post.view',compact('post'));
    }

}
