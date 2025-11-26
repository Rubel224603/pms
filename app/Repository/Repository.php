<?php


namespace App\Repository;


use App\Models\Blog;
Use App\Models\Post_logs;
use App\PostRepositoryInterface;
use Illuminate\Support\Facades\Auth;


class Repository implements PostRepositoryInterface
{
    public function all(){
        $blogUser = Auth::user();
       // return $blogUser;
        $blogUserId = Auth::user()->id;
       
        
        return Blog::where("user_id",$blogUserId)->paginate(15);

        //return Blog::latest()->paginate(5);

    }
    public function find($id){
        return Blog::find($id);
    }

    public function store($request){


        $blogId = Blog::addNewBlog($request);
        //dd($blogId);
        $action = "created";

        //(Post_logs::addNewPostLog($blogId,$action));

        return Post_logs::addNewPostLog($blogId,$action);

     }
    public function update($id,$request){
        //$blogId = Blog::updateBlog($id,$request);
        // dd($blogId);
        Blog::updateBlog($id,$request);

        $action = "updated";
        return Post_logs::addNewPostLog($id,$action);
    }


    public function delete($id){

        Blog::deleteBlog($id);

        $action= "deleted";


        return Post_logs::addNewPostLog($id,$action);

    }
    public function show($id){
        return Blog::find($id);
    }

    public function allBlog(){
       $blogs = Blog::latest()->paginate(15);
        // $blogs = Blog::latest()->get();
        return $blogs;
    }
    public function search()
    {
        // TODO: Implement search() method.
    }

}
