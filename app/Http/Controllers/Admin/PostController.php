<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
        return view('backend.post.post');
    }

    // store
    public function post_store(PostRequest $request){
        $image = $this->file_upload($request->file('image'),'backend/post_img');
        $post = Post::create([
            'user_id'=>Auth::user()->id,
            'category_id'=>$request->category,
            'title'=>$request->title,
            'details'=>$request->details,
            'slug'=>rand(),
            'status'=>$request->status,
            'image'=>$image,
        ]);
        if($post){
            return redirect()->back()->with('success','Post has Been Saved');
        }else{
            return redirect()->back()->with('error','Something Error');
        }
    }


}
