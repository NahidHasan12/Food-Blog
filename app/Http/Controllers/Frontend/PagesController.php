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
        return view('frontend.pages.home', compact('slider','recent','all'));
    }
    public function about(){
        return view('frontend.pages.about');
    }
    public function contact(){
        return view('frontend.pages.contact');
    }
    public function diet_food(){
        return view('frontend.pages.dietfood');
    }
    public function fast_food(){
        return view('frontend.pages.fastfood');
    }
    public function biriany(){
        return view('frontend.pages.biriany');
    }
}
