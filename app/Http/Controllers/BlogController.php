<?php

namespace App\Http\Controllers;

use App\Models\Post_logs;
use Illuminate\Http\Request;
Use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Exception;

class BlogController extends Controller
{
    public $action;
    public function index(){
        return view('admin.blog.index');
    }
    public function create(){
        return view('admin.blog.create');
    }
    public function store(Request $request){

       // return $request;
        try {
            DB::beginTransaction();

            $blogId = Blog::addNewBlog($request);

            $action ="created";

            Post_logs::addNewPostLog($blogId,$action);
            DB::commit();
            return back()->with("message",'Blog Save successfully');


        }
        catch (\Exception $e){
            DB::rollback();
            return back()->with("message",$e->getMessage());

        }
}

    public function blog(){
        return view('admin.blog.index',['blogs'=>Blog::where('user_id',Auth::user()->id)->get()]);
    }

    public function edit($id){

        return view("admin.blog.edit",['blog'=>Blog::find($id)]);

    }

    public function update($id,Request $request){

        try{
            DB::beginTransaction();


            Blog::updateBlog($id,$request);
            $action = 'updated';

            Post_logs::addNewPostLog($id,$action);
            DB::commit();

            return redirect('/blog-index')->with("update","post updated succefully");

       }
       catch (\Exception $e){
            DB::rollBack();
           return back()->with("message",$e->getMessage());

       }

    }

    public function delete($id){
        try{
            DB::beginTransaction();
            Blog::deleteBlog($id);

            $action= "deleted";

            Post_logs::addNewPostLog($id,$action);
            DB::commit();
            return back()->with('message',"Blog Deleted");
        }
        catch (Exception $e){
            DB::rollBack();
            return back()->with("message",$e->getMessage());

        }

    }

    public function show($id)
    {
      return view('admin.blog.singlePost',['blog'=>Blog::find($id)]);
    }

    public function allBlog(){
        return view('admin.blog.allblog',['blogs'=>Blog::all()]);
    }


}


