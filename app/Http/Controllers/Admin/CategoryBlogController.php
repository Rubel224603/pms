<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class CategoryBlogController extends Controller
{
    //

    public function createCategory(){
        return view("admin.category.create");
    }
    public function storeCategory(Request $request){
        //return $request;
        $category = new CategoryBlog();
        $category->name = $request->name;
        if( $request->slug){
            $category->slug = $request->slug;
               $category->slug ;
        }else {
            $category->slug = Str::slug($category->name);
               $category->slug;
        }
        $category->save();
        return back()->with("message","Blog Category Added Successfully");
    }
    public function listCategory(){
      $categories = CategoryBlog::latest()->get();
       
        return view('admin.category.list',compact("categories"));
    }
    public function editCategory($id)
    {
        $editCategory = CategoryBlog::find($id);
        return view('admin.category.edit',compact('editCategory'));
    }
    public function updateCategory(Request $request,$id){
        $category = CategoryBlog::find(1);
        return $category;
        $category->name = $request->name;
        if( $request->slug){
            $category->slug = $request->slug;
               $category->slug ;
        }else {
            $category->slug = Str::slug($category->name);
               $category->slug;
        }
        $category->save();
        return back()->with("message","Blog Category Added Successfully");
    }
}
