<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $total_post = Post::all()->count();
        $total_category = Category::all()->count();
        return view('backend.pages.dashboard',compact('total_post','total_category'));
    }
}
