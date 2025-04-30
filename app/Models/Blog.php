<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class Blog extends Model
{
    public static $blog, $image, $imgUrl,$directory,$imagName;

    use SoftDeletes;

    public static function getImageUrl($request){

        self::$image    = $request->thumb_image;
        self::$imagName = self::$image->getClientOriginalName();

        self::$directory = 'uploads/blog-image/';
        self::$image->move(self::$directory,self::$imagName);

        self::$imgUrl= self::$directory.self::$imagName;

        return self::$imgUrl;

    }

    public static function addNewBlog($request){

            self::$blog              = new Blog();
            self::$blog->title       = $request->title;
            self::$blog->user_id     = Auth::user()->id;
            self::$blog->content     = $request->content;
            self::$blog->thumb_image = self::getImageUrl($request);
            self::$blog->save();
            return self::$blog->id;
    }

    public static function updateBlog($id,$request){

        //dd($blog = Blog::find($id));
        //dd($request);

        self::$blog = Blog::find($id);


        if(isset($request->thumb_image)){

            self::$image               = $request->thumb_image;
            self::$imgUrl              = self::getImageUrl($request);
            self::$blog->thumb_image   = self::$imgUrl;
        }



            self::$blog->title       = $request->title;
            self::$blog->content     = $request->content;
            self::$blog->save();


    }

     public static function deleteBlog($id){

        self::$blog = Blog::find($id);
        //dd(self::$blog);

        if(file_exists(self::$blog->thumb_image))
        {
            unlink(self::$blog->thumb_image);
        }
        self::$blog->delete();

    }

    public function  user(){
      return $this->belongsTo(User::class);
    }

}
