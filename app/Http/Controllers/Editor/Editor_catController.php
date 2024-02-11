<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class Editor_catController extends Controller
{
    public function index(){
        $category = Category::all();
        $search_category = Category::all();
        return view('Editor.pages.category', compact('category','search_category'));
    }
}
