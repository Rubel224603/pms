<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        return view('admin.blog.index');
    }
    public function create(){
        return view('admin.blog.create');
    }
    public function store(Request $request){
       // return $request;

         Blog::addNewBlog($request);

        return back()->with("message",'Blog Save succefully');
    }

    public function blog(){
        return view('admin.blog.index',['blogs'=>Blog::all()]);
    }

    public function edit($id){
        
        return view("admin.blog.edit",['blog'=>Blog::find($id)]);
        
    }

    public function update($id,Request $request){
        Blog::updateBlog($id,$request);
        return redirect('/blog-index');
    }

    public function delete($id)
    {
        Blog::deleteBlog($id);
        return back('message',"Blog Deleted");
    }
    
    public function show($id)
    {
      return view('admin.blog.singlePost',['blog'=>Blog::find($id)]);
    }

  
}
   

