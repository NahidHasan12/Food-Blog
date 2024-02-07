<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
        $category = Category::all();
        $post = Post::all();
        return view('backend.post.post', compact('category','post'));
    }

    // store
    public function post_store(PostRequest $request){
        $image = $this->file_upload($request->file('image'),'backend/post_img');
        $post = Post::create([
            'user_id'=>Auth::guard('admin')->user()->id,
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
        return view('backend.Post.edit', compact('post','cat'));
    }

    public function post_update(Request $request, $id){

        $post = Post::findOrFail($id);

        $this->validate($request,[
            'title' => ['required', 'max:50', 'min:10'],
            'details' => ['required', 'max:3000', 'min:300'],
            'category' => ['required'],
            'status' => ['required','max:1'],
        ]);

        if($request->hasFile('image')){
            $image = $this->file_update($request->file('image'),'backend/post_img',$post->image);
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


    public function post_delete($id){
        $post = Post::findOrFail($id);
        //dd($post->image);
        if (file_exists('backend/post_img/' . $post->image)) {
            if (!unlink('backend/post_img/' . $post->image)) {
                return redirect()->back()->with('error', 'Failed to delete post image');
            }
        }

        $post->delete();
        if($post){
            return redirect()->back()->with('success','Post has Been Deleted');
        }else{
            return redirect()->back()->with('error','Something Error');
        }
    }


}
