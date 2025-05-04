<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\PostRepositoryInterface;
use Illuminate\Http\Request;
use function Illuminate\Foundation\Configuration\respond;

class   BlogController extends Controller
{
    protected  $postRepo;

    public function __construct(PostRepositoryInterface $postRepo)
    {
        $this->postRepo= $postRepo;
    }

    public function index()
    {
        $blogs= $this->postRepo->all();
        return response()->json($blogs);
    }
    public function show($id)
    {
       $blog = $this->postRepo->show($id);
       return response()->json($blog);
    }
//    public function display($id)
//    {
//        $blog = $this->postRepo->show($id);
//        return response()->json($blog);
//    }

    public function store(Request $request)
    {
        //dd($request);
        $blog = $this->postRepo->store($request);
        return response()->json('Blog has been created successfully!');

    }

    public function update($id,Request $request)
    {
        $isExist = Blog::find($id);
        if($isExist == null){
            return response()->json('Inavalid ID!!');
        }
        $blog = $this->postRepo->update($id,$request);
        return response()->json('Blog has been created successfully!');
    }

    public function destroy($id)
    {
        $isExist = Blog::find($id);
        if($isExist == null){
            return response()->json('Inavalid ID!!');
        }

        $blog = $this->postRepo->delete($id);
        return response()->json('Deleted Successfully');
    }

}
