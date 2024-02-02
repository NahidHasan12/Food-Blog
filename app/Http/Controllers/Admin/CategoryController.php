<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::get();
        return view('backend.category.category', compact('category'));
    }

    public function category_store(CategoryRequest $request){
        $cat = Category::create([
            'name' => $request->name,
            'slug' =>Str::slug($request->name,'-'),
        ]);
        if($cat){
            return redirect()->back()->with('success','Category has Been Saved');
        }else{
            return redirect()->back()->with('error','Something Error');
        }
    }

    public function category_edit($id){
        $category = Category::findOrFail($id);
        return view('backend.category.edit', compact('category'));
    }

    public function category_update(CategoryRequest $request, $id){
        $data =  Category::findOrFail($id)->first();
        $cat = $data->update([
            'name' => $request->name,
            'slug' =>Str::slug($request->name,'-'),
        ]);
        if($cat){
            return redirect()->back()->with('success','Category has Been Update');
        }else{
            return redirect()->back()->with('error','Something Error');
        }
    }

    public function category_delete($id){
        $cat = Category::findOrFail($id)->first();
        $data = $cat->delete();

        if($data){
            return redirect()->back()->with('success','Category has Been Deleted');
        }else{
            return redirect()->back()->with('error','Something Error');
        }
    }
}
