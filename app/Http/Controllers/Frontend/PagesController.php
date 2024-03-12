<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $all = Post::latest()->limit(6)->get();
        $slider = Post::latest()->limit(3)->get();
        $recent = Post::latest()->limit(3)->get();
        $biriany = Post::where('category_id', '2')->latest()->limit(3)->get();
        $diet = Post::where('category_id', '3')->latest()->limit(3)->get();
        $fast = Post::where('category_id', '4')->latest()->limit(3)->get();
        return view('frontend.pages.home', compact('slider','recent','all','biriany','diet','fast'));
    }
    public function all_post(){
        $post = Post::all();
        return view('frontend.pages.all_post', compact('post'));
    }
    public function single($id){
        $post= Post::findOrFail($id);
        //dd($post);
        return view('frontend.pages.single', compact('post'));
    }
    public function about(){
        return view('frontend.pages.about');
    }
    public function contact(){
        return view('frontend.pages.contact');
    }
    public function diet_food(){
        $diet = Post::where('category_id', '3')->latest()->get();
        return view('frontend.pages.dietfood', compact('diet'));
    }
    public function fast_food(){
        $fast = Post::where('category_id', '4')->latest()->get();
        return view('frontend.pages.fastfood', compact('fast'));
    }
    public function biriany(){
        $biriany = Post::where('category_id', '2')->latest()->get();
        return view('frontend.pages.biriany', compact('biriany'));
    }
    public function privacy(){
        return view('frontend.pages.privacy');
    }
}
