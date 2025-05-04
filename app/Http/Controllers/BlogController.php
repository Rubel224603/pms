<?php

namespace App\Http\Controllers;


use App\PostRepositoryInterface;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Exception;

class BlogController extends Controller
{
    public $action;
    protected $postRepo;

    public function __construct(PostRepositoryInterface $postRepoObj)
    {
        $this->postRepo = $postRepoObj;
    }
    public function index(){
        $blogs = $this->postRepo->all();
        return view('admin.blog.index', compact('blogs'));

        //return view('admin.blog.index',['blogs'=>Blog::where('user_id',Auth::user()->id)->get()]);
    }


    public function create(){
        return view('admin.blog.create');
    }

    public function store(Request $request){
         //return $request;
        $request->validate([
           'title'=>'required|max:100',
           'content'=>'required|max:250',
            'thumb_image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);


        try {
            DB::beginTransaction();

            //  $blogId = Blog::addNewBlog($request);
            //   $action = "created";
            //   Post_logs::addNewPostLog($blogId,$action);
            //



            //return $this->postRepo->store($request);
            $this->postRepo->store($request);

            //dd($this->postRepo->store($request));
            DB::commit();
            return back()->with("message",'Blog Save successfully');


        }
        catch (\Exception $e){
            DB::rollback();
            return back()->with("message",$e->getMessage());

        }
    }


    public function edit($id){

        $blog = $this->postRepo->find($id);
        return view('admin.blog.edit',compact('blog'));
       // return view("admin.blog.edit",['blog'=>Blog::find($id)]);

    }

    public function update($id,Request $request){

        $request->validate([
            'title'=>'required|max:100',
            'content'=>'required|max:250',
            'thumb_image' => 'image|mimes:jpeg,png,jpg|max:2024',
        ]);

        //return $request->input();
        $page = $request->input('page');
        //return $page;

       try{
           DB::beginTransaction();


            $this->postRepo->update($id,$request);

            // $action = 'updated';
            // $this->postRepo->addNewPostLog($updateBlogId,$action);
            //Post_logs::addNewPostLog($id,$action);
            DB::commit();
            return redirect('/blog-index?page=' . $page)->with("update","post updated successfully");
            //return redirect('/blog-index')->with("update","post updated successfully");

        }
        catch (\Exception $e){
            DB::rollBack();
            return back()->with("message",$e->getMessage());

        }

    }


    public function delete($id){
        try{
            DB::beginTransaction();
        //  Blog::deleteBlog($id);
            $this->postRepo->delete($id);


            //$action= "deleted";

            // Post_logs::addNewPostLog($id,$action);
               // $this->postRepo->addNewPostLog($deleteBlogId,$action);

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
        $blog = $this->postRepo->find($id);

        return view('admin.blog.singlePost',compact('blog'));
    }

    public function allBlog(){
        $blogs = $this->postRepo->all();
        return view('admin.blog.allblog',compact('blogs'));
    }


}


