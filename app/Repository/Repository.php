<?php


namespace App\Repository;


use App\Models\Blog;
Use App\Models\Post_logs;
use App\PostRepositoryInterface;


class Repository implements PostRepositoryInterface
{
    public function all(){
        return Blog::latest()->paginate(5);

    }
    public function find($id){
        return Blog::find($id);
    }

    public function store($request){

        //dd($blogId);
        $blogId = Blog::addNewBlog($request);
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

}
